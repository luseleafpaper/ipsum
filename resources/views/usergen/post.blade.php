@extends('layouts.master')

@section('title') 
    Show  
@stop 

@section('content') 
    <h1>You requested {{ $request['number'] }} users!</h1>

    @foreach($request["users"] as $user)
        {{$user["name"]}}<br>
        {{$user["birthday"]}}<br>
        {{$user["profile"]}}<br><br>
    @endforeach 

@endsection
