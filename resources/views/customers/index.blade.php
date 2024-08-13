@extends('layouts.app')

@section('title', 'Customers')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Customers</h1>
    </div>
    <div class="col-12">
        <a class="btn btn-secondary" href="{{route('customers.create')}}">Add New Customer</a>
    </div>
</div>
<hr>
@foreach($customers as $customer)
    <div class="row">
        <div class="col-2">
            {{$customer->id}}
        </div>
        <div class="col-4">
            <a href="{{route('customers.show', ['customer' => $customer])}}">{{$customer->name}}</a>
        </div>
        <div class="col-4">
            {{$customer->email}}
        </div>
        <div class="col-2">
            {{$customer->active}}
        </div>
    </div>
@endforeach

@endsection
