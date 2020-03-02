@extends('template')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="/newArticle" method="post" class="form-group">
                        {{ csrf_field() }}
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control"/>
                        <br>
                        <label for="summary">Summary</label>
                        <input type="text" name="summary" class="form-control"/>
                        <br>
                        <label for="content">Content</label>
                        <textarea name="content" cols="30" rows="10" minlength="55" placeholder="Write article..." class="form-control"></textarea>
                        <br>
                        <input type="submit" value="Save" class="btn btn-outline-secondary btn-lg btn-block">
                    </form>
                </div>


            </div>
        </div>
        @foreach($items as $variables)
            <div class="raw m-3">
                <a href='/articles/{{ $variables->slug}}'><h3>{{ $variables->title }}</h3></a>
                <p>{{ $variables->summary }}</p>
                <div>{{ $variables->content }}</div>       
            </div>                       
        @endforeach
        {{ $items->links() }}
    </div>
</div>
@stop