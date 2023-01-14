<?php

namespace App\Http\Controllers;

use App\Models\Orangtua;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use PhpParser\Node\Expr\FuncCall;

class OrangtuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orangtua =Orangtua::latest()->select([
            'id',
            'nama_lengkap',
            'alamat',
            'no_hp',
            'gender',
        ])->get();

        return view('orangtua.index',[
            'orangtua_list' => $orangtua
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orangtua.create');
    }

    public function createProcess(Request $request)
    {
        Orangtua::create($request->all());
        // $validated = $request->validate([
        //     'nama_lengkap'=>'required|max:100',
        //     'tempat_lahir'=>'required',
        //     'tgl_lahir'=>'required|date',
        //     'umur'=>'required',
        //     'alamat'=>'required',
        //     'gender'=>'required',
        //     'no_hp'=>'required|max:12',
        //     'email'=>'required|unique:admins',
        // ]);
        // dd($validated);
            return redirect('orangtua')->with('success', "Data berhasil ditambahkan");

    }

    public function detail($id)
    {
        $orangtua = Orangtua::find($id);

        return view('orangtua.show', compact('orangtua'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap'=>'required|max:100',
            'tempat_lahir'=>'required',
            'tgl_lahir'=>'required|date',
            'umur'=>'required',
            'alamat'=>'required',
            'gender'=>'required',
            'no_hp'=>'required|max:12',
            'email'=>'required|unique:admins',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orangtua = Orangtua::find($id);

        return view('orangtua.edit', compact('orangtua'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orangtua = Orangtua::find($id);

        return view('kader.edit', compact('orangtua'));
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
        $orangtua = Orangtua::where('id',$id);
        $orangtua->update([
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_lahir'=> $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'gender'=> $request->gender,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
        ]);
        return redirect('orangtua')->with('success', "Data berhasil diperbarui");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $orangtua =Orangtua::where('id',$id)->first();
        $orangtua->delete();
        return redirect('orangtua')->with('success', "Data berhasil dihapus");
    }
}
