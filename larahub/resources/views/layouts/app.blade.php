<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="{{ asset('css/landing_page.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
 
    <title>Dishub Banyuwangi - Dinas Perhubungan Kab Banyuwangi</title>
  </head>
  <body>
    <h1>Dishub Banyuwangi</h1>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">DISHUB BANYUWANGI</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Data dan Informasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Berita</a>


        <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fasilitas</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown1">
                     <li><a class="nav-link" href="{{ url('traking angkutan pelajar dan umum gratis')}}">Traking Angkutan Pelajar dan Umum Gratis</a></li>
                     <li><a class="nav-link" href="#">Area Traffic Control System</a></li>
                    <li><a class="nav-link" href="#">Transportasi Wisata Gratis</a></li>
                    <li><a class="nav-link" href="#">Dishub Mobile</a></li>
                    
                </ul>
            </li>
        
        <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Layanan</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown1">
                    <li><a class="nav-link" href="#">Pengujian Kend Bermotor</a></li>
                    <li><a class="nav-link" href="#">Amdalalin</a></li>
                    <li><a class="nav-link" href="#">Dokumen</a></li>
                    @if (Auth::guest())
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login!</a>
                    </li>
                    @else
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    @endif
                    
                </ul>
            </li>
      </ul>
    </div>
  </div>
</nav>



@show
@yield('content')

    <!-- Footer -->
    <section id="contact footer-bottom">
   <footer class="container py-5">
      <div class="row">
        <div class="col-12 col-md">
          <h3>Tentang Kami</h3>
          <p>Dinas Perhubungan merupakan unsur pelaksana Urusan Pemerintahan bidang 
            Perhubungan yang menjadi kewenangan daerah.</p>
        </div>
        <div class="col-6 col-md">
          <h5>Manjemen Rekayasa Lalu Lintas</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">ATCS</a></li>
            <li><a class="text-muted" href="#">Traffic Voice</a></li>
            <li><a class="text-muted" href="#">E-tilang</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Layanan</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Pengujian Kendaraan Bermotor</a></li>
            <li><a class="text-muted" href="#">Angkutan Pelajar Gratis</a></li>
            <li><a class="text-muted" href="#">Angkutan Umum Gratis</a></li>
            <li><a class="text-muted" href="#">Angkutan Pariwisata Gratis</a></li>
          </ul>
        </div>
        
        <div class="col-6 col-md">
          <h5>Alamat</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">
            Jl. Kh. Agus Salim No.83, Taman Baru, Kec. Banyuwangi, Kabupaten Banyuwangi, 
            Jawa Timur 68416, Indonesia </a></li>
          </ul>
        </div>
      </div>
    </footer>
<!-- /.container -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>

  </body>
</html>