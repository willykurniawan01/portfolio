@extends('layouts.admin')
@section('title','Dashboard')

@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
      <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm text-dark"><i class="fas fa-download fa-sm text-dark"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <a href="{{route('post')}}">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Postingan</div>
                </a>
                <div class="h5 mb-0 font-weight-bold text-dark">{{$countpost}} Post</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-blog fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
              <a href="{{route('gallery')}}">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Gallery</div>
              </a>
                <div class="h5 mb-0 font-weight-bold text-dark">{{$countgallery}} Foto</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-blog fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <a href="{{route('slider')}}">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Slider</div>
                </a>
                <div class="h5 mb-0 font-weight-bold text-dark">{{$countslider}} Slider</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-blog fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

  </div>
  <!-- /.container-fluid -->
@endsection