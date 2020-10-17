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

    public function scannerBarcode(){
        return view('barcode/barcodescanner');
    }

}
