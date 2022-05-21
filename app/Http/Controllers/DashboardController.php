<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
        public function index()
    {
        return view('pages.dashboard');
    }

        public function alat_gym()
    {
        return view('pages.dashboard-alat-gym');
    }

        public function e_member()
    {
        return view('pages.dashboard-e-member');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function create_emember(Request $request, $redirect)
    {
        $item = Auth::user();
        $data = $request->all();

        $item->update($data);


        return redirect()->route($redirect);
        
    }

        public function hitung_kalori()
    {
        $hasil = 0;
        return view('pages.dashboard-hitung-kalori',compact('hasil'));
    }

    public function hitung(Request $request)
    {
        
        
        $tinggi = $request->input('tinggi');
        $berat = $request->input('berat');
        $usia =  $request->input('usia');
        

        if ($request->jenis_kelamin == 'Laki-Laki') 
        {
            $hasil = (('88.4' + '13.4' * $berat) + ('4.8' * $tinggi) - ('5.68' * $usia));
            // $hasila = ($hasil / '1000');
            return view('pages.dashboard-hitung-kalori',compact('hasil')
            );

        } 
        else
        {
            $hasil = (('447.6' + '9.25' * $berat) + ('3.10' * $tinggi) - ('4.33' * $usia));
            // $hasila = ($hasil / '1000');
            return view('pages.dashboard-hitung-kalori',compact('hasil')
            );
        }

    }

        public function pembayaran()
    {
        return view('pages.dashboard-pembayaran');
    }

        public function cetak_e_member()
    {
        return view('pages.dashboard-cetak-emember');
    }

        public function cetakCard()
    {
        return view('pages.dashboard-cetak-card');
    }
}