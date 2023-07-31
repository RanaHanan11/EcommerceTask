@extends('admin.master.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">{{ __('titles.list_of_product') }}</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">{{ __('titles.home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('titles.list_of_product') }}</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
    @component('components.errors')     
    @endcomponent
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <a type="button" class="btn btn-success float-end" href="{{ route('admin.product.create') }}">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                                <tr>
                                    <th>{{ __('titles.id') }}</th>
                                    <th>{{ __('titles.title') }}</th>
                                    <th>{{ __('titles.category_name') }}</th>
                                    <th>{{ __('titles.price') }}</th>
                                    <th>{{ __('titles.description') }}</th>
                                    <th>{{ __('titles.edit_product') }}</th>
                                    <th>{{ __('titles.delete_product') }}</th>
                                </tr>
                            </thead>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->title }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td><a href="{{ route('admin.product.edit', ['id' => $product->id]) }}" class="btn btn-sm btn-info">Edit</a></td>
                                    <td><a href="{{ route('admin.product.destroy', ['id' => $product->id]) }}" class="btn btn-sm btn-danger">Delete</a></td>
                                </tr>
                            @endforeach

                            <tbody>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
