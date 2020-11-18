<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Implementasi Deployment Sistem</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
     
</head>

<body>
        @include('tampilan/header')

        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
        
        @include('tampilan/sidebar')

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
                
    
         <!-- awal konten -->
          <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
            <div role="document" class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 id="exampleModalLabel" class="modal-title">Getaway Timeout</h4>
                  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                  <p>Apakah anda ingin melanjutkan session?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" data-dismiss="modal" onclick="timerIncrement()" class="btn btn-primary">Yes</button>
                  <button type="button" data-dismiss="modal"  onclick="stop()" class="btn btn-secondary">No</button>
                </div>
              </div>
            </div>
          </div>
                @yield('konten')

            <!-- akhir konten -->
      
      <!-- Footer -->

    @include('tampilan/footer')
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->


    <!-- JavaScript files-->
    <!-- Scripts -->
    <script type="text/javascript">
      var idleTime = 0;
      $(document).ready(function () {
          //Increment the idle time counter every minute.
          var idleInterval = setInterval(timerIncrement, 30000); // 30 Detik

          //Zero the idle timer on mouse movement.
          $(this).mousemove(function (e) {
              idleTime = 0;
          });
          $(this).keypress(function (e) {
              idleTime = 0;
          });
      });

      function timerIncrement() {
          idleTime = idleTime + 1;
          if (idleTime > 59) { // 30 Menit
            $('#myModal').modal('show');
            if (idleTime > 60) { // 20 Menit
              $('#myModal').modal('hide');
              window.alert("Getaway Timeout");
            }
          }
      }

      function reload(){
        window.location.reload();
      }

      function stop(){
        $('#myModal').modal('hide');
        window.alert("Getaway Timeout");
      }
    </script>  


    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
   
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
  
  
  <script src="assets/js/easypiechart.js"></script>
  <script src="assets/js/easypiechart-data.js"></script>
  
   <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
  
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script> 


    

</body>

</html>