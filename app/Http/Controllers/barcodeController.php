<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Barcode;
use PDF;

// use DB;

class BarcodeController extends Controller
{
    public function barcode() {
        $barang = Barcode::get(); 
        // $pdf = App::make('dompdf.wrapper');
        // $pdf->loadHTML('<h1>Test</h1>');
        // return $pdf->stream();
        return view('barcode/barcode')->with(compact('barang'));

    }   
    
    // public function printBarcode(){ 
    //     $barang = Barcode::limit(12)->get(); 
    //     // $pdf =  PDF::loadView ('/barcode/barcodepdf',['barang'=>$barang]); 
    //     // $pdf->setPaper('a4', 'potrait');         
    //     $no = 1; 
    //     $paper_width = 448.82; // 38 mm
    //     $paper_height = 212.6; // 18 mm
    //     $paper_size = array(0, 0, $paper_width, $paper_height);
    //     $pdf =  PDF::loadView  ('/barcode/barcodepdf',  compact('barang', 'no')); 
    //     $pdf->setPaper($paper_size); 
    //     return $pdf->stream('barcode/barcodepdf');
    // }

    // public function printBarcode(){ 
    //     $barang = Barcode::limit(12)->get(); 
    //     $pdf =  PDF::loadView ('/barcode/barcodepdf',['barang'=>$barang]); 
    //     $pdf->setPaper('a4', 'potrait'); 
    //     return $pdf->stream('/barcode/barcodepdf'); 
    // }


    public  function printBarcode(){ 
        $barang = Barcode::limit(40)->get(); 
        $no = 1; 
        $paper_width = 793.7007874; // 38 mm
        $paper_height = 623.62204724; // 18 mm
        $paper_size = array(0, 0, $paper_width, $paper_height);
        $pdf =  PDF::loadView  ('/barcode/barcodepdf',  compact('barang', 'no'));
        $pdf->setPaper("f4"); 
        return $pdf->stream(); 
    }

    public  function printBarcodeee(){ 
        $barang = Barcode::limit(40)->get(); 
        $no = 1; 
        $paper_width = 793.7007874; // 38 mm
        $paper_height = 623.62204724; // 18 mm
        $paper_size = array(0, 0, $paper_width, $paper_height);
        $pdf =  PDF::loadView  ('/barcode/pdf',  compact('barang', 'no'));
        $pdf->setPaper("f4"); 
        return $pdf->stream(); 
    }

    public  function printBarcodeId($id){ 
        $barang = DB::table('barang')->where('id_barang',$id)->get();
        $no = 1; 
        $brid=$id; 
        $paper_width = 793.7007874; // 38 mm
        $paper_height = 623.62204724; // 18 mm
        $paper_size = array(0, 0, $paper_width, $paper_height);
        $pdf =  PDF::loadView  ('/barcode/barcodeId',  compact('barang', 'no')); 
        $pdf->setPaper('letter'); 
        return $pdf->stream(); 
    }

    public function scannerBarcode(){
        return view('barcode/barcodescanner');
    }

    public function store(Request $request){
        $date= date('mdy');
        $d = $date.'%';
        $id = (DB::table('barang')->where('ID_BARANG','like',$d)->count('ID_BARANG'))+1;
        $id_barang = $date.str_pad($id++,2,"0",STR_PAD_LEFT);
        DB::table('barang')->insert([
            'id_barang' => $id_barang,
            'nama' => $request->nama
        ]);
        return redirect('/barcode');
    }

    public function index(){
        $barang = Barcode::all();
        return view('barcode/barang',['barang'=>$barang]);
    }


//----------------- API -----------------//


    public function barang() {
       // $barang = Barcode::get(); 
        // $pdf = App::make('dompdf.wrapper');
        // $pdf->loadHTML('<h1>Test</h1>');
        // return $pdf->stream();

        $barang = DB::table('barang')->get();
        return response()->json([
            "message" => "Data barang berhasil di tampilkan"
        ], 200);
      
        return view('barcode/barcode')->with(compact('barang'));

    }   
    

    // public function printBarcode(){ 
    //     $barang = Barcode::limit(12)->get(); 
    //     $pdf =  PDF::loadView ('barcode/barcode_pdf',['barang'=>$barang]); 
    //     $pdf->setPaper('a4', 'potrait'); 
    //     return $pdf->stream('barcode_pdf'); 
    public function insert(Request $request) {
        DB::table('barang')->insert([
            'nama' => $request->nama
        ]);

        return response()->json([
            "message" => "Data barang berhasil di tambahkan"
        ], 201);
        //return redirect('/Barang/Barcode');
    }

    public function edit(Request $request, $id){
        DB::table('barang')->where("ID_BARANG", $request->id)->update([
            'Nama' => $request ->nama
        ]);
    }

}
