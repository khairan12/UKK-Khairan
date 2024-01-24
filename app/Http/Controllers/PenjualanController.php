<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{
    
    function Penjualan(){
        $produk = DB::table("produk")->get();
        $pelanggan = DB::table("pelanggan")->get();
        $penjualan = DB::table("penjualan")->latest()->first();
        $idpenjualan = "";
        
        if (!$penjualan){
            $idpenjualan = '1';
        }
        else{
            $idpenjualan = $penjualan->penjualanID;
        }

        $detailpenjualan=DB::table("detailpenjualan")->where ("penjualanID", $idpenjualan)
        ->join ("produk", "detailpenjualan.produkID", "=", 'produk.produkID')
        ->get();
    
        return view("penjualan", ['idpenjualan'=>$idpenjualan,'produk' => $produk, 'pelanggan' => $pelanggan]);
    }
      function store(Request $request){
        $penjualan = DB::table ("penjualan")->Insert([
            'penjualanID'=> $request->idpenjualan,
            'tanggalpenjualan' => date ("Y-m-d"),
            'TotalHarga' => 0,
            'pelangganid' => $request->idpelanggan
        ]);

        $produk = DB::table('produk')->where('ProdukID', $request->produk)->first();
        $Datapenjualan=DB::table('produk')->where('penjualanID', $request->idpenjualan)->first();
        if(!DataPenjualan){
        $penjualan = DB::table('produk')->insert([
            'penjualanID' => $request->idpenjualan,
            'tanggalpenjualan' => date("Y-m-d"),
            'Totalharga' => 0,
            'pelangganid' => $request->pelanggan,
            'status' => "pending"
        ]);
    }
        $detailpenjualan = DB::table("detailpenjualan")->Insert([
            'penjualanID' => $request->idpenjualan,
            "produkID" => $request->produk,
            'jumlahproduk' => $request->qty,
            'subtotal' => $request->qty = $produk->warga
        ]);
      }
}
