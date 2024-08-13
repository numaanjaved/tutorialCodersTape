@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

<div class="row">
    <div class="col-12"><h1>Contact Us</h1></div>
</div>

<div class="row">
    <div class="col-12">
        @if(session()->has('message'))
            <div class="alert alert-primary" role="alert">
                {{session()->get('message')}}
            </div>
        @else
            @include('contacts.form');
        @endif



    </div>
</div>
@endsection
