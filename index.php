<?php
session_start();
if(!isset($_SESSION['admin_id'])){
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>

    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">

        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <font color="Yellow" size="6"><b>Xxovek</b></font>
                <font color="blue" size="6"><b>Token</b></font>
                  <font color="orange" size="6"><b>System</b></font>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Sign In</h3></center>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" id="email" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" id="password" name="password" type="password" value="">
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>

                                <a  class="btn btn-lg btn-success btn-block login" onclick="authentication();">Login</a>
                                <!-- <a href="staff_login" class="btn btn-link btn-success">Staff Login</a> -->
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
<script type="text/javascript">

  function authentication(){
    var email    = $("#email").val();
    var password = $("#password").val();
    if(email=="" || password==""){
      alert("Please Enter Username OR Password");
    }
    else {
      $.ajax({
        url:'check_admin_authentication',
        async: false,
        cache: false,
        type:'POST',
        data:{email:email,password:password},
        beforeSend:function(){
          $('.login').text("Logging..");
        },
        success:function(data){
        response = JSON.parse(data);
        if(response['success']){
          window.location = 'dashboard';
        }
        else {
          alert("Username And Password is Not valid");
        }
        },
        complete:function()
        {
          $('.login').text("Login");
        }
      });
    }
  }
</script>
</body>

</html>
<?php }else {
  header("location:dashboard");
} ?>
