@extends('layouts.main')
    
@section('content')
<!-- sejarah -->
<section id="sejarah">
  <div class="container">
    <div class="row mb-3">
      <div class="col mt-5 text-center">
        <h2>Sejarah Remaja Mujahidin</h2>
        @foreach ($data as $rows)
        <p>{!! $rows->deskripsi !!}</p> 
        @endforeach
      </div>
    </div>
  </div>
</section>
<!-- sejarah akhir -->

<!-- visi -->
<section id="visi">
  <div class="container mt-5">
    <div class="row justify-content-start">
      <div class="col-md-6 text-center">
        <img src="img/logo-rm.png" alt="logo-rm" width="400" class="img-fluid" />
      </div>
      <div class="col-md-6 mt-3">
        <h3>Visi</h3>
        @foreach ($tentangvisi as $rows)
        <p>{!! $rows->deskripsi !!}</p> 
        @endforeach
      </div>
    </div>
  </div>
</section>
<!-- visi akhir -->

<!-- misi -->
<section id="misi">
  <div class="container mt-5">
    <div class="row justify-content-start">
      <div class="col-md-6 mt-3">
        <h3>Misi</h3>
        @foreach ($tentangmisi as $rows)
        <p>{!! $rows->deskripsi !!}</p> 
        @endforeach
      </div>
      <div class="col-md-6 text-center">
        <img src="img/logo-rm.png" alt="logo-rm" width="400" class="img-fluid" />
      </div>
    </div>
  </div>
</section>
<!-- misi akhir -->

<!-- pengurusrm -->
<section id="pengurus">
  <div class="container">
    <div class="row text-center mb-5 mt-5">
    <h2>
      Badan Pengurus Harian<br />
      Remaja Mujahidin Kalimantan Barat
      <br>Periode 2021-2023
    </h2>
    </div>

    <div class="row mb-5 mt-4">
    @foreach ($pengurus as $item)
      <div class="col-md-2 mb-4">
        {{-- foto pengurusnya --}}
        <img src="img/Agenda/{{ $item->gambar }} " class="card-img-top" alt="..." />
      </div>
      <div class="col-md-4 mt-1 mb-5">
        {{-- deskripsi pengurus --}}
        <h4>{!! $item->nama !!}</h4>
        <h6>{!! $item->jabatan !!}</h6>
        <p>{!! $item->deskripsi !!}</p>
      </div>
      @endforeach
    </div>

  </div>
</section>
<!-- pengurusrm akhir -->
@endsection