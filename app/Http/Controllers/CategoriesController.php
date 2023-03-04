<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

use App\Models\CategoryModel;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = CategoryModel::all()->sortDesc();
        return view('admin.kategori.kategori-artikel',  [
            'categories' => $categories,
        ]);
    }

    public function create()
    {
        return view('admin.kategori.create');
    }

    public function checkSlug()
    {
        $slug = SlugService::createSlug(CategoryModel::class, 'slug', request('title'));
        return response()->json(['slug' => $slug]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'nama_kategori' => 'required',
                'deskripsi_kategori' => 'required',
                'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            ],
            [
                'nama_kategori.required' => 'Wajib diisi',
                'deskripsi_kategori.required' => 'Wajib diisi',

                'image.required' => 'Wajib diisi',
                'image.mimes' => 'Mohon upload file foto dengan ekstensi png,jpg,jpeg',
                'image.max' => 'File terlalu besar',
            ]
        );

        CategoryModel::Create([
            'name' => $request->input('nama_kategori'),
            'description' => $request->input('deskripsi_kategori'),
            'slug' => $request->input('slug'),
            'image' => $request->file('image')->store('category'),
            'create_by' => auth()->user()->id,
        ]);

        return redirect('/kategori-artikel')->with('sukses', 'Berhasil Menambahkan Data!');
    }

    public function edit($id)
    {
        $category = CategoryModel::where('id', $id)->first();
        return view('admin.kategori.edit', [
            'category' => $category,
        ]);
    }

    public function update(Request $request)
    {
        $kategori_id = $request->input('kategori_id');
        $category = CategoryModel::where('id', $kategori_id)->first();

        if ($request->hasFile('image')) {
            $validatedData = $request->validate(
                [
                    'nama_kategori' => 'required',
                    'deskripsi_kategori' => 'required',
                    'image' => 'required|mimes:png,jpg,jpeg|max:2048',
                ],
                [
                    'nama_kategori.required' => 'Wajib diisi',
                    'deskripsi_kategori.required' => 'Wajib diisi',

                    'image.required' => 'Wajib diisi',
                    'image.mimes' => 'Mohon upload file foto dengan ekstensi png,jpg,jpeg',
                    'image.max' => 'File terlalu besar',
                ]
            );

            $updateKategori = CategoryModel::where('id', $kategori_id)->update([
                'name' => $request->input('nama_kategori'),
                'description' => $request->input('deskripsi_kategori'),
                'slug' => $request->input('slug'),
                'image' => $request->file('image')->store('category'),
                'create_by' => auth()->user()->id,
                'update_by' => auth()->user()->id,
            ]);

            if ($updateKategori) {
                Storage::delete($category->image);
                return redirect('/kategori-artikel')->with('sukses', 'Berhasil Merubah Data!');
            }
        } else {
            $validatedData = $request->validate(
                [
                    'nama_kategori' => 'required',
                    'deskripsi_kategori' => 'required',
                ],
                [
                    'nama_kategori.required' => 'Wajib diisi',
                    'deskripsi_kategori.required' => 'Wajib diisi',
                ]
            );

            $updateKategori = CategoryModel::where('id', $kategori_id)->update([
                'name' => $request->input('nama_kategori'),
                'description' => $request->input('deskripsi_kategori'),
                'slug' => $request->input('slug'),
                'create_by' => auth()->user()->id,
                'update_by' => auth()->user()->id,
            ]);

            if ($updateKategori) {
                return redirect('/kategori-artikel')->with('sukses', 'Berhasil Merubah Data!');
            }
        }
    }

    public function delete(Request $request)
    {
        $kategori_id = $request->input('kategori_id');
        $image = $request->input('image');
        $unlink_image = Storage::delete($image);

        if ($unlink_image) {
            CategoryModel::destroy($kategori_id);
            $data = ([
                'status' => 1,
                'message' => 'Berhasil Hapus Data!'
            ]);
            return response($data);
        }
    }
}
