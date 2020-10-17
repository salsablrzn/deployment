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
  <li><a href="#">Customer</a></li>
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
                <form class="form-horizontal form-label-left" action="CategoriesStore" method="post">
                  
                   {{ @csrf_field() }}
                   <div class="col-md-12">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputID">ID<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputID" type="text" placeholder="Auto ID" name="id" readonly>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputNama">Nama<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputNama"type="text" placeholder="Enter Nama" name="nama" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputAlamat">Alamat<span class="required"> * </span></label>
                    <input class="form-control" id="exampleInputAlamat"type="text" placeholder="Enter Alamat" name="alamat" required>
                  </div>

                  <div class="form-group">
                     <label for="exampleInputProvinsi">Provinsi<span class="required"> * </span></label>
                     <br>
                                    <select name="provinsi" class="form-control">
                                        <option value="">Please Select Provinsi</option>
                                        @foreach ($provinsi as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                  </div>

                  <div class="form-group">
                     <label for="exampleInputKabupaten/Kota">Kabupaten/Kota<span class="required"> * </span></label>
                     <br>
                                    <select name="kota" class="form-control">
                                        <option value="0">Please Select Kota</option>
                                    </select>
                  </div>

                  <div class="form-group">
                     <label for="exampleInputKecamatan">Kecamatan<span class="required"> * </span></label>
                     <br>
                                    <select name="kecamatan" class="form-control">
                                        <option value="0">Please Select Kecamatan</option>
                                    </select>
                  </div>

                  <div class="form-group">
                     <label for="exampleInputKodePos-Kelurahan">Kode Pos - Kelurahan<span class="required"> * </span></label>
                     <br>
                                    <select name="kelurahan" class="form-control">
                                        <option value="0">Please Select Kode Pos - Kelurahan</option>
                                    </select>
                  </div>
                </div>
              </div>

              </div>
          </div>
      </form>
                    <!-- /.card-body -->
                <!-- <center>
                <div class="card-footer">
                  <button type="submit" class="btn btn-danger">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  
                </div>
                </center> -->

                <script type="text/javascript">
                                jQuery(document).ready(function ()
                                {
                                        jQuery('select[name="provinsi"]').on('change',function(){
                                           var countryID = jQuery(this).val();
                                           if(countryID)
                                           {
                                              jQuery.ajax({
                                                 url : '../customer/create/getstates/' +countryID,
                                                 type : "GET",
                                                 dataType : "json",
                                                 success:function(data)
                                                 {
                                                    console.log(data);
                                                    jQuery('select[name="kota"]').empty();
                                                    jQuery.each(data, function(key,value){
                                                       $('select[name="kota"]').append('<option value="'+ key +'">'+ value +'</option>');
                                                    });
                                                 }
                                              });
                                           }
                                           else
                                           {
                                              $('select[name="kota"]').empty();
                                           }
                                        });
                                });
                                jQuery(document).ready(function ()
                                {
                                        jQuery('select[name="kota"]').on('change',function(){
                                           var id_kota = jQuery(this).val();
                                           if(id_kota)
                                           {
                                              jQuery.ajax({
                                                 url : '../customer/create/kecamatan/' +id_kota,
                                                 type : "GET",
                                                 dataType : "json",
                                                 success:function(data)
                                                 {
                                                    console.log(data);
                                                    jQuery('select[name="kecamatan"]').empty();
                                                    jQuery.each(data, function(key,value){
                                                       $('select[name="kecamatan"]').append('<option value="'+ key +'">'+ value +'</option>');
                                                    });
                                                 }
                                              });
                                           }
                                           else
                                           {
                                              $('select[name="kecamatan"]').empty();
                                           }
                                        });
                                });
                                jQuery(document).ready(function ()
                                {
                                        jQuery('select[name="kecamatan"]').on('change',function(){
                                           var id_kec = jQuery(this).val();
                                           if(id_kec)
                                           {
                                              jQuery.ajax({
                                                 url : '../customer/create/kelurahan/' +id_kec,
                                                 type : "GET",
                                                 dataType : "json",
                                                 success:function(data)
                                                 {
                                                    console.log(data);
                                                    jQuery('select[name="kelurahan"]').empty();
                                                    jQuery.each(data, function(key,value){
                                                       $('select[name="kelurahan"]').append('<option value="'+ key +'">'+ value +' - ' + key +'</option>');
                                                    });
                                                 }
                                              });
                                           }
                                           else
                                           {
                                              $('select[name="kelurahan"]').empty();
                                           }
                                        });
                                });

                            </script>
                            <center>
                            <div class="form-actions form-group">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <canvas id="myCanvas2" width="320" height="240" style="border:1px solid #000000;">
                                            <input type="hidden" id="foto" name="foto">
                                    </div>
                                    <div class="col-sm-12" text-right>
                                            <button type="button" class="btn btn-danger btn-primary" data-toggle="modal" data-target="#largeModal">Ambil Gambar</button>
                                            <button type="submit" class="btn btn-default btn-primary">Submit</button>
                                    </div>
                            </center>
                        </form>
                    

        <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="largeModalLabel">Ambil Foto</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <center>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <video autoplay="" id="video-webcam"  class="border w-100" width="320" height="240">
                                    Browsermu tidak mendukung bro, upgrade donk!</video>
                                </div>
                                <center>
                                <div class="col-sm-6" text-right>
                                    <canvas id="myCanvas" width="320" height="240" style="border:1px solid #000000;"></canvas>
                                    <button type="button" class="btn btn-primary" onclick="takeSnapshot()">Ambil Foto</button>
                                </div>
                              </center>
                            </div>
                                
                        </div>
                        </center>


                        <script type="text/javascript">
                            // seleksi elemen video
                            var video = document.querySelector("#video-webcam");

                            // minta izin user
                            navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;

                            // jika user memberikan izin
                            if (navigator.getUserMedia) {
                                // jalankan fungsi handleVideo, dan videoError jika izin ditolak
                                navigator.getUserMedia({ video: true }, handleVideo, videoError);
                            }

                            // fungsi ini akan dieksekusi jika  izin telah diberikan
                            function handleVideo(stream) {
                                video.srcObject = stream;
                            }

                            // fungsi ini akan dieksekusi kalau user menolak izin
                            function videoError(e) {
                                // do something
                                alert("Izinkan menggunakan webcam untuk demo!")
                            }

                            function takeSnapshot() {
                                

                                // ambil ukuran video
                                var width = video.offsetWidth
                                        , height = video.offsetHeight;

                                // buat elemen canvas
                                canvas = document.getElementById("myCanvas");
                                canvas.width = width;
                                canvas.height = height;

                                // ambil gambar dari video dan masukan 
                                // ke dalam canvas
                                context = canvas.getContext('2d');
                                context.drawImage(video, 0, 0, width, height);
                            }

                            function saveSnapshot() {
                                var img = document.createElement('img');

                                // ambil ukuran video
                                var width = video.offsetWidth
                                        , height = video.offsetHeight;

                                // buat elemen canvas
                                canvas1 = document.getElementById("myCanvas2");
                                canvas1.width = width;
                                canvas1.height = height;
                                foto = document.getElementById("myCanvas");

                                context = canvas1.getContext('2d');
                                context.drawImage(foto, 0, 0, width, height);

                                img.src = canvas1.toDataURL('image/png');
                                document.getElementById("foto").value=img;
                            }
                        </script>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary"  data-dismiss="modal" onclick="saveSnapshot()">Simpan Foto</button>
                        </div>
                    </div>
                </div>
            </div>
@endsection