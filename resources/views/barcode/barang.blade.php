@extends('tampilan/index')
@section('konten')

<div id="wrapper">
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Form Customer <br>
                            <small>Masukkan Data Dengan Benar</small>
                        </h1>
            <ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">Barang</a></li>
  <li class="active">Form</li>
</ol>
                    </div>
                </div>
            </div>

            <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

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

<div class="card" >
</br>
<center><h2 class="h5 no-margin-bottom">Data Barang</h2></center>
</br>
<div class="table-responsive">     
         <div class="form-group">  
             <table class="table table-striped">
               <thead>
                 <tr align="center">
                   <th>Barang Id</th>
                   <th>Nama</th>  
                   <th>Barcode</th>
                   <!--<th>Action</th>-->
                 </tr>
               </thead>
               <tbody>
               @foreach ($barang as $br)
                    <tr align="center">
                       <td>{{ $br->id_barang }} </td>
                       <td>{{ $br->nama }} </td>
                       <td> <img src="data:image/png;base64,{{DNS1D::getBarcodePNG(
                        $br->id_barang, 'C128')}}" height="60" width="180"></td>
                       <!-- <td><a href="/cetakBarcodeId/{id}"><button class="btn btn-success">cetak</button</a></td> -->
                    </tr>
                 @endforeach   
            </tbody>
         </table>
         <center>
         <a href="/cetakBarcode"><button type="button" class="btn btn-primary">Cetak Barcode</button></a> 
         </center>
        </div>
    </div>
</div>
</div>
                
@endsection