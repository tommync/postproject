<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ModelToko;
use App\Model\ModelLaporan;
use App\Model\ModelProduk;
use DB;

class Laporan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $id = $_GET['d'];
        $data = DB::table('laporan')
                ->leftJoin('produk', 'laporan.produk_id', '=', 'produk.produk_id')
                ->where('laporan.toko_id',$id)
                ->get();
        return view('laporan.index',compact('data','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $id = $_GET['id'];
        $data = ModelProduk::all();   
        return view('laporan.create',compact('data','id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ModelLaporan();
        $data->toko_id = $request->toko_id;
        $data->produk_id = $request->produk_id;
        $data->target = $request->target;
        $data->hasil = $request->hasil;
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modelJenis = ModelLaporan::destroy($id);
        if($modelJenis) {
           return redirect()->route('toko')->with('alert-success','Data berhasi dihapus!');
        }
    }
}