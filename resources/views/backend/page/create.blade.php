@extends('backend.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl">
            <div class="card m-1 p-5">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Page Create</h5>
            </div>
            <div class="card-body">
                <div class="col-8 offset-2">
                    <form   method="post"  action="{{route('ecom_page.store')}}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="title">Title</label>
                            <input type="text" value="{{ old('title')}}" class="form-control" id="title" placeholder="title" name="title" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="des">Description</label>
                            <textarea class="form-control" name="des" id="des" rows="2">{{ old('des')}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="slug">Slug</label>
                            <input type="text" value="{{ old('slug')}}" class="form-control" id="slug" name="slug"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="menuLocation">Menu Location</label>
                            <input type="text" value="{{ old('menuLocation')}}" class="form-control" id="menuLocation" name="menuLocation"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection