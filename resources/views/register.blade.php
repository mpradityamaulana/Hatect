<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Sign Up | Hatect</title>
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
    <div class="bg order-1 order-md-2" style="background-image: url('img/bg_2.png');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3><strong>Create your account</strong></h3>
            <p class="mb-4">Unlock all Features!</p>
            <form action="{{ route('register') }}" method="POST">
                @csrf
              <div class="form-group first">
                <input type="text" id="name" name="name" placeholder="Name" class="form-control" required>
              </div>
              <div class="form-group mb-3">
                <input type="email" id="email" name="email" placeholder="Email" class="form-control" required>
              </div>
              <div class="form-group mb-3">
                <label for="user_type">Daftar sebagai</label>
                <select id="user_type" name="user_type" class="form-control" required>
                    <option value="petani">Petani</option>
                    <option value="ahliPertanian">Ahli Pertanian</option>
                </select>
             </div>
              <div class="form-group mb-3">
                <input type="password" id="password" name="password" placeholder="Password" class="form-control" required>
              </div>
              <div class="form-group last mb-3">
                <input type="password" id="password_confirmation" name="confirmpassword" placeholder="Confirm Password" class="form-control" required>
              </div>
              
              <input type="submit" value="Sign Up" class="btn btn-block btn-primary">
              <p class="mt-3 text-secondary">Already have account ? <a href="{{ route('login') }}" class="text-primary">Login Now</a></p>
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
