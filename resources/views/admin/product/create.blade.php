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
    <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
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
                        {{-- <div class="mb-3">
                            <div id="variantsContainer">

                            </div>
                            <input type="button" style="margin-top: 20px;" class="btn btn-success w-lg" value="Add Variant" id="addVariantBtn">
                            <input type="button" style="margin-top: 20px;" class="btn btn-primary w-lg" value="Save Record" id="saveRecord">

                            <div id="saveRecordContainer">

                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>

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

    </form>
@endsection
@section('script')
{{-- <script>
$(document).ready(function() {
      let variantCounter = 1;
      const maxAddOptionBtnClicks = 2;

      $('#addVariantBtn').on('click', function() {
        if (variantCounter > maxAddOptionBtnClicks) {
          alert('Cannot add any more variants!');
          return;
        }

        const variantsContainer = $('#variantsContainer');
        const variantDiv = $('<div>').addClass('variant-div').attr('data-index', variantCounter);
        const variantLabel = $('<label>').text('Variants').css('display', 'block').css('margin-top', '10px');

        let inputFieldValue = variantCounter === 1 ? 'Size' : 'Color';
        const optionNameLabel = $('<label>').text(inputFieldValue);

        const sizeInput = $('<input>')
          .attr('type', 'text')
          .attr('name', inputFieldValue)
          .addClass('form-control')
          .addClass('variant-input');

        const optionContainer = $('<div>').addClass('option-container');
        variantDiv.append(variantLabel, optionNameLabel, optionContainer);
        optionContainer.append(sizeInput);
        createAddOptionBtn(optionContainer, inputFieldValue);
        variantsContainer.append(variantDiv);

        variantCounter++;
      });

      // Save Record button click event handler
      $('#saveRecord').on('click', function() {
        const combinations = generateCombinations();

        // Clear the container and create a div with class 'container'
        $('#saveRecordContainer').empty();
        const containerDiv = $('<div>').addClass('container');
        $('#saveRecordContainer').append(containerDiv);

        // Create the title row and add it to the container
        let titleRow = $('<div>').addClass('row');
        let title = $('<label>').text('Varients').css('font-weight', 'bold').css('margin-top', '30px').addClass('col-4');
        let quantityTitle = $('<label>').text('Quantity').css('font-weight', 'bold').css('margin-top', '30px').addClass('col-7');
        titleRow.append(title, quantityTitle);
        containerDiv.append(titleRow);

        // Display the combinations in the div with an input field for quantity.
        for(let i = 0; i < combinations.length; i++) {
          let row = $('<div>').addClass('row');
          let combinationCell = $('<div>').addClass('col-4').text(combinations[i]).css('margin-top', '10px');
          let quantityInputCell = $('<div>').addClass('col-7').append($('<input>').css('margin-top', '10px')
            .attr('type', 'number')
            .attr('name', 'quantity' + i)
            .attr('placeholder', 'Enter quantity')
            .addClass('form-control'));

          row.append(combinationCell, quantityInputCell);
          containerDiv.append(row);
        }
      });
    });



    function createAddOptionBtn(container, inputFieldName) {
      const addOptionBtn = $('<button>').text('Add Option Variant').addClass('add-option-btn').addClass('btn').addClass('btn-primary').addClass('w-lg').addClass('mt-4');

      addOptionBtn.on('click', function(e) {
        e.preventDefault();

        const newInputField = $('<input>')
          .attr('type', 'text')
          .attr('name', inputFieldName)
          .addClass('variant-input')
          .addClass('form-control')
          .css('margin-top', '10px');

        addOptionBtn.before(newInputField);
      });

      container.append(addOptionBtn);
    }

    function generateCombinations() {
      const variantsList = [];

      $('.variant-div').each(function() {
        const inputFieldName = $('input:first', this).attr('name');
        const optionValues = [];

        $(this).find('.variant-input').each(function() {
          const inputValue = $(this).val();
          if (inputValue.trim() !== '') {
            optionValues.push(inputValue);
          }
        });

        if (optionValues.length > 0) {
          variantsList.push({ [inputFieldName]: optionValues });
        }
      });

      function generateVariantsRecursive(index, currentCombination) {
        if (index === variantsList.length) {
          combinations.push(currentCombination.join('/'));
          return;
        }

        const variant = variantsList[index];
        const variantKey = Object.keys(variant)[0];
        const variantValues = variant[variantKey];

        if (variantValues.length === 0) {
          generateVariantsRecursive(index + 1, currentCombination);
        } else {
          for (let i = 0; i < variantValues.length; i++) {
            generateVariantsRecursive(index + 1, [...currentCombination, variantValues[i]]);
          }
        }
      }

      const combinations = [];
      generateVariantsRecursive(0, []);

      return combinations;
    }

</script> --}}
@endsection
