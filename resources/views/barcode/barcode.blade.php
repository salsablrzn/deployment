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
  <li><a href="#">Barang</a></li>
  <li class="active">Barcode</li>
</ol>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
      <div id="content">
        
           <!-- form start -->
                <form class="form-horizontal" action="barcodeStore" methode="post" enctype="multipart/form-data">
  {{ @csrf_field() }}
  <div class="form-group row">
    <div class="col col-md-1"></div>
    <div class="col col-md-2"><strong><label for="text-input" class=" form-control-label">Nama Barang</label></strong></div>
    <div class="col col-md-6"><input type="text" id="nama" name="nama" placeholder="Masukkan Nama Barang" class="form-control"></div>
    <div class="col col-md-2"><input type="submit" value="add" class="btn btn-success"></div>
  </div>
  </form>
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
                                        <th>Action</th>
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
                                        <td><a href="/cetakBarcodeId/{{ $b->id_barang }}"><button class="btn btn-success">Cetak Barcode</button</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- <a href="barcodeeeprint">
                                <center>
                                        <button type="button" class="btn btn-primary btn-pulse">
                                            <i class="ti-printer mr-2"></i> Cetak PDF 1 Barcode
                                        </button>
                                        </center>
                                        </a>

                            <a href="barcodeprint">
                                <center>
                                        <button type="button" class="btn btn-primary btn-pulse">
                                            <i class="ti-printer mr-2"></i> Cetak PDF 40 Barcode
                                        </button>
                                        </center>
                                        </a> -->

                                        <center>
        <a href="barcodeeeprint"><button type="button" class="btn btn-primary">Cetak All 1 Barcode</button>                           
        <a href="barcodeprint"><button type="button" class="btn btn-primary">Cetak All 40 Barcode</button>
        
         </center>
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