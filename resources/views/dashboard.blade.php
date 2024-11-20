<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Link CSS -->
    <script>
        // Mencegah tombol back
        window.history.pushState(null, null, window.location.href);
        window.onpopstate = function () {
            window.history.pushState(null, null, window.location.href);
        };
    </script>
</head>
<body>
    <div class="container">

        <!-- Menu navigasi -->
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

        <!-- Konten Dashboard -->
        <div>
            <h2>Hello {{ $user->nama_petani }}, here is your field today:  </h2>    
        </div>

        <div>
            <h2>Weather</h2>
        </div>

        <div>
            <h2>CCTV Real-Time</h2>
        </div>


        <div>
            <h2>Live Chat</h2>
        </div>


        <div>
            <h2>Pest Quick Monitoring</h2>
        </div>
    </div>
</body>
</html>
