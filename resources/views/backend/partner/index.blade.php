@extends('backend.master')
@section('content')
<div class="card m-4 p-5">
    <h5 class="card-header">Partner</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th class="text-white">#SL</th>
                    <th class="text-white">Logo</th>
                    <th class="text-white">Title</th>
                    <th class="text-white">Link</th>
                    <th class="text-white">Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            @forelse($partner as $p)
                <tr>
                    <th scope="row">{{ ++$loop->index }}</th>
                    <td><img width="80px" height="40px" class="float-first" src="{{asset('uploads/plogo/'.$p->logo)}}" alt=""></td>
                    <td>{{$p->title}}</td>
                    <td>{{$p->link}}</td>
                    <td class="white-space-nowrap">
                        <a class="btn btn-sm btn-primary" href="{{route('partner.edit',$p->id)}}">Edit</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <th colspan="5" class="text-center">No data Found</th>
                </tr>
            @endforelse
                
            </tbody>
        </table>
    </div>
</div>
@endsection
    <!--/ Bootstrap Table with Header Dark -->