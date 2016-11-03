@extends('layouts.master')

@section('title') 
    Index  
@stop 

@section('content') 
    <h1>Generate some random users!</h1>
    <form method='POST' action='/ipsum'>

        {{ csrf_field() }}

        How many users do you want? <br> 
        <input type='number' name='number' value='3'>
        <br> 
        <input type='submit' value='Generate!'> 

        @if(count($errors) > 0)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

    </form>
@endsection
