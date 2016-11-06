@extends('layouts.master')

@section('title') 
    P3 Home  
@stop 

@section('content') 
    <h1> Developer's Best Friend </h1> 
    
    <h2><a href="/ipsum">Lorem Ipsum Generator</a></h2>
    <blockquote>
    In publishing and graphic design, lorem ipsum is a placeholder text commonly used to demonstrate the graphic elements of a document or visual presentation. 
    By replacing the distraction of meaningful content with filler text of scrambled Latin it allows viewers to focus on graphical elements such as font, typography, and layout.
    </blockquote>


    <h2><a href="/usergen">Random User Generator</a></h2>
    <p>Create random user data for your applications. Like Lorem Ipsum, but for people.</p>
@endsection
