<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\StudentsModel;
use App\Models\ArticlesModel;
use App\Models\HomeVisitCounterModel;

class DashboardsController extends Controller
{
    public function index()
    {
        $pendaftarTotal = StudentsModel::count('email');
        $pendaftarDiterima = StudentsModel::where('status', 'DISETUJUI')->count('email');
        $registrasiAkun = User::count('email');

        $visitorArtikel = ArticlesModel::sum('views');
        $visitorHome = HomeVisitCounterModel::sum('home_counter_visit');
        $visitorTotal = $visitorArtikel + $visitorHome;

        return view('dashboard.index', [
            'pendaftarTotal' => $pendaftarTotal,
            'pendaftarDiterima' => $pendaftarDiterima,
            'registrasiAKun' => $registrasiAkun,
            'visitorTotal' => $visitorTotal
        ]);
    }
}
