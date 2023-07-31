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
    {{-- <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data"> --}}
        @csrf
        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="formrow-firstname-input" class="form-label">Title</label>
                            <input type="text" class="form-control" id="formrow-firstname-input" name="title"
                                placeholder="Enter Your Title">
                            @error('title')
                                <p style="color: red">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="formrow-email-input" class="form-label">Price</label>
                            <input type="text" class="form-control" id="formrow-email-input"
                                placeholder="Enter Your Price" name="price">
                            @error('price')
                                <p style="color: red">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="formrow-email-input" class="form-label">Description</label>
                            <textarea name="description" id="" class="form-control" cols="30" rows="10"></textarea>
                            @error('description')
                                <p style="color: red">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div id="variantsContainer">

                            </div>
                            <input type="button" style="margin-top: 20px;" class="btn btn-success w-lg" value="Add Variant" id="addVariantBtn">

                        </div>

                        {{-- <div class="mb-3">
                            <input type="button" class="btn btn-success w-lg" value="Add Varient">
                        </div> --}}

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
                        <div class="row mb-4">
                            <div class="custom-file-upload ">
                                <label for="file-upload" class="btn btn-primary w-xl">
                                    Click to Add Image
                                  </label>
                                  <input id="file-upload" type="file" name="feature_image" accept="image/*">
                                  @error('feature_image')
                                  <p style="color: red">{{ $message }}</p>
                              @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Upload Multiple Images</h4>

                        <div class="row mb-4">
                            <div class="custom-file-upload ">
                                <label for="file-uploads" class="btn btn-primary w-xl">
                                    Click to Add Multiple Images
                                  </label>
                                  <input id="file-uploads" type="file" name="multiple_image[]" multiple>
                                  @error('multiple_image')
                                  <p style="color: red">{{ $message }}</p>
                              @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Select Category</h4>

                        <div class="row mb-4">
                            <select id="formrow-inputState" class="form-select" name="category_id">
                                <option value="">{{ __('titles.please_select_category') }}</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach

                            </select>
                            @error('category_id')
                                <p style="color: red">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <button type="submit" class="btn btn-primary btn-lg w-10">{{ __('Submit') }}</button>
        </div>

    {{-- </form> --}}
@endsection
@section('script')

<script>

$(document).ready(function() {
  let variantCounter = 1;

  $('#addVariantBtn').on('click', function() {
    const variantsContainer = $('#variantsContainer');
    const variantLabel = $('<label>').text('Variants').css('display', 'block').css('margin-top', '10px'); // Set display as block
    const optionNameLabel = $('<label>').text('Options Name');

    // Check the variantCounter to determine the value of the input field
    let inputFieldValue = variantCounter === 1 ? 'Size' : 'Color';
    const sizeInput = $('<input>')
      .attr('type', 'text')
      .attr('name', inputFieldValue)
      .attr('id', inputFieldValue.toLowerCase() + '_id')
      .val(inputFieldValue)
      .addClass('form-control');

    const optionVariantsLabel = $('<label>').text('Option Variants').css('display', 'block').css('margin-top', '10px');
    const inputField = $('<input>').attr('type', 'text').addClass('variant-input').addClass('form-control');
    const addOptionBtn = $('<button>').text('Add Option Variant').addClass('add-option-btn').addClass('btn').addClass('btn-primary').addClass('w-lg').addClass('mt-4');

    // Add event handler for dynamically added "Add Option Variant" buttons
    addOptionBtn.on('click', function() {
      const newInputField = $('<input>').attr('type', 'text').addClass('variant-input').addClass('form-control').css('margin-top', '10px');
      const inputFieldContainer = $('<div>').append(newInputField);
      $('#variantsContainer').append(inputFieldContainer);
      $('#variantsContainer').append(addOptionBtnContainer);
    });

    // Create a container for the button
    const addOptionBtnContainer = $('<div>').append(addOptionBtn);

    // Append all elements to the container
    $('#variantsContainer').append(
      variantLabel, // Displayed as a block, forcing the next element to start on a new line
      optionNameLabel,
      sizeInput,
      optionVariantsLabel,
      inputField,
      addOptionBtnContainer // Append the button container instead of the button directly
    );

    variantCounter++;
  });
});



</script>
@endsection
