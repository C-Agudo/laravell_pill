@extends('template')
    
        @section('content')
        <div class="text-align-center">
            <h1 class="text-center">Welcome to {{ env('APP_NAME') }}</h1>
        </div>
        <example-component></example-component>
        @endsection
        
    