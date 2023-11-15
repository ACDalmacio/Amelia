<?php require('session.php');?>
<?php if(logged_in()){ ?>
          <script type="text/javascript">
            window.location = "index.php";
          </script>
    <?php
    } ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <title>Amelia's Kitchen Cafe Sales and Inventory Tracking System</title>
  <link rel="icon" href="logo_amelia.png">


  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <style>
        .gradient-custom-2 {
            /* fallback for old browsers */
            background: #fccb90;
            
            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
            
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
        }

        @media (min-width: 768px) {
            .gradient-form {
                height: 100vh !important;
            }
        }

        @media (min-width: 769px) {
            .gradient-custom-2 {
                border-top-right-radius: .3rem;
                border-bottom-right-radius: .3rem;
            }
        }
    </style>
</head>

<body >


<section class="h-100 gradient-form" style="background-color: #ffeaa7;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black" style="background-color:#BBA732;">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="logo_amelia.png"
                                            style="width: 185px;" alt="logo">
                                            <h2 class="mt-1 mb-3 pb-1 text-white font-weight-bold" style="font-family: 'Roboto', sans-serif;">WELCOME BACK</h2>
                                              <h6 class="mt-1 mb-3 pb-1 text-white" style="font-family: 'Roboto', sans-serif;">"The greatest glory in living is not in falling, 
                                                but in rising every time we fall."</h6>

                                    </div>
              
                                    <form class="form-outline d-flex flex-column align-items-center" role="form" action="processlogin.php" method="post">
                                        <div class="form-outline">
                                            <label class="form-group text-left text-white font-weight-bold" for="user">
                                                <input class="form-control form-control-user" style="font-family: 'Roboto', sans-serif;" placeholder="Username" name="user" type="text" id="user" autofocus>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-group text-left text-white font-weight-bold medium" for="pass">
                                                <input class="form-control form-control-user" style="font-family: 'Roboto', sans-serif;" placeholder="Password" name="password" type="password" value="" id="pass">
                                            </label>
                                        </div>

                                        <div class="form-group mb-3">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label text-white" style="font-family: 'Roboto', sans-serif;" for="customCheck">Remember Me</label>
                                            </div>
                                        </div>

                                        <button class="btn btn-user btn-md font-weight-bold" style="background-color: #EEE1C8; color: #F9CA24; font-family: 'Roboto', sans-serif;" type="submit" name="btnlogin">SIGN IN</button>
                                    </form>

                                </div>
                            </div>
                            <img src= "amelia.jpg" class="col-lg-6 d-flex align-items-center">
                                
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>




              

                    


                    
  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>
