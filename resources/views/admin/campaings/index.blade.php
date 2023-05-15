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
                    <li class="breadcrumb-item"><a href="/create_campaign" class="btn btn-primary">Add Campaign</a></li>
                
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
@if (session('status'))
    <h6 style="font-size:18px;" class="alert alert-success">{{ session('status') }}</h6>
@endif

<div class="container">
    <table class="table">
        <thead>
            <th>Campaing Name</th>
            <th>Campaing Goal</th>
            <th>Campaing Category</th>
            <th>Campaing Total Amount Collected</th>
            <th>ACtion</th>
        </thead>

        <tbody>
            @foreach($campaings as $campaing)
            <tr>
                <td>{{$campaing->campaing_name}}</td>
                <td>{{$campaing->campaing_goal}}</td>
                <td>{{$campaing->category['category_name']}}</td>
                <td>{{$campaing->campaing_total_amount_collected}}</td>
                <td><a href="/edit_campaing/{{$campaing->id}}">Edit</a> 
                <a href="/delete_campaign/{{$campaing->id}}">Delete</a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection