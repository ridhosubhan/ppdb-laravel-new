<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Carbon\Carbon;

use App\Models\ArticlesModel;
use App\Models\CategoryModel;
use App\Models\ArticleCategoryModel;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = ArticlesModel::all()->sortDesc();
        return view('admin.artikel.index',  [
            'articles' => $articles,
        ]);
    }

    public function create()
    {
        $categories = CategoryModel::all()->sortDesc();
        return view('admin.artikel.create',  [
            'categories' => $categories,
        ]);
    }

    public function checkSlug()
    {
        $slug = SlugService::createSlug(ArticlesModel::class, 'slug', request('title'));
        return response()->json(['slug' => $slug]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'judul_artikel' => 'required',
                'slug' => 'required',
                'kategori' => 'required',
                'status' => 'required',
                'konten' => 'required',
            ],
            [
                'judul_artikel.required' => 'Wajib diisi',
                'slug.required' => 'Wajib diisi',
                'kategori.required' => 'Wajib diisi',
                'status.required' => 'Wajib diisi',
                'konten.required' => 'Wajib diisi',
            ]
        );

        $article = ArticlesModel::insertGetId([
            'title' => $request->input('judul_artikel'),
            'slug' => $request->input('slug'),
            'content' => $request->input('konten'),
            'category' => json_encode($request->input('kategori')),
            'status' => $request->input('status'),
            'create_by' => auth()->user()->id,
            'created_at' => Carbon::now()
        ]);

        foreach ($request->input('kategori') as $row) {
            ArticleCategoryModel::Create([
                'article_id' => $article,
                'category_id' => $row,
            ]);
        }

        return redirect('/artikel-berita')->with('sukses', 'Berhasil Menambahkan Artikel!');
    }

    public function edit($id)
    {
        $articles = ArticlesModel::where('id', $id)->first();
        $categories = CategoryModel::all()->sortDesc();
        return view('admin.artikel.edit',  [
            'articles' => $articles,
            'categories' => $categories,
        ]);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate(
            [
                'judul_artikel' => 'required',
                'slug' => 'required',
                'kategori' => 'required',
                'status' => 'required',
                'konten' => 'required',
            ],
            [
                'judul_artikel.required' => 'Wajib diisi',
                'slug.required' => 'Wajib diisi',
                'kategori.required' => 'Wajib diisi',
                'status.required' => 'Wajib diisi',
                'konten.required' => 'Wajib diisi',
            ]
        );

        $artikel_id = $request->input('artikel_id');
        $updateArticle = ArticlesModel::where('id', $artikel_id)->update([
            'title' => $request->input('judul_artikel'),
            'slug' => $request->input('slug'),
            'content' => $request->input('konten'),
            'category' => json_encode($request->input('kategori')),
            'status' => $request->input('status'),
            'create_by' => auth()->user()->id,
            'update_by' => auth()->user()->id,
        ]);

        $hapusArtikelKategori = ArticleCategoryModel::where('article_id', $artikel_id)->delete();

        foreach ($request->input('kategori') as $row) {
            ArticleCategoryModel::Create([
                'article_id' => $artikel_id,
                'category_id' => $row,
            ]);
        }

        if ($hapusArtikelKategori) {
            return redirect('/artikel-berita')->with('sukses', 'Berhasil Merubah Artikel!');
        }
    }

    public function delete(Request $request)
    {
        $artikel_id = $request->input('artikel_id');

        $hapusArtikelKategori = ArticleCategoryModel::where('article_id', $artikel_id)->delete();
        $hapusArtikel = ArticlesModel::destroy($artikel_id);
        if ($hapusArtikel) {
            $data = ([
                'status' => 1,
                'message' => 'Berhasil Hapus Data!'
            ]);
            return response($data);
        }
    }
}
