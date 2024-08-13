@extends('layouts.app')

@section('title', 'Edit Customer')

@section('content')

<div class="row">
    <div class="col-12">
        <form action="{{route('customers.update', ['customer' => $customer])}}" method="POST">
            @method('PATCH')
            @include('customers.form');
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save Customer</button>
            </div>

        </form>
    </div>
</div>


@endsection
