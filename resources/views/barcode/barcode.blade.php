@extends('tampilan/index')
@section('konten')

<!-- Prism -->
<link rel="stylesheet" href="{{ asset('/assets/html/vendors/prism/prism.css') }}" type="text/css">
<!-- Css -->
<link rel="stylesheet" href="{{ asset('/assets/html/vendors/dataTable/datatables.min.css') }}" type="text/css">

<div class="content ">
                
<div id="wrapper">
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Barcode <br>
                            <small>Berikut merupakan tabel barang dengan barcode</small>
                        </h1>
            <ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">Customer</a></li>
  <li class="active">Barcode</li>
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
                                    <tr>
                                        <th>ID Barang</th>
                                        <th>Nama Barang</th>
                                        <th class="text-center">Barcode</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($barang as $b)
                                    <tr>
                                        <td>{{$b->id_barang}}</td>
                                        <td>{{$b->nama}}</td>
                                        <td class="text-center p-t-b-40">
                                        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG($b->ID_BARANG, 'C128')}}" alt="barcode" />
                                            <br/>
                                            {{$b->id_barang}}
                                        </td>
                                        <td class="text-center">
                                        
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="barcodeprint">
                                        <button type="button" class="btn btn-primary btn-pulse">
                                            <i class="ti-printer mr-2"></i> Cetak Pdf
                                        </button>
                                        </a>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>

              


<!-- Prism -->
<script src="{{ asset('/assets/html/vendors/prism/prism.js') }}"></script>
<!-- Javascript -->
<script src="{{ asset('/assets/html/assets/js/examples/datatable.js') }}"></script>
@endsection