@extends('layouts.master')

@section('content') 

@include('sidebarsyiar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Selamat Datang Kembali, Syiar</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Info boxes -->
    <div class="row">
      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-danger elevation-1"><i class="far fa-calendar-alt"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Jumlah Agenda</span>
            <span class="info-box-number">00</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

    </div>
    <!-- /.row -->
  </div>
</section>
</div>

@endsection