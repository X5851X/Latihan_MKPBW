<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Akademik Npm</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<!-- Navbar content -->
    <style>
    .sticky {
        position: sticky;
        top: 0;
        z-index: 100;
    }
    </style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-sticky">
    <div class="container">
        <a class="navbar-brand" href="welcome">Sistem Informasi Akademik Npm</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="dosen">Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mahasiswa">Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="matakuliah">Matakuliah</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br>
<div class="container">
    @yield('content')
</div>

<script>
    window.addEventListener('scroll', function () {
        var navbar = document.querySelector('.navbar-sticky');
        navbar.classList.toggle('sticky', window.scrollY > 0);
    });
</script>

<br>
<!-- Footer content -->
<footer class="footer bg-dark text-white mt-5">
        <div class="container">
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                <p>&copy; Tugas Pemrograman Web:
                    <p>4E Informatika</p>
                </p>
        </div>
</div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>



