@extends('layouts.admin')

@section('title','Slider')
    
@section('content')
      <!-- Begin Page Content -->
      <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Data Slider</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <a href="{{route('slider-create')}}" class="btn btn-warning mb-3">Tambah Slider</a>
                <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th width="10%">Greeting</th>
                    <th width="10%">Description</th>
                    <th width="50%">Picture</th>
                    <th width="25%">Action</th>
                  </tr>
                </thead>
          
                <tbody>
                  @forelse ($items as $item)
                  <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$item->greeting}}</td>
                  <td>{!!$item->description!!}</td>
                  <td class="text-center"><img src="{{Storage::url($item->picture)}}" style="height: 300px; width:400px;" alt=""></td>
                    <td class="text-center">
                      <a href="{{route('slider-delete',$item->id)}}" class="btn btn-danger">Delete</a>
                      <a href="{{route('slider-edit',$item->id)}}" class="btn btn-success">Edit</a>
                    </td>
                  </tr>
                
                  @empty
                      <tr>
                        <td class="text-center" colspan="4"> Data Kosong</td>
                      </tr>
                  @endforelse
                
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

@endsection