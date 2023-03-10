<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Carbon\Carbon;

use App\Models\StudentsModel;
use Illuminate\Support\Facades\Storage;

class StudentsController extends Controller
{
    public function index()
    {
        $students = StudentsModel::all()->sortDesc();
        return view('dashboard.data-pendaftaran',  [
            'students' => $students,
        ]);
    }

    public function getPendaftar(Request $request)
    {
        $siswa_id = $request->input('siswa');
        $student = StudentsModel::where('id', $siswa_id)->first();

        return response($student);
    }

    public function approvePendaftaran(Request $request)
    {
        $siswa_id = $request->input('siswa');
        $status_daftar = $request->input('status_daftar');

        $approvePendaftaran = StudentsModel::where('id', $siswa_id)->update([
            'status' => $status_daftar,
        ]);
        if ($approvePendaftaran) {
            $data = ([
                'status' => 1,
                'message' => 'Pendaftaran telah diproses dengan status Diterima'
            ]);
            return response($data);
        }
    }

    public function deniedPendaftaran(Request $request)
    {

        $siswa_id = $request->input('siswa');
        $status_daftar = $request->input('status_daftar');

        $approvePendaftaran = StudentsModel::where('id', $siswa_id)->update([
            'status' => $status_daftar,
        ]);
        if ($approvePendaftaran) {
            $data = ([
                'status' => 1,
                'message' => 'Pendaftaran telah diproses dengan status Ditolak'
            ]);
            return response($data);
        }
    }

    public function hapusPendaftar(Request $request)
    {
        $siswa_id = $request->input('siswa');
        $student = StudentsModel::where('id', $siswa_id)->first();

        $unlink_pasfoto = Storage::delete($student->pasfoto);
        $unlink_kk = Storage::delete($student->kk);
        $unlink_ktp = Storage::delete($student->ktp);
        $unlink_transkrip = Storage::delete($student->transkrip);
        $unlink_ijazah = Storage::delete($student->ijazah);
        $unlink_buktipembayaran = Storage::delete($student->buktipembayaran);
        if (
            $unlink_pasfoto && $unlink_kk
            && $unlink_ktp && $unlink_transkrip && $unlink_ijazah && $unlink_buktipembayaran
        ) {
            StudentsModel::destroy($siswa_id);
            $data = ([
                'status' => 1,
                'message' => 'Berhasil Hapus Data!'
            ]);
            return response($data);
        }
    }

    public function statusPendaftaran()
    {
        $email = auth()->user()->email;
        $student = StudentsModel::where('email', $email)->first();

        return view('siswa.status-pendaftaran',  [
            'student' => $student,
        ]);
    }

    public function kartuPendaftaranAdmin($id)
    {
        $student = StudentsModel::where('id', $id)->first();

        $hari_ini = Carbon::now()->isoFormat('D MMMM Y');
        $tahun = Carbon::now()->isoFormat('Y');

        $pdf = PDF::loadview('siswa.cetak-kartu',  [
            'student' => $student,
            'tanggal' => $hari_ini,
            'tahun' => $tahun
        ]);
        $pdf->set_paper('A5', 'landscape');
        $pdf->render();

        return $pdf->download('kartu-pendaftaran.pdf');
    }

    public function cetakKartuPendaftaran()
    {
        $email = auth()->user()->email;
        $student = StudentsModel::where('email', $email)->first();

        $hari_ini = Carbon::now()->isoFormat('D MMMM Y');
        $tahun = Carbon::now()->isoFormat('Y');

        $pdf = PDF::loadview('siswa.cetak-kartu',  [
            'student' => $student,
            'tanggal' => $hari_ini,
            'tahun' => $tahun
        ]);
        $pdf->set_paper('A5', 'landscape');
        $pdf->render();

        return $pdf->download('kartu-pendaftaran.pdf');
    }
}
