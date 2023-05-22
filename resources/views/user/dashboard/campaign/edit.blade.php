@extends('user.dashboard.layouts.main')
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
  <form action="/update_campaing/{{$campaign->id}}" method="POST" enctype="multipart/form-data">
    @csrf
      <div class="form-group mb-3">
        <label for="">Campaing Name</label>
        <input type="text" name="campaing_name" value="{{ $campaign->campaing_name}}" class="form-control">
      </div>
      <div class="form-group mb-3">
        <label for="">Campaing Image</label>
        <input type="file" class="form-control" name="campaing_image" value="{{ $campaign->campaing_image}}">
      </div>
   
        <div class="form-group">
            <label for="">Campaing Goals</label>
            <input type="number" class="form-control" name="campaing_goal" value="{{ $campaign->campaing_goal}}">
        </div>
        <div class="form-group">
            <label for="">Campaing Description</label>
            <textarea name="campaing_description" class="form-control" id="" cols="30" rows="10" value="">{{ $campaign->campaing_description}}</textarea>
        </div>
        <div class="form-group">
            <label for="">Campaing Category</label>
            <select name="category_id" id="">
                <option value="">Select Category</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Provide evidence</label>
            <input type="file" class="form-control" name="documents">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

  </form>
</div>
@endsection