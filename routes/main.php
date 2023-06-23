<?php
    session_start();
    if(!isset($_SESSION['uid'])){
        header('location:logout.php');
    }
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->

  <title>Dashboard </title>
  <link rel="stylesheet" href="../resources/Bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../resources/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../resources/css/stylesheet.css">
  <script src="../resources/Jquery/jquery-3.5.1.js"></script>
  <script src="../resources/Bootstrap/js/bootstrap.min.js"></script>
  <script src="../resources/js/sweetalert.min.js"></script>
</head>

<body>

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
      <div class="row align-items-center py-3">
        <div class="col-md-10 text-center">
          <h3>Welcome <?php echo $_SESSION['faculty']?>!</h3>
        </div>
        <div class="col-md-2 text-center">
        <a href="logout.php"><button class="btn btn-sm btn-primary" style="background-color: #002c66;">Logout <i class="fa fa-sign-out"></i></button></a>
        </div>
      </div>
      <hr>

      <div class="row py-1">
        <div class="col-md-12 text-center">
          <form>
            <div class="form-row">
              <div class="form-group text-center col-md-8">
                <h4><i class="fa fa-plus-circle"></i> Add new employé </h4>
              </div>
              <div class="form-group text-center col-md-4">
                <a href="record.php"><button type="button" class="btn btn-sm btn-success"><i class="fa fa-book"></i> Check record</button></a>
              </div>
            </div>
          </form>
          <form>
            <div class="form-row pt-3">
              <div class="form-group col-md-8">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                  </div>
                  <input class="form-control" type="text" placeholder="Employé name" id="name">
                </div>
              </div>
              <div class="form-group col-md-4">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-id-card"></i></span>
                  </div>
                  <input class="form-control" type="text" placeholder="Employé id" id="roll">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-industry"></i></span>
                  </div>
                  <select class="form-control" id="course">
  <option value=""><i class="fa fa-industry"></i> Secteur</option>
  <option value="UX"><i class="fa fa-desktop"></i> UX</option>
  <option value="Front End"><i class="fa fa-code"></i> Front End</option>
  <option value="Backend"><i class="fa fa-cogs"></i> Backend</option>
  <option value="Photoshop"><i class="fa fa-paint-brush"></i> Photoshop</option>
  <option value="Marketing"><i class="fa fa-bullhorn"></i> Marketing</option>
</select>



                </div>
              </div>
              <div class="form-group col-md-4">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-id-badge"></i></span>
                  </div>
                  <select class="form-control" id="semester">
                    <option value="Stagiaire">Stagiaire</option>
                  <option value="Employés">Employés</option>
                    <option value="Admin">Admin</option>
                  </select>
                </div>
              </div>
              <div class="form-group col-md-4">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-code"></i></span>
                  </div>
                  <select class="form-control" id="branch">
  <option value="">langage de programmation </option>
  <option value="Python"><i class="fa fa-code"></i> Python</option>
  <option value="JavaScript"><i class="fa fa-code"></i> JavaScript</option>
  <option value="TypeScript"><i class="fa fa-code"></i> TypeScript</option>
  <option value="PHP"><i class="fa fa-code"></i> PHP</option>
  <option value="HTML/CSS"><i class="fa fa-code"></i> HTML/CSS</option>
  <option value="SQL"><i class="fa fa-database"></i> SQL</option>
  <option value="MySQL"><i class="fa fa-database"></i> MySQL</option>
  <option value="Next.js"><i class="fa fa-code"></i> Next.js</option>
</select>

                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4 p-0 m-0"></div>
              <div class="form-group col-md-4">
                <button class="btn btn-success form-control" style="background-color:#ff9801" type="button" onclick="addStudent()"><i class="fa fa-plus"></i> Add employé</button>
              </div>
              <div class="form-group col-md-4 p-0 m-0"></div>
            </div>
          </form>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-12 text-center">
          <h4><i class="fa fa-calendar-check-o"></i> Date <?php echo date('d-m-Y') ?> </h4>
          <div class="py-3" id="studentList"></div>
        </div>
      </div>
    </div>
  </div>

  <script src="../resources/js/student.js"></script>

</body>

</html>
