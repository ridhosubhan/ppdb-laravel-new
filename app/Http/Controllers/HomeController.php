<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\StudentsModel;
use App\Models\CategoryModel;
use App\Models\TestimonialsModel;
use App\Models\ArticlesModel;
use App\Models\ArticleCategoryModel;
use App\Models\HomeVisitCounterModel;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        // TAMBAH VISITOR
        HomeVisitCounterModel::where('id', '1')->increment('home_counter_visit');

        $data = [
            'categories'    => CategoryModel::all(),
            'testimonials'    => TestimonialsModel::latest()->take(3)->get(),
        ];
        return view('template.homepage.home', $data);
    }

    public function sambutanKaprodi()
    {
        return view('template.homepage.sambutan-kaprodi');
    }

    public function tentangMMT()
    {
        return view('template.homepage.tentang-mmt');
    }

    public function visiMisi()
    {
        return view('template.homepage.visi-misi');
    }

    public function scm()
    {
        return view('template.homepage.supply-chain-management');
    }

    public function project_management()
    {
        return view('template.homepage.project-management');
    }

    public function nomorRegistrasi()
    {
        // mengambil data barang dengan kode paling besar
        $query = StudentsModel::max('no_registrasi');

        // mengambil angka dari kode barang terbesar, menggunakan fungsi substr
        // dan diubah ke integer dengan (int)
        $urutan = (int) substr($query, 4, 4);

        // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
        $urutan++;

        // membentuk kode barang baru
        // perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
        // misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
        // angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
        $huruf = "REG-";
        $kodeBarang = $huruf . sprintf("%04s", $urutan);
        return $kodeBarang;
    }

    public function pendaftaran()
    {
        $cekDaftar = User::join('students', 'users.email', '=', 'students.email')
            ->where('users.email', auth()->user()->email)
            ->first(['students.email']);

        return view('template.homepage.pendaftaran', [
            'cekDaftar' => $cekDaftar
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'nama_lengkap' => 'required',
                'jenis_kelamin' => 'required',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required',
                'alamat' => 'required',
                'pasfoto' => 'required|mimes:png,jpg,jpeg|max:2048',
                'kk' => 'required|mimes:png,jpg,jpeg|max:2048',
                'ktp' => 'required|mimes:png,jpg,jpeg|max:2048',
                'gelombang' => 'required',
                'prodi' => 'required',
                'transkrip' => 'required|mimes:pdf|max:2048',
                'ijazah' => 'required|mimes:pdf|max:2048',
                'bukti_pembayaran' => 'required|mimes:png,jpg,jpeg,pdf|max:2048',
            ],
            [
                'nama_lengkap.required' => 'Wajib diisi',

                'password.required' => 'Wajib diisi',

                'jenis_kelamin.required' => 'Wajib diisi',
                'tempat_lahir.required' => 'Wajib diisi',
                'tanggal_lahir.required' => 'Wajib diisi',
                'alamat.required' => 'Wajib diisi',

                'pasfoto.required' => 'Wajib diisi',
                'pasfoto.mimes' => 'Mohon upload file foto dengan ekstensi png,jpg,jpeg',
                'pasfoto.max' => 'File terlalu besar',

                'kk.required' => 'Wajib diisi',
                'kk.mimes' => 'Mohon upload file foto dengan ekstensi png,jpg,jpeg',
                'kk.max' => 'File terlalu besar',

                'ktp.required' => 'Wajib diisi',
                'ktp.mimes' => 'Mohon upload file foto dengan ekstensi png,jpg,jpeg',
                'ktp.max' => 'File terlalu besar',

                'gelombang.required' => 'Wajib diisi',
                'prodi.required' => 'Wajib diisi',

                'transkrip.required' => 'Wajib diisi',
                'transkrip.mimes' => 'Mohon upload file foto dengan ekstensi pdf',
                'transkrip.max' => 'File terlalu besar',

                'ijazah.required' => 'Wajib diisi',
                'ijazah.mimes' => 'Mohon upload file foto dengan ekstensi pdf',
                'ijazah.max' => 'File terlalu besar',

                'bukti_pembayaran.required' => 'Wajib diisi',
                'bukti_pembayaran.mimes' => 'Mohon upload file foto dengan ekstensi png,jpg,jpeg,pdf',
                'bukti_pembayaran.max' => 'File terlalu besar',
            ]
        );

        StudentsModel::Create([
            'no_registrasi' => $this->nomorRegistrasi(),
            'nama' => $request->input('nama_lengkap'),
            'email' => auth()->user()->email,
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'alamat' => $request->input('alamat'),
            'pasfoto' => $request->file('pasfoto')->store('documents'),
            'kk' => $request->file('kk')->store('documents'),
            'ktp' => $request->file('ktp')->store('documents'),
            'gelombang' => $request->input('gelombang'),
            'prodi' => $request->input('prodi'),
            'transkrip' => $request->file('transkrip')->store('documents'),
            'ijazah' => $request->file('ijazah')->store('documents'),
            'buktipembayaran' => $request->file('bukti_pembayaran')->store('documents'),
            'status' => 'DAFTAR'
        ]);

        return redirect('/pendaftaran')->with('sukses', 'Berhasil Daftar!');
    }

    public function blog(Request $request)
    {
        $articles = ArticlesModel::all()->sortDesc();
        $articlesCategory = ArticleCategoryModel::join('categories', 'categories.id', '=', 'article_category.category_id')
            ->get(['article_category.*', 'categories.name', 'categories.slug', 'categories.id as kategori_id'])->sortDesc();

        $recent = ArticlesModel::latest()->take(5)->get();
        return view('template.homepage.blog', [
            'articles' => $articles,
            'articlesCategory' => $articlesCategory,
            'recents' => $recent,
        ]);
    }

    public function showBlog($slug)
    {
        // TAMBAH VISITOR
        ArticlesModel::where('slug', $slug)->increment('views');

        $articles  = ArticlesModel::where('slug', $slug)->first();
        $articlesCategory = ArticleCategoryModel::join('categories', 'categories.id', '=', 'article_category.category_id')
            ->get(['article_category.*', 'categories.name', 'categories.slug'])->sortDesc();

        $recent = ArticlesModel::select('title', 'slug')->where('status', 'PUBLISH')->orderBy('created_at', 'desc')->limit(5)->get();

        $data = [
            'article' => $articles,
            'articlesCategory' => $articlesCategory,
            'recents' => $recent,
        ];
        return view('template.homepage.single-page-blog', $data);
    }

    public function searchBlog(Request $request)
    {

        $keyword    = $request->get('s') ? $request->get('s') : '';

        $articles  = ArticlesModel::where('title', 'LIKE', "%$keyword%")
            ->where('status', 'PUBLISH')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        $articlesCategory = ArticleCategoryModel::join('categories', 'categories.id', '=', 'article_category.category_id')
            ->get(['article_category.*', 'categories.name'])->sortDesc();

        $recents = ArticlesModel::select('title', 'slug')->where('status', 'PUBLISH')->orderBy('created_at', 'desc')->limit(5)->get();

        $data = [
            'articles'  => $articles,
            'articlesCategory' => $articlesCategory,
            'recents'   => $recents
        ];

        return view('template.homepage.blog', $data);
    }

    public function categoryBlog($category)
    {
        $categories  = CategoryModel::where('id', 'LIKE', "%$category%")
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        $articlesCategory = ArticleCategoryModel::join('categories', 'categories.id', '=', 'article_category.category_id')
            ->get(['article_category.*', 'categories.name'])->sortDesc();

        $articles = ArticlesModel::where('category', 'LIKE', "%$category%")
            ->where('status', 'PUBLISH')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        $recents = ArticlesModel::select('title', 'slug')->where('status', 'PUBLISH')->orderBy('created_at', 'desc')->limit(5)->get();

        $data = [
            'articles'  => $articles,
            'articlesCategory' => $articlesCategory,
            'recents'   => $recents
        ];

        return view('template.homepage.blog', $data);
    }
}
