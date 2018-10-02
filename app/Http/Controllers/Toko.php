<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ModelToko;


class Toko extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelToko::all();
        return view('toko.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('toko.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ModelToko();
        $data->toko_nama = $request->nama;
        $data->toko_alamat = $request->alamat;
        $data->toko_telp = $request->telp;
        $data->save();
        return redirect()->route('toko')->with('alert-success','Berhasil Menambahkan Data!');
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
        $data = ModelToko::where('toko_id',$id)->get();
        return view('toko.edit',compact('data'));
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
        $data = ModelToko::where('toko_id',$id)->first();
        $data->toko_nama = $request->nama;
        $data->toko_alamat = $request->alamat;
        $data->toko_telp = $request->telp;
        $data->save();
        return redirect()->route('toko')->with('alert-success','Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modelJenis = ModelToko::destroy($id);
        if($modelJenis) {
           return redirect()->route('toko')->with('alert-success','Data berhasi dihapus!');
        }
    }
}