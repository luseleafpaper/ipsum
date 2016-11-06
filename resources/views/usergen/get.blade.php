@extends('layouts.master')

@section('title')
    P3 UserGen
@stop

@section('content') 
    <h1>Generate some random users!</h1>

    <form method='POST' action='/usergen'>

        {{ csrf_field() }}

        How many users do you want? <br> 
        <input type='number' name='number' value=3>
        <br> 
        Include...
        <br>
        <input checked="checked" name="birthday" type="checkbox">
        <label for="birthday">Birthday</label>        <br>
        
        <input checked="checked" name="profile" type="checkbox">
        <label for="profile">Profile</label>        <br>
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
