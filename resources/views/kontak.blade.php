@extends('layouts.main')
@section('content')

<section id="muda">
    <div class="container">
      <div class="row text-center mb-5 mt-5">
      <h2>
        Kontak
        <br>Remaja Mujahidin Kalimantan Barat
      </h2>
      <div class="card mt-5">
          <div class="card-body">
              <a class="text-dark">
                @foreach ($shownara as $item)
                    <h4>Email: <br>{!! $item->email !!}</h4>
                @endforeach
            </a>
        
            <a  class="text-dark">
              @foreach ($shownara as $item)
                  <h4>WhatsApp: <br> 0{!! $item->no_hp !!}</h4> 
              @endforeach
              </a>

          </div>
      </div>
      </div>
    </div>
</section>
    
@endsection