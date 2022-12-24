<?php 
include 'config.php';
 
session_start();

 
if (isset($_SESSION['fname'])) {
    header("Location: admin/dashboardAdmin.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);
   
	$sqli = "SELECT * FROM user WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sqli);


	if ($result->num_rows > 0) {
	    $row = mysqli_fetch_assoc($result);
	    $_SESSION['fname'] = $row['fname'];
      $_SESSION['lname'] = $row['lname'];
	    header("Location: admin/dashboardAdmin.php");
      
	} else {
	    include 'components/error.php';
	}
  }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>

<!-- ======= Meta Requirement ======== -->
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
      />
<!-- ======= Meta Requirement ======== -->


<!-- ======= Icon & Title ======== -->
      <link rel="icon" href="img/icon.png">
      <title>Leadershub Jawa Tengah</title>
<!-- ======= Icon & Title ======== -->


<!-- ======= Bootstrap CSS ======== -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- ======= Bootstrap CSS ======== -->


<!-- ======= External Font ======== -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
<!-- ======= External Font ======== -->


<!-- ======= External CSS ======== -->
    <link rel="stylesheet" href="./assets/css/admin-core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="./assets/css/admin-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="./assets/css/admin-demo.css" />
    <link rel="stylesheet" href="./assets/css/page-auth.css" />
    <link rel="stylesheet" href="./assets/css/perfect-scrollbar.css" />
<!-- ======= External CSS ======== -->


<!-- ======= JS Helper ======== -->
    <script src="./assets/js/helper/helper.js"></script>
    <script src="./assets/js/helper/config.js"></script>
<!-- ======= JS Helper ======== -->

<!-- ======= Icons ======== -->
      <link rel="stylesheet" href="./assets/css/boxicons.css" />
<!-- ======= Icons ======== -->



  </head>

  <body>
  
    <!-- Content -->
    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="index.html" class="app-brand-link gap-2">
                  <img src="img/logo.png" style="margin-top:20px" width="250" alt="">
                </a>
              </div>
              <p class="mb-4" align="center">Please sign-in to your account</p>
              
              <form id="formAuthentication" class="mb-3" action="" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Enter your email"
                    autofocus
                  />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                
                <div class="mb-3">
                  <button name="submit" class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                </div>
              </form>

              <p class="text-center">
                <span>Don't have an account?</span>
                <a href="registrasi.php"
                            style="color: #393f81;">Register here</a>
              </p>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    

<!-- ======= Core JS ======== -->
    <script src="./assets/js/library/jquery.js"></script>
    <script src="./assets/js/library/popper.js"></script>
    <script src="./assets/js/helper/perfect-scrollbar.js"></script>
    <script src="./assets/js/core/menu.js"></script>
    <script src="./assets/js/core/main.js"></script>
<!-- ======= Core JS ======== -->

<!-- ======= Bootstrap JS ======== -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<!-- ======= Bootstrap JS ======== -->

    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
