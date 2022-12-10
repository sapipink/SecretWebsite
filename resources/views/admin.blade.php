<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat</title>
    <link rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
        crossorigin="anonymous"
    />
</head>
<body>
    <!-- Navbar -->
<nav id="navbar-example2" class="navbar navbar-light bg-dark">
  <p class="navbar-brand text-light" href="#" >Sapi Pink</p>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="/purchase/sapi">pembelian sapi</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/login">Account</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="">contact admin</a>
  </ul>
</nav>
<!-- End Of Navbar -->


    <div class="text-center bg-secondary ">
        <h1><b>Anda Admin ya? semoga anda bukan heker</b></h1>
        <video width="900" height="600" controls>
            <source src="/Movie.mp4" type="video/mp4">
        </video>
        <br>
        <p>Jika benar anda admin anda bisa menggunakan kedua fitur tersebut:</p> 
        <a href="./create/adds" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Pasang iklan</a>
        <br>
        <br>
        <a href="./show/payment" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Liat hasil Pembayaran</a>
        <br>
        <br>
        <a href="./purchase/sapi" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">lihat iklan</a>
        <br><br>
    </div>
</body>
</html>