<?php

namespace App\Http\Controllers\Admin;

use App\Pembayaran;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;


class LaporanMemberNonaktifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax())
        {
            $query = User::all()->where('status', 'NONAKTIF');

            return Datatables::of($query)

           ->editColumn('tgl_selesai', function($data){
                
                if($data->tgl_selesai == NULL){
                    return'VERIFIKASI DATA';
                } else if ($data->tgl_selesai != NULL){
                    $newdate = Carbon::createFromFormat('Y-m-d H:i:s', $data->tgl_selesai)->format('d-m-Y');
                    return $newdate;
                } 
            })
            ->make();
        }
        return view('pages.dashboard-admin-laporan-nonaktif');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

       /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showNonaktif()
    {
        $query = User::all()->where('status', 'NONAKTIF');
       
        return view('pages.cetak-laporan-member-nonaktif',[
            'query' => $query,
            
        ]);
    }
}