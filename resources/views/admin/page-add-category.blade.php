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
                            <h4 class="card-title">Add category</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <h2 class="mb-3">Manage Categories</h2>

                            @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Image</label>
                                        <input type="file" class="form-control" name="image" accept="image/*">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Product Name *</label>
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label>Category *</label>
                                        <select name="category" class="form-control" required>
                                            <option>Beauty</option>
                                            <option>Grocery</option>
                                            <option>Food</option>
                                            <option>Furniture</option>
                                            <option>Shoes</option>
                                            <option>Frames</option>
                                            <option>Jewellery</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label>Sub Category *</label>
                                        <select name="sub_category" class="form-control" required>
                                            <option>Beauty</option>
                                            <option>Grocery</option>
                                            <option>Food</option>
                                            <option>Furniture</option>
                                            <option>Shoes</option>
                                            <option>Frames</option>
                                            <option>Jewellery</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label>Sub Category 2 *</label>
                                        <select name="sub_category2" class="form-control" required>
                                            <option>Beauty</option>
                                            <option>Grocery</option>
                                            <option>Food</option>
                                            <option>Furniture</option>
                                            <option>Shoes</option>
                                            <option>Frames</option>
                                            <option>Jewellery</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label>Code *</label>
                                        <input type="text" class="form-control" name="code" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-2">Add Category</button>
                            </form>

                            {{-- <h3 class="mt-5">Category List</h3>
                            <table class="table table-bordered">
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Sub Category</th>
                                    <th>Sub Category 2</th>
                                    <th>Code</th>
                                    <th>Actions</th>
                                </tr>
                                @foreach($categories as $category)
                                    <tr>
                                        <td><img src="{{ asset('storage/' . $category->image) }}" width="50"></td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->category }}</td>
                                        <td>{{ $category->sub_category }}</td>
                                        <td>{{ $category->sub_category2 }}</td>
                                        <td>{{ $category->code }}</td>
                                        <td>
                                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
      </div>
    </div>
    <!-- Wrapper End-->
   @endsection
