@extends('backend.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Help </h4>

    <!-- Basic Layout -->
    <div class="row">
      <div class="col-8 offset-2">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Create slider</h5>
          </div>
          <div class="card-body">
            <form action="{{route('ecomSlider.update',$ecomSlider->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
              <div class="mb-3">
                <label class="form-label" for="title">Title</label>
                <input type="text" class="form-control" id="title" name="inputtitle" value="{{ old('inputtitle',$ecomSlider->title) }}" />
              </div>
              <div class="mb-3">
                <label class="form-label" for="description">Description:</label>
                <input type="text" class="form-control" id="description" name="inputdescription" value="{{ old('inputdescription',$ecomSlider->description) }}" />
              </div>
              <div class="mb-3">
                <label class="form-label" for="link">Link</label>
                <input type="text" class="form-control" id="link" name="inputlink" value="{{ old('inputlink',$ecomSlider->link) }}" />
              </div>
              <div class="mb-3">
                <label class="form-label" for="inputpicture">Picture</label>
                <img width="100px" class="float-end" src="{{ asset('uploads/sliderimage/'.$ecomSlider->image) }}" alt="">
                <input type="hidden" class="form-control" id="inputpicture" name="inputpicture" value="{{ $ecomSlider->image }}" />
                <input type="file" class="form-control" id="inputpicture" name="inputpicture" value="{{ old('inputpicture',$ecomSlider->image) }}" />
              </div>
              <button type="submit" class="btn btn-primary">Save</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- <link rel="stylesheet" href="{{ asset('bassets/css/dropify.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('bassets/css/dropify.min.js') }}" /> --}}
    <!-- CK Editor -->
{{-- <script src="//cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
<!-- Page script -->
<script>
    CKEDITOR.replace( 'description' );
</script> --}}
  @endsection
