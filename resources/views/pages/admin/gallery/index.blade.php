@extends('layouts.admin')

@section('title','gallery')
    
@section('content')
      <!-- Begin Page Content -->
      <div class="container-fluid">
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-dark">Kategori Gallery</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <button data-target="#tambahkategori" data-toggle="modal" class="btn btn-warning  mb-3">Tambah Kategori Gallery</button>
        <thead>
          <tr>
            <th width="5%">No</th>
            <th width="20%">Kategori</th>
            <th width="25%">Action</th>
          </tr>
        </thead>
  
        <tbody>
          @forelse ($category as $item)
          <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$item->category}}</td>
             <td class="text-center">
              <a href="{{route('categorygallery-delete',$item->id)}}" class="btn btn-danger">Delete</a>
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
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Data Gallery</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <a href="{{route('gallery-create')}}" class="btn btn-warning  mb-3">Tambah gallery</a>
                <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th width="20%">Caption</th>
                    <th width="50%">Picture</th>
                    <th width="25%">Action</th>
                  </tr>
                </thead>
          
                <tbody>
                  @forelse ($items as $item)
                  <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$item->caption}}</td>
                  <td class="text-center"><img src="{{Storage::url($item->picture)}}" style="height: 300px; width:400px;" alt=""></td>
                    <td class="text-center">
                      <a href="{{route('gallery-delete',$item->id)}}" class="btn btn-danger">Delete</a>
                      <a href="{{route('gallery-edit',$item->id)}}" class="btn btn-success">Edit</a>
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

      <!-- Modal -->
<div class="modal fade" id="tambahkategori" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form method="POST" action="{{route('addgallerycategory')}}">
    @csrf
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori Gallery</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <label for="kategori">Kategori</label>
         <input type="text" name="category" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-warning">Save changes</button>
      </div>
    </div>
  </form>
  </div>
</div>
@endsection