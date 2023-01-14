<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Validation\Validation;


class AdminController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Admin::latest()->select([
            'id',
            'nama_lengkap',
            'alamat',
            'no_hp',
            'gender',
        ])->get();
        // dd($admin);
        return view('kader.index',[
            'admin_list' => $admin
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Admin;
        return view('kader.create', compact(
            'model'
        ));
    }

    public function createProcess(Request $request)
    {
        Admin::create($request->all());

        // $model = new Admin;

        // $model-> nama_lengkap = $request->nama_lengkap;
        // $model-> tempat_lahir = $request->tempat_lahir;
        // $model-> tgl_lahir = $request->tgl_lahir;
        // $model-> umur = $request->umur;
        // $model-> alamat = $request->alamat;
        // $model-> gender = $request->gender;
        // $model-> no_hp = $request->no_hp;
        // $model-> email = $request->email;
        // // dd($request);

        return redirect('kader')->with('success', "Data berhasil ditambahkan");
    }


    public function detail($id)
    {
        $admin = Admin::find($id);

        return view('kader.show', compact('admin'));
    }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */

    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $admin = Admin::find($id);

        return view('kader.edit', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Admin::find($id);

        return view('kader.edit', compact('admin'));
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
        $admin = Admin::where('id',$id);
        $admin->update([
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_lahir'=> $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'gender'=> $request->gender,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
        ]);
        return redirect('kader')->with('success', "Data berhasil diperbarui");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $admin = Admin::where('id',$id);
        $admin->delete();
        return redirect('kader')->with('success', "Data berhasil dihapus");
    }
}
