<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ModelProduk;
class Produk extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = ModelProduk::all();
        return view('produk.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ModelProduk();
        $data->produk_nama = $request->nama;
        $data->produk_desc = $request->deskripsi;
        $data->produk_harga = $request->harga;
        $data->save();
        return redirect()->route('produk')->with('alert-success','Berhasil Menambahkan Data!');
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
        $data = ModelProduk::where('produk_id',$id)->get();
        return view('produk.edit',compact('data'));
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
        $data = ModelProduk::where('produk_id',$id)->first();
        $data->produk_nama = $request->nama;
        $data->produk_desc = $request->deskripsi;
        $data->produk_harga = $request->harga;
        $data->save();
        return redirect()->route('produk')->with('alert-success','Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modelJenis = ModelProduk::destroy($id);
        if($modelJenis) {
           return redirect()->route('produk')->with('alert-success','Data berhasi dihapus!');
        }
    }
}
