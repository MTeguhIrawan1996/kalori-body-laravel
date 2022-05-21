<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Pembayaran;

class DashboardController extends Controller
{
     public function index()
    {
        // $transaksi = Transaksi::where('pembayaran_status', 'LUNAS')->sum('total_bayar');
        $member = User::where('status', 'AKTIF')->count('id');
        $membernon = User::where('status', 'NONAKTIF')
                    ->where('roles', 'USER')
                    ->count('id');
        $transaksi = Pembayaran::where('status_pembayaran', 'LUNAS')->sum('total_bayar');

        return view('pages.dashboard-admin',
        [
            'member' => $member,
            'membernon' => $membernon,
            'transaksi' => $transaksi
        ]);
        
    }

}