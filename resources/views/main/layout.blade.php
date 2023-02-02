<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <title>Laract Penilaian Siswa (LSP)</title>
</head>
<body>
    <!-- ===== Header ===== -->
    <div class="header">
        <img src="{{ asset('/gambar/header.jpg') }}" alt="header.jpg" width="100%" heigh="100%">
    </div>

    <!-- ===== Menu ===== -->
    <div class="menu">
        <b>
            <a href="/home">HOME</a>
            @if (session('user')->role == 'admin')
                <a href="/guru/index">GURU</a>
                <a href="/jurusan/index">JURUSAN</a>
                <a href="/kelas/index">KELAS</a>
                <a href="/siswa/index">SISWA</a>
                <a href="/mapel/index">MATA PELAJARAN</a>
                <a href="/mengajar/index">MENGAJAR</a>
            @else
                <a href="/nilai/index">NILAI</a>
            @endif
            <a href="/logout">LOGOUT</a>
        </b>
    </div>

    <!-- ===== Content ===== -->
    @yield('content')

    <!-- ===== Footer ===== -->
    <div class="footer">
        <center>
            <p>
                &copy; {{ date('Y') }} - LSP & UJIKOM
            </p>
        </center>
    </div>
</body>
</html>