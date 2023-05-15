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
          <li class="breadcrumb-item"><a href="#" class="btn btn-primary">Back</a></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->


<div class="container">
  <form action="/update_category/{{$category->id}}" method="POST">
    @csrf
    <div class="form-group mb-3">
      <label for="">Category_name</label>
      <input type="text" name="category_name" value="{{ $category->category_name}}" class="form-control">
    </div>
    <div class="form-group mb-3">
      <button type="submit" class="btn btn-primary">Update Book </button>
    </div>

  </form>
</div>


@endsection