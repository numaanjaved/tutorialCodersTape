@extends('layouts.app')

@section('title', 'Customer Detail')

@section('content')

<div class="row">
    <div class="col-12">
        <h1>{{$customer->name}}</h1>
    </div>
    <div class="col-2">
        <a class="btn btn-secondary" href="{{route('customers.edit', ['customer' => $customer])}}">Edit Customer</a>
    </div>
    <div class="col-2">
        <form action="{{route('customers.destroy', ['customer' => $customer])}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-secondary">Delete</button>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <p><strong>Name: </strong>{{$customer->name}}</p>
        <p><strong>Email: </strong>{{$customer->email}}</p>
        <p><strong>Company: </strong>{{$customer->company->name}}</p>
    </div>
</div>
@endsection
