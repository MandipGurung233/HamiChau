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
          <li class="breadcrumb-item"><a href="/create-product" class="btn btn-primary">Add Product</a></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
@if (session('status'))
    <h6 style="font-size:18px;" class="alert alert-success">{{ session('status') }}</h6>
@endif
<table class="table mt-4">
            <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Description</th>
            <th>actual-price</th>
            <th>discount-price</th>
            <th>Category</th>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->product_image}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->actual_price}}</td>
                    <td>{{$product->discount_price}}</td>
                    <td>{{$product->category['category_name']}}</td>
                    <td><a href="/edit-product/{{$product->id}}" class="btn btn-sm ms-1 btn-primary">Edit</a>
                    <a href="/delete-product/{{$product->id}}" class="btn btn-sm ms-1 btn-danger">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection