@extends('layouts.admin')

@section('title','Post')
    
@section('content')
      <!-- Begin Page Content -->
      <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Post</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <a href="{{route('post-create')}}" class="btn btn-primary mb-3">Tambah Post</a>
                <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th width="20%">Title</th>
                    <th width="50%">Picture</th>
                    <th width="25%">Action</th>
                  </tr>
                </thead>
          
                <tbody>
                  @forelse ($items as $item)
                  <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$item->title}}</td>
                  <td>{{$item->picture}}</td>
                    <td class="text-center">
                      <a href="{{route('post-delete',$item->id)}}" class="btn btn-danger">Delete</a>
                      <a href="{{route('post-edit',$item->id)}}" class="btn btn-success">Edit</a>
                    </td>
                  </tr>
                
                  @empty
                      <tr>
                        <td class="" colspan="4"> Data Kosong</td>
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