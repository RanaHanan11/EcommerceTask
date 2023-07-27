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
                <form method="post" action="{{ route('admin.category.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="formrow-firstname-input"
                            placeholder="Enter Category Name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="formrow-inputState" class="form-label">Category Status</label>
                        <select id="formrow-inputState" class="form-select" name="status">
                            <option selected value="1">Active</option>
                            <option value="0">Deactive</option>
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
