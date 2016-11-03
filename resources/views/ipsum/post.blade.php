@extends('layouts.master')

@section('title') 
    Show  
@stop 

@section('content') 
    <h1>You requested {{ $request['number'] }} paragraphs!</h1>
@endsection
