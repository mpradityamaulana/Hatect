<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- Sesuaikan dengan file CSS kamu -->

</head>
<body>
    <div class="container">
        <h1>Create your account</h1>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <!-- Nama -->
            <div class="form-group">
                <input type="text" id="name" name="name" placeholder="Name" class="form-control" required>
            </div>

                <!-- Email -->
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder="Email" class="form-control" required>
            </div>

            <!-- Password -->
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Password" class="form-control" required>
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <input type="password" id="password_confirmation" name="confirmpassword" placeholder="Confirm Password" class="form-control" required>
            </div>

            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>

            <!-- Redirect to Login -->
            <p>Already have an account? <a href="{{ route('login') }}">Sign In</a></p>
        </form>
    </div>
</body>
</html>
