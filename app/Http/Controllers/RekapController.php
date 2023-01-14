<?php

namespace App\Http\Controllers;

use App\Models\Rekap;
use Illuminate\Http\Request;

class RekapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekap = Rekap::latest()->select([
            'id',
            'nama_lengkap',
            'tanggal',
            'hari',
            'berat_badan_sebelum',
            'berat_badan_sesudah',
            'tinggi_badan_sebelum',
            'berat_badan_sebelum',
        ])->get();
        // dd($rekap);
        return view('rekap.index',[
            'rekap_list' => $rekap
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rekap = new Rekap;
        return view('rekap.create', compact(
            'rekap'
        ));
    }

    public function createProcess(Request $request)
    {
        Rekap::create($request->all());

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

        return redirect('rekap')->with('success', "Data berhasil ditambahkan");
    }

    public function detail($id)
    {
        $rekap = Rekap::find($id);

        return view('rekap.show', compact('rekap'));
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
        $rekap = Rekap::find($id);

        return view('rekap.edit', compact('rekap'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rekap = Rekap::find($id);

        return view('rekap.edit', compact('rekap'));
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
        $rekap = Rekap::where('id',$id);
        $rekap->update([
            'nama_lengkap' => $request->nama_lengkap,
            'tanggal'=> $request->tanggal,
            'hari' => $request->hari,
            'tinggi_badan_sebelum' => $request->tinggi_badan_sebelum,
            'tinggi_badan_sesudah' => $request->tinggi_badan_sesudah,
            'berat_badan_sebelum'=> $request->berat_badan_sebelum,
            'berat_badan_sesudah' => $request->berat_badan_sesudah,
        ]);
        return redirect('rekap')->with('success', "Data berhasil diperbarui");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $rekap = Rekap::where('id',$id);
        $rekap->delete();
        return redirect('rekap')->with('success', "Data berhasil dihapus");
    }
}
