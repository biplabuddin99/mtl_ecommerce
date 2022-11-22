@extends('backend.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Help </h4>

    <!-- Basic Layout -->
    <div class="row">
      <div class="col-8 offset-2">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Edit Help</h5>
          </div>
          <div class="card-body">
            <form action="{{route('ecom_help.update',$ecom_help->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
              <div class="mb-3">
                <label class="form-label" for="inputicon">Icon</label>
                <img width="100px" class="float-end" src="{{ asset('uploads/icon/'.$ecom_help->icon) }}" alt="">
                <input type="hidden" class="form-control" id="inputicon" name="inputicon" value="{{ $ecom_help->icon }}"/>
                <input type="file" class="form-control" id="inputicon" name="inputicon" value="{{ $ecom_help->icon }}"/>
              </div>
              <div class="mb-3">
                <label class="form-label" for="title">Title</label>
                <input type="text" class="form-control" id="title" name="inputtitle" value="{{ old('inputicon',$ecom_help->title) }}"/>
              </div>
              <div class="mb-3">
                <label class="form-label" for="link">Link</label>
                <input type="text" class="form-control" id="link" name="inputlink" value="{{ old('inputicon',$ecom_help->link) }}"/>
              </div>
              <button type="submit" class="btn btn-primary">Save</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection
