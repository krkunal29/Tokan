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


            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Add Employee Information</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="jumbotron">
                      <div class="tab-pane fade in active" >

                      <div class="row">
                        <div class="col-sm-4">
                          <div class="form-group">
                          <label>First Name</label>
                          <input type="text" class="form-control"  id="fname"/>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control"  id="lname"/>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Birth Date</label>
                            <input type="date" class="form-control"  id="bdate"/>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>USER ID</label>
                            <input type="email" class="form-control"  id="email"/>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="form-control"  id="password"/>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Mobile No</label>
                            <input type="mobile" class="form-control"  id="mobileno"/>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-8">
                          <div class="form-group">
                          <label>Address</label>
                          <input type="text" class="form-control"  id="address"/>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="form-group">
                           <button class="btn btn-success" onclick="savebasicinformation();" style="width:100%;">SAVE</button>
                        </div>
                        </div>

                      </div>


                      </div>
                </div>
            </div>



        </div>
  </div>
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
            $('#dataTables-example').dataTable();

        });

        function savebasicinformation(){
        var fname=$("#fname").val();
        var lname=$("#lname").val();
        var bdate=$("#bdate").val();
        var address=$("#address").val();
        var education=$("#education").val();
        var email=$("#email").val();
        var sex = $("input[name='gender']:checked").val();
        var mobileno=$("#mobileno").val();
        // var typeofbusiness = $("input[name='businesstype']:checked").val();
        var daytime=$("#daytime").val();
        var nighttime=$("#nighttime").val();
        // var remarkbydoctor=$("#remarkbydoctor").val();

        if(fname===""||lname===""||bdate===""||address===""||education===""||email===""||sex===""
        ||mobileno==="" ||daytime===""||nighttime===""){
            $("#errormsg").html('<div class="alert alert-danger">Please Fill all Fields</div>');
        }
        else{
           $("#errormsg").html("");

           $.ajax({
               type: "POST",
               url: "insertbasicinformation",
               data: ({
                   fname: fname,
                   lname: lname,
                   bdate: bdate,
                   address: address,
                   education: education,
                   email: email,
                   sex:sex,
                   mobileno:mobileno,
                   daytime:daytime,
                   nighttime:nighttime
             }),
               success: function(msg) {
                  alert(msg);

               },
               error: function(data, errorThrown) {
                   alert('request failed :' + errorThrown);
               }
           });
        }
        }

    </script>

</body>

</html>

<?php }else {
  header("location:staff_login.php");
} ?>
