@extends('layouts.main')

@section('content')

<div class="container ">
    <div class="row">
        <div class="col-md-6 ms mt-4">
            <h3 class="mb-2 mt-4">PENDAFTARAN ANGGOTA MUDA</h3>
            <h4>PENDAFTARAN TELAH DIBUKA</h4>
            @foreach ($angkatan as $item)
                <p>Angkatan ke : {{ $item->angkatan }}</p>
            @endforeach
            @foreach ($tglmulai as $item)
            <p>Tanggal Mulai Pendaftaran : {{ $item->tanggal_mulai }}</p>
            @endforeach
            @foreach ($tglselesai as $item)
                <p>Tanggal Selesai Pendaftaran : {{ $item->taggal_selesai }}</p>
            @endforeach

            <div class="row mt-5">
                <p class="mb-3 mt-3">Yuk jadi bagian untuk menjadi kader yang berpotensi
                    di masa depan <br> dalam dakwah islam </p>
                </div>
                <a href="/kaderisasi" class="btn btn-primary">Daftar</a>  
                
                <div class="row mt-5">
                    <p class="mb-3 mt-3">Kamu sudah terdaftar? yuk cek akunmu! </p>
                    </div>
                    <a href="/loginmuda" class="btn btn-primary">Masuk</a>      
            
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-2 mt-5">
            <img src="gambarvisi/ymg.jpg" width="400 px" alt="">
        </div>
    </div>
</div>
@endsection