@extends('admin.master.app')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">{{ __('titles.create_new_product') }}</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">{{ __('titles.product') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('titles.create') }}</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
    <form action="{{ route('admin.product.update' , ['id' => $product->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter Your Title" value="{{ $product->title }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="text" class="form-control" placeholder="Enter Your Price" name="price" value="{{ $product->price }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" cols="30" rows="10">{{ $product->description }}</textarea>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary w-md">Submit</button>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->

            <div class="col-xl-4">
                {{-- <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Upload Feacture Image</h4>
                        <div class="row mb-4">
                            <div>
                                <input type="file" class="btn btn-primary w-xl" name="feature_image">
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Upload Multi Images</h4>

                        <div class="row mb-4">
                            <div>
                                <input type="file" class="btn btn-primary w-xl" name="multiple_image[]" multiple>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Select Category</h4>

                        <div class="row mb-4">
                            <select id="formrow-inputState" class="form-select" name="category_id">
                                <option value="">{{ __('titles.please_select_category') }}</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @if ($category->id == $selectedCategoryId) selected @endif>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
@endsection
