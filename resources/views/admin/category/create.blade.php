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

        <form action="/add_category" method="post">
            @csrf
            <div class="form-group my-3">
                <label for="">Category Name</label>
                <input class="form-control" type="text" name="category_name" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection