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

        <title>Dashboard | Remaja Mujahidin</title>
    </head>
    <body>
       <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-sm-6 mb-4">
            <h1 class="text-center">Data Akun Anggota Muda <br>Remaja Mujahidin</h1>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
 
  

    <!-- Main content -->
    <section class="content">
      <div class="container-lg">
        <div class="row-mb-2">
          <div class="col">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <a href="/storeakun" type="button" class="btn btn-primary btn-sm mb-3">Tambah</a>
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span>
                    </button>
                  </div>
                    @endif
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col-md-3">#</th>
                            <th scope="col-md-3">ID Anggota Muda</th>
                            <th scope="col-md-3">Waktu Dibuat</th>
                            <th scope="col-md-3">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                              $no = 1;
                          @endphp
                          @foreach ($data as $index=>$rows)
                          <tr>
                            <th scope="row">{{ $index + $data->firstItem() }}</th>
                            <td>{{ $rows->id_anggota_muda }}</td>
                            <td>{{ $rows->created_at }}</td>
                            <td>
                              <a href="" type="button" class="btn btn-success btn-sm">Ubah</a>
                              <a href="/delete_user/{{ $rows->id }}/konfirm" type="button" class="btn btn-danger btn-sm">Hapus</a>
                              {{-- <a href="/tampilsejarah/{{ $rows->deskripsi }}" type="button" class="btn btn-danger btn-sm">Tampil</a> --}}

                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      <div class="d-flex justify-content-end">
                        {{ $data->links() }}
                      </div> 
                    </div>
                    
                </div>
                
                
                
                {{-- <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </div> --}}
                </div>
                
                <!-- /.card -->
            </div>
        </div>
        <a href="/home" type="button" class="btn btn-primary btn-sm mt-5">Kembali</a>
    </div>
    </section>
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

 