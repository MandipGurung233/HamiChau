@extends('admin.layouts.main')
@section('content')
<table class="table mt-4">
            <thead>
            <th>ID</th>
                <th>Subscription</th>
            </thead>
            <tbody>
                @foreach($emails as $email)
                <tr>
                    <td>{{$email->id}}</td>
                    <td>{{$email->email}}</td>
                    <td>
                    <a href="" class="btn btn-sm ms-1 btn-danger">Remove</a></td>
                </tr>
                @endforeach
            </tbody>
</table>
@endsection