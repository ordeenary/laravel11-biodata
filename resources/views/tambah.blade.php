<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Beranda</title>
</head>
<header class="bg-dark" data-bs-theme="dark">
    <div class="container">
        <h1 class="text-center text-light mt-3">Biodata</h1>
    </div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/profile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/hobi">Hobi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/profilee">Profilee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/hobiku">Hobiku</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<body data-bs-theme="dark">
    <div class="container">
        <div class="fs-5 mt-3"><strong> Halaman Tambah Data</strong></div>
        <div class="card mt-3">
            <div class="card-body bg-dark-secondary">
            <form class="mt-3">
                <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="nama" class="form-control" id="inputEmail3">
                </div>
                </div>
                <div class="row mb-3">
                <label for="inputKelas3" class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3">
                </div>
                </div>
                <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                        value="option1" checked>
                    <label class="form-check-label" for="gridRadios1">
                        Laki-Laki
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                        value="option2">
                    <label class="form-check-label" for="gridRadios2">
                        Perempuan
                    </label>
                    </div>
                </div>
                </fieldset>
                <button type="submit" class="btn btn-primary">Tambahkan Data</button>
            </form>
            </div>
        </div>
        <div class="mt-3">
            <div class="fs-5">Lihat halaman lainnya:</div>
            <a name="" id="" class="btn btn-success btn-inline" href="/lihat" role="button">Lihat</a>
            <a name="" id="" class="btn btn-warning btn-inline" href="/edit"
                role="button">Edit</a>
            <a name="" id="" class="btn btn-danger btn-inline" href="/hapus"
                role="button">Hapus</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>
<footer class="bg-dark p-3 text-white fixed-bottom">
    <p class="m-0 text-center">© 2025 Scientia. All rights reserved.</p>
</footer>

</html>
