@extends('admin.master.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">{{ __('titles.list_of_category') }}</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">{{ __('titles.home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('titles.list_of_category') }}</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <a type="button" class="btn btn-success float-end" href="{{ route('admin.category.create') }}">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                                <tr>
                                    <th>{{ __('titles.id') }}</th>
                                    <th>{{ __('titles.name') }}</th>
                                    <th>{{ __('titles.status') }}</th>
                                    <th>{{ __('titles.edit_category') }}</th>
                                    <th>{{ __('titles.delete_category') }}</th>

                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            @if ($category->status == 1)
                                                <span class="badge bg-success">{{ __('messages.active') }}</span>
                                            @else
                                                <span class="badge bg-danger">{{ __('messages.inactive') }}</span>
                                            @endif
                                        </td>
                                        <td><a href="{{ route('admin.category.edit', ['id' => $category->id]) }}" class="btn btn-sm btn-info">Edit</a></td>
                                        <td><a href="{{ route('admin.category.destroy', ['id' => $category->id]) }}" class="btn btn-sm btn-danger">Delete</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
