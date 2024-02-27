@extends('layouts.main')
@section('content')

<!-- Tabel Anggota Muda -->
<section id="muda">
    <div class="container">
      <div class="row text-center mb-5 mt-5">
      <h2>
        Tabel Data Anggota
        <br>Remaja Mujahidin Kalimantan Barat
      </h2>
      </div>
      <div class="card">
        <div class="card-body">

          <div class="table-responsive">
            <table class="table">
              <thead>
                  <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Asal Daerah</th>
                      <th scope="col">Angkatan</th>
                      <th scope="col">Status</th>
                  </tr>
              </thead>
              <tbody>
                  @php
                      $no = 1;
                  @endphp
                  @foreach ($anggota as $index=>$row)
                  <tr>
                      <th scope="row">{{ $index + $anggota->firstItem() }}</th>
                      <td>{{ $row->nama_lengkap }}</td>
                      <td>0{{ $row->asal_daerah }}</td>
                      <td>{{ $row->angkatan }}</td>
                      <td>{{ $row->status}}</td>
                  </tr>
                  
                  @endforeach
                </tbody>
              </table>
              <div class="card-body">
                <div class="d-flex justify-content-end">
                  {{ $anggota->links() }}
                </div>
            </div>
            </div>
          </div>
      
        </div>
      </div>
    </div>
  </section>
  <!-- pengurusrm akhir -->
    
@endsection