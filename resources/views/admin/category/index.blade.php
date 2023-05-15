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
          <li class="breadcrumb-item"><a href="/create_category" class="btn btn-primary">Add Category</a></li>
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
                <th>Category Name</th>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->category_name}}</td>
                    <td><a href="/edit_category/{{$category->id}}" class="btn btn-sm ms-1 btn-primary">Edit</a>
                    <a href="/delete_category/{{$category->id}}" class="btn btn-sm ms-1 btn-danger">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection