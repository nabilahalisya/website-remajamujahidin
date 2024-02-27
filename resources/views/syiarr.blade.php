@extends('layouts.main')

@section('content')
<section id="agenda">
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col mt-5">
                <h2>Agenda Remaja Mujahidin</h2>
            </div>
        </div>
        <div class="row">
        @foreach ($syiar as $item)
        <div class="col-md-3 mb-3 mt-4">
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
@endsection