<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Login Savior | Hatect</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="img/Logo Hatect/Logo Hatect.png " type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/LineIcons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">


</head>
<body>
<div class="container px-4 py-5 mx-auto">
    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-10 my-5">
                        <h3 class="mb-5 text-center heading">Login</h3>
                        <h6 class="msg-info">Masuk ke Hatect dan kelola data Anda dengan praktis.</h6>
                        <form action="{{ url('/login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="email" id="email" name="email" placeholder="Email" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <input type="password" id="password" name="password" placeholder="Password" class="form-control" required>
                            </div>

                            <div class="row justify-content-center my-3 px-3">
                                <button type="submit" class="btn-primary">Login Now</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="bottom text-center mb-5">
                    <p class="sm-text mx-auto mb-3">You don't have account?<button class="btn btn-white ml-2"><a href="{{ route('register')}}">Sign Up now</a></button></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>