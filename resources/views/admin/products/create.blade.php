@extends('admin.layouts.main')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Dashboard v3</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/categories" class="btn btn-primary">Back</a></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="container mt-2">

        <form action="/add-product" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group my-3">
                <label for="">Product Name</label>
                <input class="form-control" type="text" name="name" >
            </div>
            <div class="form-group my-3">
                <label for="">Product Image</label>
                <input class="form-control" type="file" name="product_image" >
            </div>
            <div class="form-group my-3">
                <label for="">Description</label>
                <input class="form-control" type="text" name="description" >
            </div>
            <div class="form-group my-3">
                <label for="">Actual Price</label>
                <input class="form-control" type="number" name="actual_price" >
            </div>
            <div class="form-group my-3">
                <label for="">Discount Price</label>
                <input class="form-control" type="number" name="discount_price" >
            </div>
            <div class="form-group">
                <label for="">Product Category</label>
                <select name="category_id" id="">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection