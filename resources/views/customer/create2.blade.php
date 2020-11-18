@extends('tampilan/index')
@section('konten')

<div id="wrapper">
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Form Customer Sebagai Blob<br>
                            <small>Berikut merupakan tabel customer sebagai blob</small>
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
                <form class="form-horizontal form-label-left" action="customerstore2" methode="POST">
                  
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

          <div class="form-group">
                     <label for="examplefoto">Foto<span class="required"> * </span></label>
                     <br>
                <div id="wrap">
                  <img src="" id="img" name="img" required="required">
                  <input id="foto" name="foto" type="hidden" value="" required="required">
                </div>
                <button type="button" onclick="btn_ambilFoto()" style="margin-top:10px;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Ambil Foto</button>
            
                  <button id="submit" value="SimpanData" style="margin-top:10px;"  type="submit" class="btn btn-success">Submit</button>
              </div>

      </form>
                    <!-- /.card-body -->
                <!-- <center>
                <div class="card-footer">
                  <button type="submit" class="btn btn-danger">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  
                </div>
                </center> -->

                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="width:800px; margin-left:50px;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle" style="margin-top:5px; margin-left:10px;">Ambil Foto</h3>
            <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div id="kamera"></div>
            <div id="results" style="float:right; margin-top:-240px; margin-right:50px;"></div>
            <button id="btn_kamera" type="button" onclick="take_snapshot()" class="btn btn-primary"><i class="fa fa-camera fa-lg"></i></button>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" id="save" class="btn btn-primary simpan-foto" data-dismiss="modal">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <style>
  #kamera{
    width: 320px;
    height: 240px;
    border: 1px solid #ccc;
    margin-left: 50px;
  }

  #wrap{
    width: 320px;
    height: 240px;
    border: 1px solid #ccc;
  }

  #btn_kamera{
    margin-top: 10px;
    margin-left: 105px;
  }
</style>

<!--<script src="{{ asset('template/gentela/src/js/webcam.js') }}"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js" integrity="sha512-dQIiHSl2hr3NWKKLycPndtpbh5iaHLo6MwrXm7F0FM5e+kL2U16oE9uIwPHUl6fQBeCthiEuV/rzP3MiAB8Vfw==" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>-->
<script type="text/javascript">
                                jQuery(document).ready(function ()
                                {
                                        jQuery('select[name="provinsi"]').on('change',function(){
                                           var countryID = jQuery(this).val();
                                           if(countryID)
                                           {
                                              jQuery.ajax({
                                                 url : '../customer/create2/getstates2/' +countryID,
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
                                                 url : '../customer/create2/kecamatan2/' +id_kota,
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
                                                 url : '../customer/create2/kelurahan2/' +id_kec,
                                                 type : "GET",
                                                 dataType : "json",
                                                 success:function(data)
                                                 {
                                                    console.log(data);
                                                    jQuery('select[name="kelurahan"]').empty();
                                                    jQuery.each(data, function(key,value){
                                                       $('select[name="kelurahan"]').append('<option value="'+ value.ID_KELURAHAN +'">'+ value.KODEPOS +' - ' + value.NAMA_KELURAHAN +'</option>');

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

<script>
  Webcam.set({
    width: 320,
    height: 240,
    image_format: 'jpeg',
    jpeg_quality: 90
  })

  function btn_ambilFoto(){
    Webcam.attach("#kamera")
  } 
    
  function take_snapshot(){
    Webcam.snap(function (data_uri){
      document.getElementById('results').innerHTML =
      '<img id="hasil" src="'+data_uri+'"/>';
    });

    var hasil = $('#hasil').attr('src');
    $('#save').click(function(){
      $('#img').attr('src', hasil);
      $('#foto').val(hasil);
    });
  }
</script>



        
@endsection