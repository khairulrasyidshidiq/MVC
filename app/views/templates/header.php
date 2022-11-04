<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul'] ?> </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-success bg-gradient">
  <div class="container-fluid">
    <a class="navbar-brand text-dark bg-secondary bg-gradient" href="<?= BASE_URL ?>/home" id="wo">Absensi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?= BASE_URL ?>/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL ?>/absen">Absen</a>
      </ul>
    </div>
  </div>
</nav>