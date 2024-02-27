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

    {{-- <title>{{ $title }} | Remaja Mujahidin</title> --}}
  </head>
  <body>
    <!-- Navbar awal -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
      <div class="container">
        <div class="navbar-brand">
          <img src="img/logo-rm.png" alt="logo-rm" width="35" />
        </div>
        <a class="navbar-brand" href="/">Remaja Mujahidin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- Navbar akhir -->
  </body>
</html>

<div class="container mt-5">
    @yield('container')
</div>

