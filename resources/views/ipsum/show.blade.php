@extends('layouts.master')

@section('title') 
    Show  
@stop 

@section('content') 
    <h1>You requested {{ $request['paragraphs'] }} paragraphs!</h1>
@endsection
