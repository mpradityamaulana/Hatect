<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Hatect</title>
    <style>
        body {
        font-family: sans-serif;
        }

        .container {
        display: flex;
        gap: 20px;
        }


        .left-column {
        width: 150px;
        background-color: #00b0ff;
        color: white;
        padding: 20px;
        border-radius: 10px;
        }

        .left-column img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        }

        .left-column i {
        display: block;
        margin-top: 20px;
        font-size: 24px;
        }

        .right-column {
        width: calc(100% - 190px);
        display: flex;
        flex-direction: column;
        gap: 20px;
        }

        .sidebar {
            width: 100px;
            background-color: #00a8cc;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sidebar i {
            font-size: 24px;
            color: #fff;
            margin-bottom: 20px;
        }

        .content {
            padding: 30px;
            width: 100%;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header h2 {
            margin: 0;
        }

        .header i {
            font-size: 20px;
            color: #00a8cc;
            cursor: pointer;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input,
        .form-group select {
            width : 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group button {
            background-color: #00a8cc;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #008cba;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-column">
            <ul>
                <li><a href="{{ route('profile') }}"><img src="profile.jpg" alt="Profile Picture"></a></li>
                <li><a href="{{route('dashboard')}}"><img src=img/logoHome.png alt="Home Logo"></a></li>
                <li><a href="{{ route('monitoring') }}"><img src=img/logoVideo.png alt="Monitoring Logo"></a></li>
                <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <img src="img/logoutLogout.png" alt="Logout Picture" style="cursor: pointer;"></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
        <div class="right-column">
            <h1>Edit Profile</h1>
            
            <h2>Name</h2>
            <!-- Form untuk mengubah nama pengguna -->
            <form method="POST" action="{{ route('update') }}">
                @csrf
                <div class = "form-group">
                    <input type="text" id="name" name="name" value="{{ Auth::user()->nama_petani }}"  required>
                </div>
                <button type="submit">Save</button>
            </form>
        </div>
    </div>
</body>
</html>

