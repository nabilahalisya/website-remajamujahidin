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
        <h1 class="text-center mb-4">Edit Data Agenda Remaja Mujahdiin</h1>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <form
                                action="/updatedataagenda/{{ $data->id}}"
                                method="POST"
                                enctype="multipart/form-data"
                            >
                            @csrf
                            {{-- <div class="mb-3">
                                <label
                                    for="exampleInputEmail1"
                                    class="form-label"
                                    >Tambah Gambar</label
                                >
                                <input
                                    type="file"
                                    name="gambar"
                                    class="form-control"
                                    id="exampleInputEmail1"
                                    aria-describedby="emailHelp"
                                />
                            </div> --}}

                            <div class="mb-3">
                                    <label
                                        for="exampleInputEmail1"
                                        class="form-label"
                                        >Tulis Judul</label
                                    >
                                    <input
                                        type="text"
                                        name="judul"
                                        class="form-control"
                                        id="exampleInputEmail1"
                                        aria-describedby="emailHelp"
                                        value="{{ $data->judul }}"
                                    />
                                </div>

                                <div class="mb-3">
                                    <label
                                        for="exampleInputEmail1"
                                        class="form-label"
                                        >Tulis Waktu Pelaksanaan</label
                                    >
                                    <input
                                        type="date"
                                        name="waktu_pelaksanaan"
                                        class="form-control"
                                        id="exampleInputEmail1"
                                        aria-describedby="emailHelp"
                                        {{ $data->date }}
                                    />
                                </div>

                                <div class="mb-3">
                                    <label
                                        for="exampleInputEmail1"
                                        class="form-label"
                                        >Tulis Deskripsi</label
                                    >
                                    <input
                                        type="text"
                                        name="deskripsi"
                                        class="form-control"
                                        id="exampleInputEmail1"
                                        aria-describedby="emailHelp"
                                        value="{{ $data->deskripsi }}"
                                    />
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                                <a type="button" href="/agenda" class="btn btn-primary">
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

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    --></body>
</html>
