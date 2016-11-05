@extends('layouts.master')

@section('title') 
    Show  
@stop 

@section('content') 

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



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
