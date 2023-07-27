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

    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="formrow-firstname-input" class="form-label">Title</label>
                            <input type="text" class="form-control" id="formrow-firstname-input"
                                placeholder="Enter Your Title">
                        </div>

                        <div class="mb-3">
                            <label for="formrow-email-input" class="form-label">Price</label>
                            <input type="email" class="form-control" id="formrow-email-input"
                                placeholder="Enter Your Price">
                        </div>

                        <div class="mb-3">
                            <label for="formrow-email-input" class="form-label">Description</label>
                            <textarea name="description" id="" class="form-control" cols="30" rows="10"></textarea>
                        </div>



                        <div>
                            <button type="submit" class="btn btn-primary w-md">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Upload Feacture Image</h4>

                    <form>
                        <div class="row mb-4">
                            <div>
                                <button type="submit" class="btn btn-primary w-xl">Upload Your Image</button>
                            </div>
                        </div>

                    </form>
                </div>
                <!-- end card body -->
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Upload Multi Images</h4>

                    <form>

                        <div class="row mb-4">
                            <div>
                                <button type="submit" class="btn btn-primary w-xl">Upload Your Image</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Select Category</h4>

                    <form>
                        <div class="row mb-4">
                            <select id="formrow-inputState" class="form-select">
                                @foreach ( $categories as $category)
                                <option value="{{ $category->id }}" @if ($category->id == $selectedCategoryId) selected @endif>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </form>
                </div>
            </div>

            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->


    <!-- end row -->


    <!-- end row -->


    <!-- end row -->

    <!-- container-fluid -->

    <!-- End Page-content -->
@endsection
