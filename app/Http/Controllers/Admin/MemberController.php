<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Admin\UserRequest;
use Carbon\Carbon;

class MemberController extends Controller
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
            $query = User::query();

            return Datatables::of($query)

            ->editColumn('tgl_selesai', function($data){
                
                if($data->tgl_selesai == NULL){
                    return'VERIFIKASI DATA';
                } else if ($data->tgl_selesai != NULL){
                    $newdate = Carbon::createFromFormat('Y-m-d H:i:s', $data->tgl_selesai)->format('d-m-Y');
                    return $newdate;
                } 
            })
            ->addColumn('action', function($item){
                return'
                    <div class="btn-group">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown">
                            Aksi
                            </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="' . route('member.edit', $item->id) . '">
                                        Verifikasi
                                    </a>
                                    <a class="dropdown-item" href="' . route('member.show', $item->id) . '">
                                        Detail
                                    </a>
                                    <form action="'. route('member.destroy', $item->id) .'" method="POST">
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
        return view('pages.dashboard-admin-member');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $code = 'GYM-'. mt_rand(00000,99999);

        return view('pages.admin.user.create',[
            'code' => $code
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $data = $request->all();

        $data['password'] = bcrypt($request->password);

        User::create($data);

        return redirect()->route('member.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = User::findOrFail($id);
        

        return view('pages.admin.user.detail',[
            'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = User::findOrFail($id);
        $code = 'GYM-'. mt_rand(00000,99999);
        // $newdate = Carbon::createFromFormat('Y-m-d H:i:s', $item->tgl_selesai)->format('m-d-Y H:i:s');

        return view('pages.admin.user.edit',[
            'item' => $item,
            'code' => $code
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
        $item = User::findOrFail($id);

        if($request->password)
        {
            $data['password'] = bcrypt($request->password);
        }
        else
        {
            unset($data['password']);
        }
        $item->update($data);

        return redirect()->route('member.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = User::findorFail($id);
        $item->delete();

        return redirect()->route('member.index');
    }
}