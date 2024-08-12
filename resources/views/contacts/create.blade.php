@extends('layout')

@section('title', 'Contact Us')
   
@section('content')

<div class="row">
    <div class="col-12"><h1>Contact Us</h1></div>
</div>
<div class="row">
    <div class="col-12">
        <form action="{{route('contacts.store')}}" method="POST">
            @include('contacts.form');
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Send Email</button>
            </div>
            
        </form>
    </div>
</div>
@endsection
