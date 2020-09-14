@extends('layouts.admin')

@section('title','Tambah gallery')

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
      
            <form action="{{route('gallery-store')}}" method="post" enctype="multipart/form-data">       
                @csrf
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Caption</span>
                    </div>
                <input type="text" class="form-control" name="caption" value="{{old('caption')}}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                </div>

               <div class="input-group mt-4">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Upload Gambar</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="picture" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
                </div>
                
                  <button type="submit" class="btn btn-lg btn-warning mt-4">
                      Upload
                  </button>
                <a href="{{route('gallery')}}" class="btn btn-lg btn-warning mt-4">Back</a>
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
    