@extends('layouts.master')

@section('title') 
    Show  
@stop 

@section('content') 
    <h1>You requested {{ $request['number'] }} users, with {{ $request['int'] }} profile words!</h1>
@endsection
