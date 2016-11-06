@extends('layouts.master')

@section('title') 
    P3 Ipsum  
@stop 

@section('content') 
    <h1>You requested {{ $request['number'] }} paragraphs!</h1>
    
    @foreach($request["paragraphs"] as $paragraph)  
        {{$paragraph}}.<br><br> 
    @endforeach 
    
@endsection
