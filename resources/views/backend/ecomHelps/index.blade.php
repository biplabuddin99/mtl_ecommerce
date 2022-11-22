@extends('backend.master')
@section('content')
              <!-- Bootstrap Table with Header - Dark -->
              <div class="card">
                <h5 class="card-header">Dark Table head</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead class="table-dark text-white">
                      <tr>
                        <th class="text-white">#SL NO.</th>
                        <th class="text-white">Icon</th>
                        <th class="text-white">title</th>
                        <th class="text-white">link</th>
                        <th class="text-white">Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($helps as $help)
                        <tr>
                            <th scope="row">{{ ++$loop->index }}</th>
                            <td>{{ $help->icon }}</td>
                            <td>{{ $help->title }}</td>
                            <td>{{ $help->link }}</td>

                            <td class="d-flex">
                                <a href="{{ route('ecom_help.edit',$help->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                {{-- <a href="javascript:void()" onclick="$('#form{{$help->id}}').submit()">
                                    <i class="fa fa-trash"></i>
                                </a> --}}
                                <form id="form{{$help->id}}" action="{{ route('ecom_help.destroy',$help->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn p-0" type="submit" onclick="return confirm('are You confirm?')"><i class='bi bi-trash-fill' style='color:red'></i></a></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <td colspan="5" class="text-center">There is no data</td>
                        @endforelse


                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Bootstrap Table with Header Dark -->


@endsection
