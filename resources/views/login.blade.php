<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Login | Hatect</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="img/Logo Hatect/Logo Hatect.png " type="image/png">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('img/bg.png');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Login to <strong>Hatect</strong></h3>
            <p class="mb-4">Masuk ke Hatect dan kelola data Anda dengan praktis.</p>
            <form action="{{ url('/login') }}" method="POST">
                @csrf
                <div class="form-group">
                                <label for="user_type">Masuk sebagai</label>
                                <select id="user_type" name="user_type" class="form-control" required>
                                    <option value="petani">Petani</option>
                                    <option value="ahliPertanian">Ahli Pertanian</option>
                                </select>
               </div>
              <div class="form-group first">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group last mb-3">
                <input type="password" id="password" name="password" placeholder="Password" class="form-control" required>
              </div>
              <input type="submit" value="Log In" class="btn btn-block btn-primary">
              <p class="mt-3 text-secondary">You don't have an account? <a href="{{ route('register')}}" class="text-primary">Sign Up now</a></p>
            </form>
          </div>
        </div>
      </div>
    </div> 
  </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    </body>
</html>