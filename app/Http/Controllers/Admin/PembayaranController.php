<?php

namespace App\Http\Controllers\Admin;

use App\Pembayaran;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Admin\PembayaranRequest;
use Carbon\Carbon;

class PembayaranController extends Controller
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
            $query = Pembayaran::with('user');   
            
            return Datatables::of($query)
            ->editColumn('tgl_bayar', function($data){;
                $newdate = Carbon::createFromFormat('Y-m-d', $data->tgl_bayar)->format('d-m-Y');
                return $newdate;
                
            })
            ->addColumn('kode_anggota', function($data){
                return $data->user->kode_anggota;
            })
            ->addColumn('name', function($data){
                return $data->user->name;
            })
            ->addColumn('action', function($item){
                return'
                    <div class="btn-group">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown">
                            Aksi
                            </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="' . route('pembayaran.edit', $item->id) . '">
                                        Sunting
                                    </a>
                                    <form action="'. route('pembayaran.destroy', $item->id) .'" method="POST">
                                            '. method_field('delete') . csrf_field() .'
                                            <button type="submit" class="dropdown-item" text-danger>
                                                Hapus
                                            </button>
                                    </form>
                                </div>
                        </div>
                    </div>
                ';
            })
            ->rawColumns(['action'])
            ->make();
        }
        return view('pages.dashboard-admin-pembayaran');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all()->where('status', 'AKTIF');

        return view('pages.admin.pembyaran.create',[
            'users' => $users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PembayaranRequest $request)
    {
        $data = $request->all();

        Pembayaran::create($data);

        return redirect()->route('pembayaran.index');
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
        $item = Pembayaran::findOrFail($id);
        // $newdate = Carbon::createFromFormat('Y-m-d H:i:s', $item->tgl_selesai)->format('m-d-Y H:i:s');

        return view('pages.admin.pembyaran.edit',[
            'item' => $item,
            // 'newdate'=> $newdate
        ]);
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
        $data = $request->all();
        $item = Pembayaran::findOrFail($id);

        $item->update($data);

        return redirect()->route('pembayaran.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Pembayaran::findorFail($id);
        $item->delete();

        return redirect()->route('pembayaran.index');
    }
}