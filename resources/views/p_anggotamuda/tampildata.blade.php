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
                            <form action="/updatepmuda/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                  <label class="form-label">Nama Lengkap</label>
                                  <input name="nama_lengkap" type="text" class="form-control" value="{{ $data->nama_lengkap }}">
                                </div>
                                <div class="mb-3">
                                  <label  class="form-label">Pendidikan Terkahir</label>
                                  <input name="pendidikan_terakhir" type="text" class="form-control" value="{{ $data->pendidikan_terakhir }}">
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">No Hp</label>
                                    <input name="no_hp" type="number" class="form-control" value="{{ $data->no_hp }}">
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Domisili</label>
                                    <input  name="domisili" type="text" class="form-control" value="{{ $data->domisili }}">
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
