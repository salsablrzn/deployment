<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\barang;

class barangController extends Controller
{
    //

    public function getBarang(){
        $barang = barang::all();
        return response()->json([
            "message" => "tampil data barang"
        ], 201);
    }

    public function createBarang(Request $request){
        $barang = new barang;
        $barang->id_barang= $request->id_barang;
        $barang->nama = $request->nama;
        $barang->save();

        return response()->json([
            "message" => "barang record created"
        ], 201);
    }

    public function updateBarang(Request $request, $id){
        barang::where('id_barang', $request->id)->update([
            'nama'=>$request->nama
        ]);

        return response()->json([
            "message" => "barang record updated"
        ], 201);
    }
}