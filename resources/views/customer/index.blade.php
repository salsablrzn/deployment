@extends('tampilan/index')
@section('konten')

<div id="wrapper">
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Data Customer <br>
                            <small>Berikut Tabel Data Customer</small>
                        </h1>
            <ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">Customer</a></li>
  <li class="active">Tabel</li>
</ol>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Customer
                        </div>
                        <div class="panel-body">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                  <thead>                  
                                       <tr>
                                        <th scope="row">ID</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>  
                                        <th>Provinsi</th>
                                        <th>Kota</th>
                                        <th>Kecamatan</th>
                                        <th>Kode Pos - Kelurahan</th>
                                        <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>

@endsection