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
  
 <!-- page content -->
 <div class="right_col" role="main">
    <div class="">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_content">
              <table id="datatable-buttons" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>ID Customer</th>
                    <th>ID Kelurahan</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Foto</th>
                    <th>File Path</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach($customer as $c)
                  <tr>
                    <td>{{ $c->ID_CUSTOMER }}</td>
                    <td>{{ $c->ID_KELURAHAN }}</td>
                    <td>{{ $c->NAMA }}</td>
                    <td>{{ $c->ALAMAT }}</td>
                    <td>@if ( isset($c->FOTO) )
                      <img src="{{(base64_decode($c->FOTO))}}">@endif</td>
                    <td>@if ( isset($c->FILE_PATH) )
                      <img src="{{ asset($c->FILE_PATH) }}"> @endif</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- /page content -->
  </div>
</div>

@endsection