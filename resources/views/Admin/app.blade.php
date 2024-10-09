<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav>
        <!-- Navigation bar khusus admin -->
        <ul>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('karyawan.index') }}">Data Karyawan</a></li>
            <li><a href="{{ route('penilaian.index') }}">Penilaian</a></li>
            <li><a href="{{ route('penggajian.index') }}">Penggajian</a></li>
            <li><a href="{{ route('absensi.index') }}">Absensi</a></li>
            <li><a href="{{ route('logout') }}">Logout</a></li>
        </ul>
    </nav>

    <div class="content">
        @yield('content')
    </div>

    <footer>
        <p>&copy; 2024 RS Bhayangkara - Admin Panel</p>
    </footer>
</body>
</html>
