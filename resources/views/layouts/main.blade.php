<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet"/>
    

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />

    
    <title>{{ $title }} | Remaja Mujahidin</title>
  </head>
  <body>
    <!-- Navbar awal -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
      <div class="container">
        <div class="navbar-brand">
          <img src="img/logo-rm.png" alt="logo-rm" width="35" />
        </div>
        <a class="navbar-brand" href="/">Remaja Mujahidin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
        data-bs-target="#navbarNav" 
        aria-controls="navbarNav" aria-expanded="false" 
        aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Beranda") ? 'active' : '' }}" 
              href="/">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Tentang") ? 'active' : '' }}" 
              href="/tentang">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Syiar") ? 'active' : '' }}" 
              href="/syiarr">Syiar</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link {{ ($title === "Kaderisasi") || ($title === 
              "Pendaftaran Anggota Muda") || 
              ($title === "Data Anggota") ? 'active' : '' }} dropdown-toggle" 
              type="button" id="dropdownMenuButton1" 
              data-bs-toggle="dropdown" aria-expanded="false">Kaderisasi
              </a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item {{ ($title === "Kaderisasi") ? 
                'active' : '' }}" href="/kaderisasi_v">Kaderisasi</a></li>
                <li><a class="dropdown-item {{ ($title === "Pendaftaran Anggota Muda") ? 'active' : '' }}" 
                  href="/kaderisasi">Pendaftaran Anggota Muda</a></li>
                <li><a class="dropdown-item" href="/loginmuda">
                  Pendafataran Anggota Biasa</a></li>
                <li><a class="dropdown-item {{ ($title === "Data Anggota") ? 
                'active' : '' }}" href="/anggota">Data Anggota</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Kontak") ? 'active' : '' }}" 
              href="/kontak">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar akhir -->
    @yield('content')
    <div class="container">
    </div>
    <!-- footer -->
    <section id="footer" class="mt-5">
      <footer class="bg-light text-black pt-5 pb-4">
        <div class="container">
          <div class="row justify-content-start">
            <div class="col-md-5">
              <h5 class="mb-3 font-weight-bold">Remaja Mujahidin</h5>
              <p>Organisasi Pembinaan & Pengembangan Potensi <br>Remaja Islam</p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
              <h5 class="mb-3 font-weight-bold">Menu</h5>
              <p>
                <a href="/" class="text-dark">Beranda</a>
              </p>
              <p>
                <a href="/syiarr" class="text-dark">Syiar</a>
              </p>
              <p>
                <a href="/kaderisasi_v" class="text-dark">Kaderisasi</a>
              </p>
              <p>
                <a href="/tentang" class="text-dark">Tentang</a>
              </p>
            </div>
            <div class="col-md-3">
              <h5 class="mb-3 font-weight-bold">Media Sosial</h5>
              <p>
                <a href="#" class="text-dark">Facebook</a>
              </p>
              <p>
                <a href="https://www.instagram.com/remajamujahidin_kalbar/" class="text-dark">Instagram</a>
              </p>
              <p>
                <a href="https://www.youtube.com/channel/UC7ioVJnQ-EiV3oaa02TuuRA" class="text-dark">Youtube</a>
              </p>
            </div>
            <div class="col-md-2">
                <h5 class="mb-3 font-weight-bold">Kontak</h5>
                
                  <a class="text-dark">
                      @foreach ($shownara as $item)
                          <p>Email: {!! $item->email !!}</p>
                      @endforeach
                  </a>
    
                  <a  class="text-dark">
                    @foreach ($shownara as $item)
                        <p>WhatsApp: <br> 0{!! $item->no_hp !!}</p> 
                    @endforeach
                    </a>
                
            </div>
          </div>
          <div class="row">
            <div class="col-md-7">
              <p class="text -dark mt-4">Powered by Remaja Mujahidin @ 2021 All Right Reserved.</p>
            </div>
            <div class="col-md-5 mt-4">
              <h5 class="font-weight-bold">Sekretariat</h5>
              <p>
                <a href="https://www.google.com/maps/place/Masjid+Mujahidin/@-0.0415856,109.3339828,17z/data=!3m1!4b1!4m5!3m4!1s0x2e1d593cb01b83ef:0xe3fd440bc99a3b8!8m2!3d-0.041644!4d109.3361516" class="text-dark"
                  >@foreach ($shownara as $item)
                      {!! $item->alamat !!}
                  @endforeach
                  </a
                >
              </p>
            </div>
          </div>
        </div>
      </footer>
      {{-- Jl. A. Yani, Bansir Darat, Kec. Pontianak Tenggara, Kota Pontianak, Kalimantan Barat 78111 --}}
    </section>
    <!-- footer Akhir-->
    <script src="js/bootstrap.js"></script>
    <script src="js/popper.min.js"></script>
  </body>
</html>
