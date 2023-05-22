@extends('user.dashboard.layouts.main')
@section('content')
@if (session('status'))
    <h6 style="font-size:18px;" class="alert alert-success">{{ session('status') }}</h6>
@endif
<?php
$id = Auth::user()->id;
?>
<div class="container">
    <table class="table">
        <thead>
           
            <th>Name</th>
            <th>Unit price</th>
            <th>Quantity</th>
            <th>Product Name</th>
        </thead>

        <tbody>
            @foreach($details as $detail)
            @if($detail->user_id == $id)
            <tr>
                <td>{{$detail->user['name']}}</td>
                <td>{{$detail->unit_price}}</td>
                <td>{{$detail->quantity}}</td>
                <td>{{$detail->product['name']}}</td>
                <td><a href="/delete_cart/{{$detail->id}}">Delete</a></td>
            </tr>
            @endif
            @endforeach
            
        </tbody>
    </table>
</div>
@endsection