@extends('layouts.main')

@section('content')
<section id="foto">
      <!-- Caroussel -->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/rm.jpg" class="d-block w-100 img-fluid" alt="foto bersama pengurus remaja mujahidin" />
            <div class="carousel-caption d-none d-md-blockr">
              <!-- <h5>Ahlan Wa Sahlan</h5>
              <p>Sistem Informasi Remaja Mujahidin</p> -->
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/rm1.jpg" class="d-block w-100" alt="agenda upgrading ikhwan" />
          </div>
          <div class="carousel-item">
            <img src="img/rm2.jpg" class="d-block w-100" alt="agenda upgrading akhwat" />
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- Caroussel akhir -->
    </section>

    <!-- About -->
    <section id="about">
      <div class="container mt-5">
        <div class="row justify-content-start">
          <div class="col-md-6 text-center">
            <img src="img/logo-rm.png" alt="logo-rm" width="400" class="img-fluid" />
          </div>
          <div class="col-md-6">
            <h3>Tentang Kami</h3>
            <p>
              REMAJA MUJAHIDIN (RM) merupakan bagian dari Masjid Raya Mujahdin, mencoba melaksanakan segala kegiatannya dari tahun ke tahun dengan mengikuti perkembangan sosial remaja, khususnya remaja ibukota Provinsi. Agar tetap terarah maka RM terus berupaya melakukan perbaikan dalam agenda-agendanya.
              </p>
            <p>
              Remaja Mujahidin dalam menjalankan aktivitasnya organisasi yang bertujuan Terbinanya kehidupan beragama dalam kalangan remaja Islam, mengembangkan potensi kretif, keilmuan, sosial dan budaya.
              Remaja Mujahidin merupakan Organisasi yang tidak pernah absen dari aktivitas-aktivitas. Mulai dari aktivitas mingguan seperti Pengajian rutin anggota, olahraga mingguan, bimbingan belajar anggota, dll. Selain itu agenda mingguan dan bulanan Remaja Mujahidin yaitu seperti Ta’lim Keliling Anggota serta Remaja Masjid se – Kota Pontianak, Futsal Bareng Remaja Masjid se-kota Pontianak, Penyaluran bakat bagi anggota dan remaja kota pontianak, training-training, ifthor sunnaah senin kamis, kajian rutin muslimah, dll. 
            </p>  
          </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About akhir -->

    <!-- Agenda -->
    <section id="agenda">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col mt-5">
            <h2>Agenda Remaja Mujahidin</h2>
          </div>
        </div>
        <div class="row">
          @foreach ($showagenda as $item)
          <div class="col-md-3 mb-3">
            <div class="card">
              <img src="img/Agenda/{{ $item-> gambar }} " class="card-img-top" alt="..." />
              <div class="card-body">
                    <h5>{!! $item->judul !!}</h5>
                    <p>{!! $item->deskripsi !!}</p>
                    <a class="btn btn-info disabled">{!! $item->waktu_pelaksanaan !!}</a>
                  </div>
                </div>
              </div>
              @endforeach
        </div>
      </div>
    </section>
    <!-- Agenda akhir -->

    <!-- Data anggota dan tombol -->
    <section id="data">
      <div class="container mt-5">
        <div class="row justify-content-start">
          <div class="col-md-6">
            <h1 class="">
              Data Anggota <br />
              Remaja Mujahidin
            </h1>
          </div>
          <div class="col-md-6">
            <p>
              Berikut laman bagi kamu yang sudah terdaftar menjadi anggota muda dan anggota biasa.
              <br>segera cek nama kamu yuk!
            </p>
            <a href="/kaderisasi_v" class="btn btn-primary">Cek Disini</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Data anggota dan tombol Akhir -->
    @endsection