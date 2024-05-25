<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<title>Register</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https:cdn.tailwindcss.com"></script>
<style type="text/css">
  body {
    background-image: -webkit-gradient(linear, left top, right top, from(#4e63d7), to(#76bfe9)) !important;
    background-image: linear-gradient(to right, #4e63d7 0%, #76bfe9 100%) !important;
    margin-top: 20px;
  }

  /* ===== LOGIN PAGE ===== */
  .login-box {
    -webkit-box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.1);
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.1);
    border-radius: 10px;
  }

  @media (min-width: 992px) {
    .login-box {
      margin: 40px 0;
    }
  }

  .login-box .form-wrap {
    padding: 30px 25px;
    border-radius: 10px;
    -webkit-box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.1);
    box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.1);
  }

  @media (min-width: 768px) {
    .login-box .form-wrap {
      padding: 45px;
    }
  }

  @media (min-width: 992px) {
    .login-box .form-wrap {
      margin-top: -40px;
      margin-bottom: -40px;
      padding: 60px;
    }
  }

  .login-section {
    position: relative;
    z-index: 0;
  }

  .login-section::after {
    position: absolute;
    content: '';
    right: 0;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    opacity: 0.15;
    z-index: -1;

    background-size: cover;
    background-repeat: no-repeat;
    background-position: top right;
    -webkit-animation-duration: 3s;
    animation-duration: 3s;
    -webkit-animation-direction: alternate;
    animation-direction: alternate;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    -webkit-animation-name: pulse;
    animation-name: pulse;
  }

  .login-section::before {
    position: absolute;
    content: '';
    opacity: 0.10;
    right: 0;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    z-index: -1;

    background-size: cover;
    background-position: top right;
    -webkit-animation-duration: 6s;
    animation-duration: 6s;
    -webkit-animation-direction: alternate;
    animation-direction: alternate;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    -webkit-animation-name: pulse;
    animation-name: pulse;
  }

  .login-section .content {
    padding: 45px;
  }

  .form-group .zmdi {
    position: absolute;
    z-index: 1;
    color: #fff;
    background-color: #4e63d7;
    border-radius: 5px;
    height: 100%;
    width: 45px;
    text-align: center;
    font-size: 20px;
    padding-top: 13px;
  }

  .form-group input[type='text'],
  .form-group input[type='email'],
  .form-group input[type='password'] {
    padding-left: 60px;
  }

  .form-control {
    border: 1px solid #e1e1e1;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-radius: 5px;
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
    background-color: #fff;
    color: #858585;
    font-weight: 400;
    position: relative;
  }

  .login-box .socials a {
    -webkit-box-shadow: 0 3px 2px 0 rgba(0, 0, 0, 0.12);
    box-shadow: 0 3px 2px 0 rgba(0, 0, 0, 0.12);
  }

  .socials a {
    width: 35px;
    height: 35px;
    background-color: #6893e1;
    border-radius: 50%;
    -webkit-box-shadow: 0 3px 2px 0 #516cd9;
    box-shadow: 0 3px 2px 0 #516cd9;
    text-align: center;
    color: #fff;
    padding-top: 10px;
    font-size: 16px;
    margin-right: 10px;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
  }

  .custom-checkbox {
    display: flex;
    align-items: center;
  }

  .custom-checkbox input {
    margin-right: 10px;
  }
</style>
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />
<div class="container">
  <div class="row">
    <div class="col-md-8 mt-60 mx-md-auto">
      <div class="login-box bg-white pl-lg-5 pl-0">
        <div class="row no-gutters align-items-center">
          <div class="col-md-5">
            <div class="form-wrap bg-white">
              <h4 class="btm-sep pb-3 mb-5">Register</h4>
              <form class="form" method="POST" action="/sesi/create">
              @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group position-relative">
                          <span class="zmdi zmdi-account"></span>
                          <input type="text" name="name" value="{{ Session::get('name') }}" class="form-control" placeholder="Username">
                        </div>
                      </div>
                  <div class="col-12">
                    <div class="form-group position-relative">
                      <span class="zmdi zmdi-email"></span>
                      <input type="email" name="email" value="{{ Session::get('email') }}" class="form-control" placeholder="Email Address">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group position-relative">
                      <span class="zmdi zmdi-lock"></span>
                      <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <input type="checkbox" id="togglePassword" onclick="togglePasswordVisibility()"> Show Password
                  </div>
                  
                  <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-lg btn-custom btn-dark btn-block">sign up</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-7">
            <div class="content text-center">
              <div class="border-bottom pb-5 mb-">
                <h1 class="text-dark font-weight-bold">Already have an account?</h1>
                <a href="/sesi" class="text- text-indigo-500 hover:text-indigo-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Tap here if you already have an account</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        //message with sweetalert
        @if(session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif

        function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password");
        var togglePasswordCheckbox = document.getElementById("togglePassword");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }
    </script>
</body>
</html>
