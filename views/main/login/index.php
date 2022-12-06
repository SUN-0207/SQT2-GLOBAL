<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>VNGREEN - Build technology and grow people</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="public/uploads/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="public/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="public/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="public/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="public/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="public/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="public/assets/css/style.css" rel="stylesheet">
  <link href="public/assets/css/main.css" rel="stylesheet">
  <link href="public/assets/css/util.css" rel="stylesheet">
</head>

<body style="background-color: #666666;">
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <form class="login100-form validate-form" method="POST">
          <span class="login100-form-title p-b-20">
            <strong>ĐĂNG NHẬP</strong>
          </span>


          <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="username">
            <span class="focus-input100"></span>
            <span class="label-input100">Email</span>
          </div>


          <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input class="input100" type="password" name="password">
            <span class="focus-input100"></span>
            <span class="label-input100">Password</span>
          </div>
          <?php

					if (isset($err))
					{
						echo '<p class="login-box-msg" style="color: red">' . $err . '</p>';
						unset($err);
					}
					?>
          <div class="flex-sb-m w-full p-t-3 p-b-32">

            <div>
              <a href="index.php?page=main&controller=layouts&action=index" class="txt1">
                Trở về trang chủ!
              </a>
            </div>
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn" name="submit-btn">
              Đăng nhập
            </button>
          </div>
        </form>

        <div class="login100-more" style="background-image: url('public/assets/img/slide/VNG\ Campus\ 31.jpg');">
        </div>
      </div>
    </div>
  </div>





  <!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
  <!--===============================================================================================-->
  <script src="js/main.js"></script>
  =======
  <title>SQT2-GLOBAL - Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="/SQT2-GLOBAL/public/uploads/favicon.png" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/SQT2-GLOBAL/public/vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/SQT2-GLOBAL/public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css"
    href="/SQT2-GLOBAL/public/fonts/iconic/css/material-design-iconic-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/SQT2-GLOBAL/public/vendor/animate/animate.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/SQT2-GLOBAL/public/vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/SQT2-GLOBAL/public/vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/SQT2-GLOBAL/public/vendor/select2/select2.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/SQT2-GLOBAL/public/vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="/SQT2-GLOBAL/public/css/util.css">
  <link rel="stylesheet" type="text/css" href="/SQT2-GLOBAL/public/css/main.css">
  <!--===============================================================================================-->

  </head>


  <body>

    <div class="limiter">
      <div class="container-login100" style="background-image: url('/SQT2-GLOBAL/public/img/background.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">

          <form method="POST" class="login100-form validate-form">

            <span class="login100-form-title p-b-49">
              Sign In
            </span>

            <div class="wrap-input100 validate-input m-b-23" data-validate="Email is required">
              <span class="label-input100">Email</span>
              <input class="input100" type="text" name="email" placeholder="Type your email">
              <span class="focus-input100" data-symbol="&#xf206;"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Password is required">
              <span class="label-input100">Password</span>
              <input class="input100" type="password" name="password" placeholder="Type your password">
              <span class="focus-input100" data-symbol="&#xf190;"></span>
            </div>

            <?php
=======
  <div class="limiter">
    <div class="container-login100" style="background-image: url('/SQT2 GLOBAL/public/img/background.jpg');">
      <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">

        <form method="POST" class="login100-form validate-form" data-aos="fade-up">

          <span class="login100-form-title p-b-49">
            Sign In
          </span>

          <div class="wrap-input100 validate-input m-b-23" data-validate="Email is required">
            <span class="label-input100">Email</span>
            <input class="input100" type="text" name="email" placeholder="Type your email">
            <span class="focus-input100" data-symbol="&#xf206;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Password is required">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" name="password" placeholder="Type your password">
            <span class="focus-input100" data-symbol="&#xf190;"></span>
          </div>

          <?php
>>>>>>> main

                    if (isset($err)) {
                        echo '<p class="login-box-msg" style="color: red">' . $err . '</p>';
                        unset($err);
                    }
                    ?>

            <div class="text-right -t-8 p-b-31">
              <a href="#" style="color:grey">
                Forgot password?
              </a>
            </div>

            <div class="container-login100-form-btn">
              <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <button class="login100-form-btn" name="submit-btn">
                  <strong>sign in</strong>
                </button>
              </div>
            </div>



            <div class="flex-col-c p-t-70">
              <span class="txt1 p-b-0">
                <a href="index.php?page=main&controller=register&action=index" style="color: grey;">Sign Up</a>
              </span>
            </div>


            <div class="flex-col-c p-t-20">
              <span class="txt1 p-b-0">
                <a href="index.php?page=main&controller=layouts&action=index" style="color: grey;">Return Home</a>
              </span>
            </div>

        </div>



        </form>
      </div>
    </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="/SQT2 GLOBAL/public/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="/SQT2 GLOBAL/public/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="/SQT2 GLOBAL/public/vendor/bootstrap/js/popper.js"></script>
    <script src="/SQT2 GLOBAL/public/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="/SQT2 GLOBAL/public/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="/SQT2 GLOBAL/public/vendor/daterangepicker/moment.min.js"></script>
    <script src="/SQT2 GLOBAL/public/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="/SQT2 GLOBAL/public/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="/SQT2 GLOBAL/public/js/main.js"></script>

  </body>

</html>