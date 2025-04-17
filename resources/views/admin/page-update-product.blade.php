
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Dashboard | metro book shop</title>

      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset('admin_asset/images/favicon.ico') }}" />
      <link rel="stylesheet" href="{{ asset('admin_asset/css/backend-plugin.min.css') }}">
      <link rel="stylesheet" href="{{ asset('admin_asset/css/backend.css?v=1.0.0') }}">
      <link rel="stylesheet" href="{{ asset('admin_asset/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('admin_asset/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}">
      <link rel="stylesheet" href="{{ asset('admin_asset/vendor/remixicon/fonts/remixicon.css') }}">

    </head>
  <body class="  ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">



     <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Update Product</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Product Type *</label>
                                        <select name="type" class="selectpicker form-control" data-style="py-0">
                                            <option value="Standard" {{ $product->type == 'Standard' ? 'selected' : '' }}>Standard</option>
                                            <option value="Combo" {{ $product->type == 'Combo' ? 'selected' : '' }}>Combo</option>
                                            <option value="Digital" {{ $product->type == 'Digital' ? 'selected' : '' }}>Digital</option>
                                            <option value="Service" {{ $product->type == 'Service' ? 'selected' : '' }}>Service</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name *</label>
                                        <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Code *</label>
                                        <input type="text" name="code" class="form-control" value="{{ $product->code }}" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Category *</label>
                                        <select name="category" class="selectpicker form-control" data-style="py-0">
                                            <option value="Beauty" {{ $product->category == 'Beauty' ? 'selected' : '' }}>Beauty</option>
                                            <option value="Grocery" {{ $product->category == 'Grocery' ? 'selected' : '' }}>Grocery</option>
                                            <option value="Food" {{ $product->category == 'Food' ? 'selected' : '' }}>Food</option>
                                            <option value="Furniture" {{ $product->category == 'Furniture' ? 'selected' : '' }}>Furniture</option>
                                            <option value="Shoes" {{ $product->category == 'Shoes' ? 'selected' : '' }}>Shoes</option>
                                            <option value="Frames" {{ $product->category == 'Frames' ? 'selected' : '' }}>Frames</option>
                                            <option value="Jewellery" {{ $product->category == 'Jewellery' ? 'selected' : '' }}>Jewellery</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Cost *</label>
                                        <input type="text" name="cost" class="form-control" value="{{ $product->cost }}" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Price *</label>
                                        <input type="text" name="price" class="form-control" value="{{ $product->price }}" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tax Method *</label>
                                        <select name="tax_method" class="selectpicker form-control" data-style="py-0">
                                            <option value="Exclusive" {{ $product->tax_method == 'Exclusive' ? 'selected' : '' }}>Exclusive</option>
                                            <option value="Inclusive" {{ $product->tax_method == 'Inclusive' ? 'selected' : '' }}>Inclusive</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Quantity *</label>
                                        <input type="text" name="quantity" class="form-control" value="{{ $product->quantity }}" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" class="form-control image-file" name="image" accept="image/*">
                                        @if ($product->image)
                                            <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" width="100">
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description / Product Details</label>
                                        <textarea name="description" class="form-control" rows="4">{{ $product->description }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Update Product</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                            <a href="{{ route('products.list') }}" class="btn btn-secondary">Back to List</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->

    </div>
    </div>
    <!-- Wrapper End-->
    <footer class="iq-footer">
            <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="../backend/privacy-policy.html">Privacy Policy</a></li>
                                <li class="list-inline-item"><a href="../backend/terms-of-service.html">Terms of Use</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 text-right">
                            <span class="mr-1"><script>document.write(new Date().getFullYear())</script>©</span> <a href="#" class="">POS Dash</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

     <!-- Sidebar  -->
     <script src="{{ asset('admin_asset/js/backend-bundle.min.js') }}"></script>

     <!-- Table Treeview JavaScript -->
     <script src="{{ asset('admin_asset/js/table-treeview.js') }}"></script>

     <!-- Chart Custom JavaScript -->
     <script src="{{ asset('admin_asset/js/customizer.js') }}"></script>

     <!-- Chart Custom JavaScript -->
     <script async src="{{ asset('admin_asset/js/chart-custom.js') }}"></script>

     <!-- App JavaScript -->
     <script src="{{ asset('admin_asset/js/app.js') }}"></script>
   </body>
 </html>

