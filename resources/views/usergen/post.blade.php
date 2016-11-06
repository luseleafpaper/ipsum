@extends('layouts.master')

@section('title') 
    P3 UserGen  
@stop 

@section('content') 

    <h1>You requested {{ $request['number'] }} users!</h1>

    @foreach($request["users"] as $user)
        {{$user["name"]}}<br>
        @if( !empty($request["birthday"])) 
            {{$user["birthday"]}}<br>
        @endif 
        @if( !empty($request["profile"])) 
            {{$user["profile"]}}<br><br>
        @endif 
    @endforeach 

@endsection
