@extends('admin.layouts.layout')
@section('content')
      <div class="modal fade" id="new-order" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-body">
                      <div class="popup text-left">
                          <h4 class="mb-3">New Order</h4>
                          <div class="content create-workform bg-body">
                              <div class="pb-3">
                                  <label class="mb-2">Email</label>
                                  <input type="text" class="form-control" placeholder="Enter Name or Email">
                              </div>
                              <div class="col-lg-12 mt-4">
                                  <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                      <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                      <div class="btn btn-outline-primary" data-dismiss="modal">Create</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>      <div class="content-page">
     <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Product</h4>
                            @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        </div>
                    </div>
                    <div class="card-body">
                        <form id="productForm" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                {{-- Name --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name *</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                        <small class="text-danger error-name"></small>
                                    </div>
                                </div>

                                {{-- Main Category --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Main Category *</label>
                                        <select name="main_category" class="form-control">
                                            <option></option>
                                            <option>UM01</option>
                                            <option>SEM01</option>
                                            <option>COF01</option>
                                            <option>FUN01</option>
                                            <option>DIS01</option>
                                            <option>NIS01</option>
                                        </select>
                                        <small class="text-danger error-main_category"></small>
                                    </div>
                                </div>

                                {{-- Sub Category 1 --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Sub Category 1 *</label>
                                        <select name="sub_category_1" class="form-control">
                                            <option></option>
                                            <option>UM01</option>
                                            <option>SEM01</option>
                                            <option>COF01</option>
                                            <option>FUN01</option>
                                            <option>DIS01</option>
                                            <option>NIS01</option>
                                        </select>
                                        <small class="text-danger error-sub_category_1"></small>
                                    </div>
                                </div>

                                {{-- Sub Category 2 --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Sub Category 2 *</label>
                                        <select name="sub_category_2" class="form-control">
                                            <option></option>
                                            <option>Grocery</option>
                                            <option>Food</option>
                                            <option>Furniture</option>
                                            <option>Shoes</option>
                                            <option>Frames</option>
                                            <option>Jewellery</option>
                                        </select>
                                        <small class="text-danger error-sub_category_2"></small>
                                    </div>
                                </div>

                                {{-- Listed Price --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Listed Price *</label>
                                        <input type="text" name="listed_price" class="form-control" placeholder="Enter Price">
                                        <small class="text-danger error-listed_price"></small>
                                    </div>
                                </div>

                                {{-- Discount Price --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Discount Price *</label>
                                        <input type="text" name="discount_price" class="form-control" placeholder="Enter Discount Price">
                                        <small class="text-danger error-discount_price"></small>
                                    </div>
                                </div>

                                {{-- Weight --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Weight *</label>
                                        <select name="weight" class="form-control">
                                            <option>Exclusive</option>
                                            <option>Inclusive</option>
                                        </select>
                                        <small class="text-danger error-weight"></small>
                                    </div>
                                </div>

                                {{-- Quantity --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Quantity *</label>
                                        <input type="text" name="quantity" class="form-control" placeholder="Enter Quantity">
                                        <small class="text-danger error-quantity"></small>
                                    </div>
                                </div>

                                {{-- Main Image --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Main Image</label>
                                        <input type="file" class="form-control" name="main_image" accept="image/*">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Sub Image 1</label>
                                        <input type="file" class="form-control" name="sub_image_1" accept="image/*">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Sub Image 2</label>
                                        <input type="file" class="form-control" name="sub_image_2" accept="image/*">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Video</label>
                                        <input type="file" class="form-control" name="video" accept="video/*">
                                    </div>
                                </div>



                                {{-- Description --}}
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description / Product Details</label>
                                        <textarea name="description" class="form-control" rows="4"></textarea>
                                        <small class="text-danger error-description"></small>
                                    </div>
                                </div>

                                {{-- Author --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Author *</label>
                                        <input type="text" name="author" class="form-control" placeholder="Enter Author">
                                        <small class="text-danger error-author"></small>
                                    </div>
                                </div>

                                {{-- Publisher ISBN --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Publisher/ISBN *</label>
                                        <input type="text" name="publisher_isbn" class="form-control" placeholder="Enter Publisher/ISBN">
                                        <small class="text-danger error-publisher_isbn"></small>
                                    </div>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Add Product</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>

                        <div id="formAlert" class="mt-3"></div>


                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                        <script>
                            $('#productForm').on('submit', function (e) {
                                e.preventDefault();

                                // Clear previous error messages
                                $('small.text-danger').html('');
                                $('#formAlert').html('');

                                let formData = new FormData(this);

                                $.ajax({
                                    url: "{{ route('products.store') }}",
                                    type: "POST",
                                    data: formData,
                                    processData: false,
                                    contentType: false,
                                    headers: {
                                        'X-CSRF-TOKEN': $('input[name="_token"]').val()
                                    },
                                    success: function (response) {
                                        $('#formAlert').html(`<div class="alert alert-success">${response.message}</div>`);
                                        $('#productForm')[0].reset();
                                    },
                                    error: function (xhr) {
                                        if (xhr.status === 422) {
                                            let errors = xhr.responseJSON.errors;
                                            $.each(errors, function (field, messages) {
                                                $(`.error-${field}`).html(messages[0]);
                                            });
                                        } else {
                                            $('#formAlert').html(`<div class="alert alert-danger">Something went wrong.</div>`);
                                        }
                                    }
                                });
                            });
                        </script>



                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
        <!-- Bootstrap CSS -->
    </div>
      </div>
    </div>
    <!-- Wrapper End-->
   @endsection
