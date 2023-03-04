<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TestimonialsModel;
use Illuminate\Support\Facades\Storage;

class TestimonialsController extends Controller
{
    public function index()
    {
        $testimonials = TestimonialsModel::all()->sortDesc();
        return view('admin.testimonial.index',  [
            'testimonials' => $testimonials,
        ]);
    }

    public function create()
    {
        return view('admin.testimonial.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'image' => 'required|mimes:png,jpg,jpeg|max:2048',
                'nama' => 'required',
                'posisi_kerja' => 'required',
                'tempat_kerja' => 'required',
                'testimonial' => 'required',
            ],
            [
                'image.required' => 'Wajib diisi',
                'image.mimes' => 'Mohon upload file foto dengan ekstensi png,jpg,jpeg',
                'image.max' => 'File terlalu besar',

                'nama.required' => 'Wajib diisi',
                'posisi_kerja.required' => 'Wajib diisi',
                'tempat_kerja.required' => 'Wajib diisi',
                'testimonial.required' => 'Wajib diisi',
            ]
        );

        TestimonialsModel::Create([
            'image' => $request->file('image')->store('testimonial'),
            'name' => $request->input('nama'),
            'job_position' => $request->input('posisi_kerja'),
            'workplace' => $request->input('tempat_kerja'),
            'content' => $request->input('testimonial'),
            'create_by' => auth()->user()->id,
        ]);

        return redirect('/testimonial')->with('sukses', 'Berhasil Menambahkan Data!');
    }

    public function edit($id)
    {
        $testimonials = TestimonialsModel::where('id', $id)->first();
        return view('admin.testimonial.edit', [
            'testimonials' => $testimonials,
        ]);
    }

    public function update(Request $request)
    {
        $testimonial_id = $request->input('testimonial_id');
        $testimonials = TestimonialsModel::where('id', $testimonial_id)->first();

        if ($request->hasFile('image')) {
            $validatedData = $request->validate(
                [
                    'image' => 'required|mimes:png,jpg,jpeg|max:2048',
                    'nama' => 'required',
                    'posisi_kerja' => 'required',
                    'tempat_kerja' => 'required',
                    'testimonial' => 'required',
                ],
                [
                    'image.required' => 'Wajib diisi',
                    'image.mimes' => 'Mohon upload file foto dengan ekstensi png,jpg,jpeg',
                    'image.max' => 'File terlalu besar',

                    'nama.required' => 'Wajib diisi',
                    'posisi_kerja.required' => 'Wajib diisi',
                    'tempat_kerja.required' => 'Wajib diisi',
                    'testimonial.required' => 'Wajib diisi',
                ]
            );

            $updateTestimonial = TestimonialsModel::where('id', $testimonial_id)->update([
                'image' => $request->file('image')->store('testimonial'),
                'name' => $request->input('nama'),
                'job_position' => $request->input('posisi_kerja'),
                'workplace' => $request->input('tempat_kerja'),
                'content' => $request->input('testimonial'),
                'create_by' => auth()->user()->id,
                'update_by' => auth()->user()->id,
            ]);

            if ($updateTestimonial) {
                Storage::delete($testimonials->image);
                return redirect('/testimonial')->with('sukses', 'Berhasil Merubah Data!');
            }
        } else {
            $validatedData = $request->validate(
                [
                    'nama' => 'required',
                    'posisi_kerja' => 'required',
                    'tempat_kerja' => 'required',
                    'testimonial' => 'required',
                ],
                [
                    'nama.required' => 'Wajib diisi',
                    'posisi_kerja.required' => 'Wajib diisi',
                    'tempat_kerja.required' => 'Wajib diisi',
                    'testimonial.required' => 'Wajib diisi',
                ]
            );

            $updateTestimonial = TestimonialsModel::where('id', $testimonial_id)->update([
                'name' => $request->input('nama'),
                'job_position' => $request->input('posisi_kerja'),
                'workplace' => $request->input('tempat_kerja'),
                'content' => $request->input('testimonial'),
                'create_by' => auth()->user()->id,
                'update_by' => auth()->user()->id,
            ]);

            if ($updateTestimonial) {
                return redirect('/testimonial')->with('sukses', 'Berhasil Merubah Data!');
            }
        }
    }

    public function delete(Request $request)
    {
        $testimonial_id = $request->input('testimonial_id');
        $image = $request->input('image');

        $unlink_image = Storage::delete($image);
        if ($unlink_image) {
            TestimonialsModel::destroy($testimonial_id);
            $data = ([
                'status' => 1,
                'message' => 'Berhasil Hapus Data!'
            ]);
            return response($data);
        }
    }

    public function indexTestimoni()
    {
        $testimoni = TestimonialsModel::where('create_by', auth()->user()->id)->first();
        return view('admin.testimoni-user.index',  [
            'testimoni' => $testimoni,
        ]);
    }

    public function createTestimoni()
    {
        return view('admin.testimoni-user.create');
    }

    public function storeTestimoni(Request $request)
    {
        $validatedData = $request->validate(
            [
                'image' => 'required|mimes:png,jpg,jpeg|max:2048',
                'nama' => 'required',
                'posisi_kerja' => 'required',
                'tempat_kerja' => 'required',
                'testimonial' => 'required',
            ],
            [
                'image.required' => 'Wajib diisi',
                'image.mimes' => 'Mohon upload file foto dengan ekstensi png,jpg,jpeg',
                'image.max' => 'File terlalu besar',

                'nama.required' => 'Wajib diisi',
                'posisi_kerja.required' => 'Wajib diisi',
                'tempat_kerja.required' => 'Wajib diisi',
                'testimonial.required' => 'Wajib diisi',
            ]
        );

        TestimonialsModel::Create([
            'image' => $request->file('image')->store('testimonial'),
            'name' => $request->input('nama'),
            'job_position' => $request->input('posisi_kerja'),
            'workplace' => $request->input('tempat_kerja'),
            'content' => $request->input('testimonial'),
            'create_by' => auth()->user()->id,
        ]);

        return redirect('/testimoni')->with('sukses', 'Berhasil Menambahkan Data!');
    }

    public function editTestimoni($id)
    {
        $testimoni = TestimonialsModel::where('id', $id)->first();
        return view('admin.testimoni-user.edit', [
            'testimoni' => $testimoni,
        ]);
    }

    public function updateTestimoni(Request $request)
    {
        $testimonial_id = $request->input('testimonial_id');
        $testimonials = TestimonialsModel::where('id', $testimonial_id)->first();

        if ($request->hasFile('image')) {
            $validatedData = $request->validate(
                [
                    'image' => 'required|mimes:png,jpg,jpeg|max:2048',
                    'nama' => 'required',
                    'posisi_kerja' => 'required',
                    'tempat_kerja' => 'required',
                    'testimonial' => 'required',
                ],
                [
                    'image.required' => 'Wajib diisi',
                    'image.mimes' => 'Mohon upload file foto dengan ekstensi png,jpg,jpeg',
                    'image.max' => 'File terlalu besar',

                    'nama.required' => 'Wajib diisi',
                    'posisi_kerja.required' => 'Wajib diisi',
                    'tempat_kerja.required' => 'Wajib diisi',
                    'testimonial.required' => 'Wajib diisi',
                ]
            );

            $updateTestimonial = TestimonialsModel::where('id', $testimonial_id)->update([
                'image' => $request->file('image')->store('testimonial'),
                'name' => $request->input('nama'),
                'job_position' => $request->input('posisi_kerja'),
                'workplace' => $request->input('tempat_kerja'),
                'content' => $request->input('testimonial'),
                'create_by' => auth()->user()->id,
                'update_by' => auth()->user()->id,
            ]);

            if ($updateTestimonial) {
                Storage::delete($testimonials->image);
                return redirect('/testimoni')->with('sukses', 'Berhasil Merubah Data!');
            }
        } else {
            $validatedData = $request->validate(
                [
                    'nama' => 'required',
                    'posisi_kerja' => 'required',
                    'tempat_kerja' => 'required',
                    'testimonial' => 'required',
                ],
                [
                    'nama.required' => 'Wajib diisi',
                    'posisi_kerja.required' => 'Wajib diisi',
                    'tempat_kerja.required' => 'Wajib diisi',
                    'testimonial.required' => 'Wajib diisi',
                ]
            );

            $updateTestimonial = TestimonialsModel::where('id', $testimonial_id)->update([
                'name' => $request->input('nama'),
                'job_position' => $request->input('posisi_kerja'),
                'workplace' => $request->input('tempat_kerja'),
                'content' => $request->input('testimonial'),
                'create_by' => auth()->user()->id,
                'update_by' => auth()->user()->id,
            ]);

            if ($updateTestimonial) {
                return redirect('/testimoni')->with('sukses', 'Berhasil Merubah Data!');
            }
        }
    }
}
