<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use Illuminate\Http\Request;

class AnakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anak = Anak::latest()->select([
            'id',
            'nama_lengkap',
            'umur',
            'gender',
            'alamat',
        ])->get();
        // dd($admin);
        return view('anak.index',[
            'anak_list' => $anak
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $anak = new Anak;
        return view('anak.create', compact(
            'anak'
        ));
    }
    public function createProcess(Request $request)
    {
        Anak::create($request->all());
        // $validated = $request->validate([
        //     'nama_lengkap'=>'required|max:100',
        //     'tempat_lahir'=>'required',
        //     'tgl_lahir'=>'required|date',
        //     'umur'=>'required',
        //     'tinggi_badan'=>'required|numeric',
        //     'berat_badan'=>'required|numeric',
        //     'alamat'=>'required',
        //     'gender'=>'required',
        // ]);
        // // $validated['users_id']=>u;
        // // Admin::create($validated);

            return redirect('anak')->with('success', "Data berhasil ditambahkan");
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
        $anak = Anak::find($id);

        return view('anak.edit', compact('anak'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anak = Anak::find($id);

        return view('anak.edit', compact('anak'));
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
        $anak = Anak::where('id',$id);
        $anak->update([
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_lahir'=> $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'umur' => $request->umur,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
            'alamat' => $request->alamat,
            'gender'=> $request->gender,
        ]);
        return redirect('anak')->with('success', "Data berhasil diperbarui");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // public function destroy($id)
    // {
    //     $anak = Anak::where('id',$id);
    //     $anak->delete();
    //     return redirect('orangtua')->with('success', "Data berhasil dihapus");
    // }

    public function delete($id)
    {
        $anak = Anak::where('id',$id);
        $anak->delete();
        return redirect('anak')->with('success', "Data berhasil dihapus");
    }
}
