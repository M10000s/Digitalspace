<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Forget Reset - Attendance Management System</title>
  <link rel="stylesheet" href="../resources/Bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../resources/Jquery/jquery-ui.css">
  <link rel="stylesheet" href="../resources/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../resources/css/stylesheet.css">
  <script src="../resources/Jquery/jquery-3.5.1.js"></script>
  <script src="../resources/Bootstrap/js/bootstrap.min.js"></script>
  <script src="../resources/Jquery/jquery-ui.js"></script>
  <script src="../resources/js/sweetalert.min.js"></script>
</head>

<body style="background-image: url('../uploads/be.svg'); background-size: cover;">

  <div id="headerSection" class="sticky-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center pt-3">
          <img src="../uploads/logoo.svg" alt="Logo" style="width: 200px; height: 200px;">
        </div>
      </div>
    </div>
  </div>

  <div id="bodySection">
    <div class="container">
      <div class="row py-4">
        <div class="col-md-2"></div>
        <div class="col-md-8 text-center">
          <h3 id="groups" style="color: #002c66;"><i class="fa fa-lock"></i> Forget Password</h3><br>
          <div id="loginSection" class="text-center p-5" style="background-image: url('../uploads/blo.svg'); background-size: cover;">
            <form>
              <div class="form-row py-1">
                <div class="form-group col-md-12">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" style="background-color: #002c66; border-color: #002c66;"><i class="fa fa-user" style="color: #fff;"></i></span>
                    </div>
                    <input type="text" id="uid" class="form-control" placeholder="Enter User ID">
                  </div>
                </div>
              </div>
              <div class="form-row py-1">
                <div class="form-group col-md-12">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" style="background-color: #002c66; border-color: #002c66;"><i class="fa fa-calendar" style="color: #fff;"></i></span>
                    </div>
                    <input type="text" id="dob" class="form-control" placeholder="Enter Birth Date">
                  </div>
                </div>
              </div>
              <div class="form-row py-1">
                <div class="form-group col-md-12">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" style="background-color: #002c66; border-color: #002c66;"><i class="fa fa-key" style="color: #fff;"></i></span>
                    </div>
                    <input type="password" id="pass" class="form-control" placeholder="New password">
                  </div>
                </div>
              </div>
              <div class="form-row py-1">
                <div class="form-group col-md-12 px-4">
                  <input type="button" id="changePass" style="background-color:#002c66" class="form-control btn btn-success" value="Change">
                </div>
              </div>
              <div class="form-row py-1">
                <div class="form-group col-md-12 px-5">
                  <a href="../" class="form-control btn btn-primary"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </div>

  <script src="../resources/js/forgetpass.js"></script>

</body>

</html>
