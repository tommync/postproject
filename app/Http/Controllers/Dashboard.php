<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use App\model\ModelLaporan;
use App\model\ModelToko;
use DB;
class Dashboard extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index3()
    {   

        $toko = ModelToko::all();
        $hasil=[];
        $a = 0;
        foreach($toko as $t){
            $isi =  DB::table('laporan')
                    ->Join('produk', 'laporan.produk_id', '=', 'produk.produk_id')
                    ->select('produk.produk_nama as 0','laporan.target as 1','laporan.hasil as 2')
                    ->where('laporan.toko_id',$t->toko_id)
                    ->get()->toArray();
            $array = json_decode(json_encode($isi), True);
            //$isi2 = ModelLaporan::select('produk_id as 0','target as 1','hasil as 2')->where('toko_id',$t->toko_id)->get()->toArray();
            
            $finances  = \Lava::DataTable();

            $finances->addStringColumn('Barang')
                     ->addNumberColumn('Target')
                     ->addNumberColumn('Hasil')
                     //->setDateTimeFormat('Y')
                     ->addRows($array);

            $data = \Lava::ColumnChart('Finances'.$a.'-', $finances, [
                'title' => 'Grafik Penjualan',
                'isStacked' => TRUE,
                'titleTextStyle' => [
                    'color'    => '#eb6b2c',
                    'fontSize' => 14,
                    'width' => 400
                ]
            ]);
            $hasil[]=$data;   
            $a++;         
        }

        return view('dashboard',compact('hasil'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   


            // $isi =  DB::table('laporan')
            //         ->Join('produk', 'laporan.produk_id', '=', 'produk.produk_id')
            //         ->Join('toko', 'laporan.toko_id', '=', 'toko.toko_id')
            //         ->select('toko.toko_nama as 0','laporan.target as 1','laporan.hasil as 2')
            //         ->get()->toArray();
            // $array = json_decode(json_encode($isi), True);
            //$isi2 = ModelLaporan::select('produk_id as 0','target as 1','hasil as 2')->where('toko_id',$t->toko_id)->get()->toArray();
            $to = DB::table('toko')->get()->toArray();
            $tk = [];
            $list=[];
            $join=[];
            foreach ($to as $t) {
                //$tk[0]= $t->toko_nama;
                $list[] = DB::table('laporan')
                                    ->Join('produk', 'laporan.produk_id', '=', 'produk.produk_id')
                                    ->select('laporan.hasil')
                                    ->where('laporan.toko_id',$t->toko_id)
                                    ->get()->toArray();
                //$join[] = array_merge($tk,$List);
                
            }
            
            $dataList = json_decode(json_encode($list), True);
            //print_r($join);
            //print_r($dataList);
            $toko = DB::table('toko')->select('toko_nama as 0')
                                     ->get()->toArray();
            $dataToko = json_decode(json_encode($toko), True);

            $join = array_merge($dataToko[0],$dataList[0]);

            $size  = count($dataToko);

            for($a=0;$a<$size;$a++){
                $i=1;
                foreach ($dataList[$a] as $data) {
                    
                    $dataToko[$a][$i] = $data['hasil'];
                                       
                    $i++;
                    
                }
                
            }


            //print_r($dataToko);
            
            $finances  = \Lava::DataTable();

            $finances->addStringColumn();

            $barang = DB::table('produk')->select('produk_nama')->get()->toArray();
            foreach($barang as $b){
            $finances->addNumberColumn($b->produk_nama);
            
            }
                     
            $finances->addRows($dataToko);

            $data = \Lava::ColumnChart('Finances', $finances, [
                'title' => 'Grafik Penjualan',
                'isStacked' => TRUE,
                'height' => 500,
                'titleTextStyle' => [
                    'color'    => '#eb6b2c',
                    'fontSize' => 14,
                    'width' => 400
                ]
            ]);

         return view('dashboard',compact('data'));
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
}
