@extends('layouts.admin')

@section('title','Edit Post')

@section('content')
    <div class="container-fluid">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
             @endif
      
            <form action="{{route('post-update',$item->id)}}" method="post">     
                @method('PUT')  
                @csrf
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Title</span>
                    </div>
                <input type="text" class="form-control" name="title" value="{{$item->title}}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                </div>

            <img class="mt-4 img-thumbnail" style="width: 400px; height:300px;" src="{{Storage::url($item->picture)}}" alt="">
                <div class="input-group mt-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Ganti Gambar</span>
                    </div>

                <div class="custom-file">
                        <input type="file" class="custom-file-input" name="picture" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
                </div>

                <div class="form-group mt-4">
                <textarea class="form-control" id="editor1" name="post" rows="3">{{$item->post}}</textarea>
                  </div>
                
                  <button type="submit" class="btn btn-lg btn-warning">
                      Upload
                  </button>
                <a href="{{route('post')}}" class="btn btn-lg btn-warning">Back</a>
            </form>
    </div>
@endsection

@push('ckeditor')
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
@endpush

@push('ckeditor-script')
<script>
    CKEDITOR.replace( 'editor1' );
</script>
@endpush
    