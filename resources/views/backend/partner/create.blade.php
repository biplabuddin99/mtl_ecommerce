@extends('backend.master')
@section('content')
<div class="row">
    <div class="col-8 offset-2">
        <div class="card mb-4 mt-2">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Partner Create</h5>
        </div>
        <div class="card-body">
            <form   method="post" enctype="multipart/form-data" action="{{route('partner.store')}}">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="logo">Logo</label>
                    <input type="file" id="image" class="form-control" placeholder="Upload logo" name="image">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="title">Title</label>
                    <input type="text" value="{{ old('title')}}" class="form-control" id="title" placeholder="logo title" name="title" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="link">Link</label>
                    <input type="text" value="{{ old('link')}}" class="form-control" id="link" name="link"/>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection