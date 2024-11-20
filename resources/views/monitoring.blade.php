<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('profile') }}">Profile</a></li>
            <li><a href="{{route('dashboard')}}">Home</a></li>
            <li><a href="{{ route('monitoring') }}">Monitoring</a></li>
            <li>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </ul>
    </nav>
    <h1>Welcome to the Monitoring Page!</h1>
    <!-- Di sini kamu bisa menambahkan grafik atau data monitoring -->
</body>
</html>
