<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />

    <!-- Page-Level CSS -->
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

</head>

<body>
    <!--  wrapper -->
    <div id="wrapper">
      <?php
        include("navbartop.php");
        // include("sidebarleft.php");
        ?>
        <div id="page-wrapper">

          <div class="addpage">
            <audio id="mysoundclip" preload="auto">
                <source src="sound.wav"></source>
            </audio>
          </div>
          <div class="pagedata">


            <div class="row">
              <div class="col-lg-4">
                <div class="form-group">
                </div>
              </div>
              <div class="col-lg-4" style="padding-top: 10%;">
                <div class="form-group" style="border: 1px solid;border-color: cornsilk;background-color: yellowgreen;">
                <center> <h1>Live Ticket</h1></center>
                 <marquee><center style="color: crimson;"> <h3>Ticket No: <span id="ticketid"></span></h3> </center></marquee>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
            </div>
          </div>
        </div>




          </div>


        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <footer class="footer" style="text-align:center;"> © 2018 All rights reserved. <a href="https://www.xxovek.com//"><img src="xxovek.png" alt="Smiley face" style="width: 79px;height: 29px;"></a></footer>
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
    $(document).ready(function () {
        display_livetoken();
    });
    function display_livetoken(){
    $.ajax({
      url:"display_livetoken",
      method:"POST",
      success:function(data){

        var response = JSON.parse(data);
        $("#ticketid").html(response['tokenid']);
      }
    });
      }
    </script>

</body>

</html>
