@extends('tampilan/index')
@section('konten')


     <div class="content ">
                
<div id="wrapper">
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Input Titik Awal <br>
                            <small>Masukkan Data Input Titik Awal</small>
                        </h1>
            <ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">GeoLocation</a></li>
  <li class="active">Input Titik Awal</li>
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
                <form class="form-horizontal form-label-left" action="/locationStore" method="post" enctype="multipart/form-data">
                  
                   {{ @csrf_field() }}
                   <div class="col-md-12">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputNama">Nama Toko<span class="required"> * </span></label>
                    <input type="text" id="namaToko" name="nama_toko" placeholder="Masukkan Nama Toko" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputAlamat">Latitude<span class="required"> * </span></label>
                    <input type="text" id="latitude" name="latitude" placeholder="Masukkan Latitude" class="form-control" readonly="">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputAlamat">Longitude<span class="required"> * </span></label>
                    <input type="text" id="longitude" name="longitude" placeholder="Masukkan Longitude" class="form-control" readonly="">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputAlamat">Accuracy<span class="required"> * </span></label>
                    <input type="text" id="accuracy" name="accuracy" placeholder="Masukkan Accuracy" class="form-control" readonly="">
                  </div>

                   <div class="line"></div>
					<center>
				    <button type="button" class="btn btn-primary" onclick="getLocation()">Geolocation</button> 
				    <input type="submit" value="Submit" class="btn btn-primary"></center>
					</div>
                </div>
              </div>

              </div>
          </div>
      </form>
    

<script>
var lat = document.getElementById("latitude");
var long = document.getElementById("longitude");
var acc = document.getElementById("accuracy");

function getLocation() {
    if (navigator.geolocation) {
    navigator.geolocation.watchPosition(showPosition);
    } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
    
function showPosition(position) {
    lat.value=position.coords.latitude;
    long.value=position.coords.longitude;
    acc.value=position.coords.accuracy;
}
</script>
@endsection