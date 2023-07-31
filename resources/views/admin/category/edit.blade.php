@extends('admin.master.app')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">{{ __('titles.create_new_category') }}</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">{{ __('titles.category') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('titles.create') }}</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="col-xl-12 d-flex align-items-center justify-content-center">
        <div class="card" style="width: 50%">
            <div class="card-body">
                <form method="post" action="{{ route('admin.category.update' , ['id' => $category->id]) }}">
                    @csrf
                    @method('put');
                    <div class="mb-3">
                        <label class="form-label">Category Name</label>
                        <input type="text" class="form-control" placeholder="Enter Category Name" name="name" value="{{ $category->name }}">
                        @error('name') <p style="color: red">{{ $message }}</p> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Category Status</label>
                        <select class="form-select" name="status">
                            <option value="1" @if($category->status == 1) selected @endif>Active</option>
                            <option value="0" @if($category->status == 0) selected @endif>Deactive</option>
                        </select>

                    </div>
                    <button type="submit" name="submit" class="btn btn-primary w-md">Submit</button>
                </form>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>

@endsection
