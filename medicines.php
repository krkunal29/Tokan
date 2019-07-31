<?php
session_start();
if(isset($_SESSION['admin_id'])){
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Details</title>
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
        include("sidebarleft.php");
        ?>
        <div id="page-wrapper">

          <div class="addpage">
            <audio id="mysoundclip" preload="auto">
                <source src="sound.wav"></source>
            </audio>
          </div>
          <div class="pagedata">


            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Ticket Generation</h1>
                </div>
                 <!-- end  page header -->
            </div>



            <div class="row" id="data">
                <div class="col-lg-6">
                  <button type="button" class="btn btn-success" onclick="newticketgeneration()"> New Ticket Generation </button>
                  <button type="button" class="btn btn-primary" onclick="continuegeneration()"> Continue</button>
                </div>

                <div class="col-lg-6">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Waiting List

                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>sr.no</th>
                                            <th>Ticket Code</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody id="loadtabledata">

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!--End Advanced Tables -->
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
            display_products();
        });
  function newticketgeneration(){
     var audio = $("#mysoundclip")[0];
     audio.play();
     $.ajax({
         type: "POST",
         url: "ticketgenerator",
         data: ({
         }),
         success: function(msg) {
            // alert("Ticket Generated "+msg+ " Successfully.");
            display_products();
         },
         error: function(data, errorThrown) {
             alert('request failed :' + errorThrown);
         }
     });
  }
  function continuegeneration(){
    var audio = $("#mysoundclip")[0];
    audio.play();
    $.ajax({
        type: "POST",
        url: "updateticketgenerator",
        data: ({
        }),
        success: function(msg) {

            // alert("Ticket Generated "+msg+ " Successfully.");
           display_products();
        },
        error: function(data, errorThrown) {
            alert('request failed :' + errorThrown);
        }
    });
  }
  function display_products(){
    $('#loadtabledata').empty();
      $.ajax({
        url:"display_tickets",
        method:"POST",
        success:function(data){

          var response = JSON.parse(data);
          var count = Object.keys(response).length;
          $('#loadtabledata').append('<tr class="even gradeC"><td class="text-center" >' + ( 1) + '</td><td class="text-center">  Ticket No' + response[0]['tokenid'] + '</td><td class="text-center"><font color="green">Next Ticket</font></td></tr>');
          for (var i = 1; i < count; i++) {
          $('#loadtabledata').append('<tr class="even gradeC"><td class="text-center" >' + (i + 1) + '</td><td class="text-center">  Ticket No' + response[i]['tokenid'] + '</td><td class="text-center"><font color="red"> On Going Process</font></td></tr>');
          }
          $('#dataTables-example').dataTable();
        }
      });
  }
    </script>

</body>

</html>

<?php }else {
  header("location:index.php");
} ?>
