@extends('backend.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card m-1 p-5">
    <h5 class="card-header m-0 ps-0">Page</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th class="text-white">#SL</th>
                        <th class="text-white">Title</th>
                        <th class="text-white">Description</th>
                        <th class="text-white">Slug</th>
                        <th class="text-white">Menu Location</th>
                        <th class="text-white">Order Menu</th>
                        <th class="text-white">Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @forelse($pages as $p)
                    <tr>
                        <th scope="row">{{ ++$loop->index }}</th>
                        <td>{{$p->title}}</td>
                        <td>{{$p->description}}</td>
                        <td>{{$p->slug}}</td>
                        <td>{{$p->menu_location}}</td>
                        <td>{{$p->order_menu}}</td>
                        <td class="white-space-nowrap">
                            <a class="btn btn-sm btn-primary" href="{{route('ecom_page.edit',$p->id)}}">Edit</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <th colspan="7" class="text-center">No data Found</th>
                    </tr>
                @endforelse
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
    <!--/ Bootstrap Table with Header Dark -->