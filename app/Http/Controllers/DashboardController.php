<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use App\Models\Kerusakan;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $aset_count = Aset::count();
        $totalKerusakan = Kerusakan::count();
        $totalPeminjaman = Peminjaman::count();

        return view('dashboard', compact('aset_count', 'totalKerusakan', 'totalPeminjaman'));
    }
}
