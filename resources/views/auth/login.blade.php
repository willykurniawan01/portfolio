<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="icon" href="{{asset('home/img/logo.png')}}">
  <title>Willy kurniawan - Login</title>

  <!-- Custom fonts for this template-->
    <link href="{{asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
<link href="{{asset('admin/css/sb-admin-2.css')}}" rel="stylesheet">

</head>

<body class="bg-warning">

  <div class="container">   

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
            <div class="col-lg-6 d-none d-lg-block" style="background-image: url('{{asset('home/img/1.jpg')}}'); background-size:cover; background-repeat:no-repeat;"></div>
              <div class="col-lg-6 bg-black">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-white mb-4">Welcome Back!</h1>
                  </div>
                <form class="user" method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                        aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword"
                        placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="text-white custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button type="submit"  class="btn btn-warning btn-user btn-block">
                      Login
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('admin/js/sb-admin-2.min.js')}}"></script>

</body>

</html>