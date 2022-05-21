<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pembayaran;
use App\User;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;

class LaporanPembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(request()->ajax())
        {
            // if(!empty($request->min)){
                $query = Pembayaran::with(['user'])
                ->whereBetween('tgl_bayar', [$request->min, $request->max])
                ->withTrashed();  
            // } else {
            //     $query = Pembayaran::with(['user']);
            // }
            return Datatables::of($query)

            ->editColumn('tgl_bayar', function($data){;
                $newdate = Carbon::createFromFormat('Y-m-d', $data->tgl_bayar)->format('d-m-Y');
                return $newdate;
                
            })
            ->make();
        }
        return view('pages.dashboard-admin-laporan-pembayaran');
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

        
        return view('pages.dashboard-admin-laporan-pembayaran');
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

    public function showPembayaran(request $request)
    {
       
            // $min = $request->min;
            // $max = $request->min;

            $query = Pembayaran::with(['user'])
                ->whereBetween('tgl_bayar', [$request->min, $request->max])
                ->withTrashed()
                ->get();
           return view('pages.cetak-laporan-pembayaran',[
            'query' => $query,
            
        ]);
    }
}
    