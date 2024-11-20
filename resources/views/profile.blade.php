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
<div class="container">
    <h1>Edit Profile</h1>
    
    <h2>Name</h2>
    <!-- Form untuk mengubah nama pengguna -->
    <form method="POST" action="{{ route('update') }}">
    @csrf
    <div class = "form-group">
        <input type="text" id="name" name="name" value="{{ Auth::user()->nama_petani }}"  required>
    </div>
    <button type="submit">Update</button>
    <p>{{ $user->nama_petani }}</p>
</form>
</div>

