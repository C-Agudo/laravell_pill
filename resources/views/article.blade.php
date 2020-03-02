@extends('template')
    
    <body>
        @section('content')
        <div class="flex-center position-ref full-height">
        @foreach($item as $variable)
            <h3>{{ $variable->title }}</h3>
            <p>{{ $variable->summary }}</p>
            <div>{{ $variable->content }}</div>
            <a href="/articles"><button class="btn m-2">Go Back</button></a>
        @endforeach     
        </div>
        @stop
    </body>
    