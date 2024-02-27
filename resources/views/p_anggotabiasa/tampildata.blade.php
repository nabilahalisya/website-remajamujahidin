<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
            crossorigin="anonymous"
        />
       
        <title>Administrator | Remaja Mujahidin</title>
    </head>
    <body>
        <h1 class="text-center mb-4">Ubah Data Anggota Muda Remaja Mujahdin</h1>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="/updatepbiasa/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                  <label class="form-label">ID Anggota Muda</label>
                                  <input name="id_anggota_muda" type="number" class="form-control" value="{{ $data->id_anggota_muda }}">
                                </div>
                                <div class="mb-3">
                                  <label  class="form-label">Tempat Lahir</label>
                                  <input name="tempat_lahir" type="text" class="form-control" value="{{ $data->tempat_lahir }}">
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Tanggal Lahir</label>
                                    <input name="tgl_lahir" type="date" class="form-control" value="{{ $data->tgl_lahir }}">
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Kelas</label>
                                    <input  name="kelas" type="number" class="form-control" value="{{ $data->kelas }}">
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Semester</label>
                                    <input  name="semester" type="number" class="form-control" value="{{ $data->semester }}">
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">No Hp Orang Tua</label>
                                    <input  name="no_hp_orang_tua" type="number" class="form-control" value="{{ $data->no_hp_orang_tua }}">
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Nama Kelompok Pembinaan</label>
                                    <input  name="nama_kelompok_pembinaan" type="text" class="form-control" value="{{ $data->nama_kelompok_pembinaan }}">
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Riwayat Penyakit</label>
                                    <input  name="nama_penyakit" type="text" class="form-control" value="{{ $data->nama_penyakit }}">
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Alergi</label>
                                    <input  name="alergi" type="text" class="form-control" value="{{ $data->alergi }}">
                                </div>
                            
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a type="button" href="/muda" class="btn btn-primary">
                                    Cancel
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
            crossorigin="anonymous"
        ></script>

       </body>
</html>
