@extends('layouts.app')

@section('title', 'Add New Customer')

@section('content')

<div class="row">
    <div class="col-12">
        <form action="{{route('customers.store')}}" method="POST">
            @include('customers.form');
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Customer</button>
            </div>

        </form>
    </div>
</div>


@endsection
