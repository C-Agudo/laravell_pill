@extends('template')
    
    <body>
        @section('content')
        @foreach($items as $variables)
            <div class="raw m-3">
                <a href='/articles/{{ $variables->slug}}'><h3>{{ $variables->title }}</h3></a>
                <p>{{ $variables->summary }}</p>
                <div>{{ $variables->content }}</div>       
            </div>                       
        @endforeach
        {{ $items->links() }}
        
        @stop
    </body>
    