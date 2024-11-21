<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Hatect</title>
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

        .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        }

        .header h1 {
        margin: 0;
        }

        .header .dropdown {
        position: relative;
        display: inline-block;
        }

        .header .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }

        .header .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        }

        .header .dropdown-content a:hover {
        background-color: #f1f1f1;
        }

        .header .dropdown:hover .dropdown-content {
        display: block;
        }

        .weather {
        display: flex;
        justify-content: space-between;
        align-items: center;
        }

        . weather img {
        width: 50px;
        height: 50px;
        }

        .weather-info {
        display: flex;
        flex-direction: column;
        }

        .weather-info h2 {
        margin: 0;
        }

        .weather-info p {
        margin: 5px 0;
        }

        .pest-monitoring {
        background-color: #e0f7fa;
        padding: 20px;
        border-radius: 10px;
        }

        .pest-monitoring h3 {
        margin: 0;
        }

        .pest-monitoring .chart {
        width: 100%;
        height: 200px;
        background-color: #b2ebf2;
        }

        .live-chat {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        }

        .live-chat h3 {
        margin: 0;
        }

        .live-chat .chat-box {
        height: 300px;
        border: 1px solid #ccc;
        overflow-y: auto;
        padding: 10px;
        }

        .live-chat .input-box {
        display: flex;
        margin-top: 10px;
        }

        .live-chat .input-box input {
        flex: 1;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        }

        .live-chat .input-box button {
        padding: 10px;
        background-color: #00b0ff;
        color: white;
        border: none;
        border-radius: 5px;
        margin-left: 10px;
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
            <div class="header">
            <h1>Hello, {{ Auth::user()->nama_petani }}</h1>
            </div>
            <div class="weather">
            <img src="weather-icon.png" alt="Weather Icon">
            <div class="weather-info">
                <h2>25°C</h2>
                <p>Sunny</p>
            </div>
            </div>
            <div class="pest-monitoring">
            <h3>Pest Monitoring</h3>
            <div class="chart"></div>
            </div>
            <div class="live-chat">
            <h3>Live Chat</h3>
            <div class="chat-box"></div>
            <div class="input-box">
                <input type="text" placeholder="Type a message...">
                <button>Send</button>
            </div>
            </div>
        </div>
    </div>
</body>
</html>
