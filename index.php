<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="resources/Bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="resources/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="resources/css/stylesheet.css">
  <script src="resources/Jquery/jquery-3.5.1.js"></script>
  <script src="resources/Bootstrap/js/bootstrap.min.js"></script>
  <script src="resources/js/sweetalert.min.js"></script>
  <style>
    body {
      overflow: hidden; /* Hide scrollbars */
    }

    #video-background {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      object-fit: cover;
    }
  </style>

<video id="video-background" autoplay loop muted>
    <source src="uploads/videod1.mp4" type="video/mp4">
    <!-- You can provide alternative video formats using the <source> tag -->
    <!-- Example: <source src="uploads/video.webm" type="video/webm"> -->
    Your browser does not support the video tag.
</video>

  <title>Digital Absence</title>
</head>

<body>

<div id="headerSection" class="sticky-top">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center pt-3">
        <img src="uploads/logoo.svg" alt="Logo" style="width: 200px; height: 200px;">
      </div>
    </div>
  </div>
</div>


      </div>
    </div>
  </div>

  <div id="bodySection">
  <div class="container">
    <div class="row pt-4 pb-2 align-items-center justify-content-center">
      <div class="col-md-6 text-center">
        <div id="loginSection" class="text-center" style="background-image: url('uploads/blo.svg'); background-size: cover;">
          <br>
          <h4><i class="fa fa-user-circle fa-3x" style="color:#ff9801"></i></h4>
          <form>

            <div class="form-row py-1 px-5">
              <div class="form-group col-md-12">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="background-color: #002c66; border-color: #002c66;"><i class="fa fa-user" style="color: #fff;"></i></span>
                  </div>
                  <input type="text" id="uid" class="form-control" placeholder="User ID">
                </div>
              </div>
            </div>
            <div class="form-row py-1 px-5">
              <div class="form-group col-md-12">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" style="background-color: #002c66; border-color: #002c66;"><i class="fa fa-lock" style="color: #fff;"></i></span>
                  </div>
                  <input id="pass" type="password" class="form-control" placeholder="Password">
                </div>
              </div>
            </div>

            <div class="form-row py-1 px-5">
              <div class="form-group col-md-12">
                <input type="button" style="background-color: #002c66;" onclick="loginFun()" class="form-control btn btn-success" value="Login">
                <div class="pt-2">Forgot password? <a href="routes/forget_pass.php">Click here</a></div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

  <script src="resources/js/login.js"></script>

</body>

</html>
