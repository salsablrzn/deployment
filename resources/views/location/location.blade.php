@extends('tampilan/index')
@section('konten')

<div class="content ">
                
<div id="wrapper">
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Data Toko <br>
                            <small>Berikut merupakan tabel data toko</small>
                        </h1>
            <ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">GeoLocation</a></li>
  <li class="active">Data Toko</li>
</ol>
                    </div>
                </div>
            </div>


    <div class="row">
<div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <!-- <div class="panel-heading">
                             Data Customer
                        </div> -->
                        <div class="panel-body">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                  <thead>
								  <th class="text-center">Barcode</th>
								  <th class="text-center">Nama toko</th>                                   
								  <th class="text-center">Latitude</th>                        
								  <th class="text-center">Longtitude</th>
								  <th class="text-center">Accuracy</th>
                                  <th class="text-center">Action</th>
							  </thead>
                                <tbody>
                                	@foreach ($lokasi_toko as $lok)
									  <tr align="center">
										  <td> <img src="data:image/png;base64,{{DNS1D::getBarcodePNG(
							                    $lok->barcode, 'C128')}}" height="60" width="180">
							                    <br>{{$lok->barcode }}</td>
										  <td>{{$lok->nama_toko }}</td>
										  <td>{{$lok->latitude }}</td>
										  <td>{{$lok->longitude }}</td>
										  <td>{{$lok->accuracy }}</td>
                                           <td><a href="/cetakBarcodeLokasiId/{{ $lok->barcode }}"><button class="btn btn-success">Cetak Barcode</button</a></td>
									  </tr> 
									  @endforeach
								</tbody>
                            </table>

                            <center>
        <a href="cetakbarcodelokasiii"><button type="button" class="btn btn-primary">Cetak All 1 Barcode</button>                           
        <a href="cetakbarcodelokasi"><button type="button" class="btn btn-primary">Cetak All 40 Barcode</button>
        
         </center>

                            </div>
                            
                        </div>
                        </div>
                        
         
     
@endsection