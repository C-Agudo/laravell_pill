@extends('template')
    <body>
    @section('content')
        <div class="flex-center position-ref full-height">
            @if(session("message"))                
                <p id="alertId" class="alert alert-success">{{ "Message send correctly" }}</p>               
            @endif
            <h2>Contact</h2>
            <form action="/contact" method="post" class="form-group">
                {{ csrf_field() }}
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control"/>
                <br>
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control"/>
                <br>
                <label for="tel">Phone</label>
                <input type="tel" name="tel" class="form-control"/>
                <br>
                <label for="subject">Subject</label>
                <input type="text" name="subject" class="form-control"/>
                <br>
                <label for="consult">Consult</label>
                <textarea name="consult" id="" cols="30" rows="10" minlength="55" placeholder="Write here your consult" class="form-control"></textarea>
                <br>
                <input type="submit" value="Send" class="btn btn-outline-secondary btn-lg btn-block">
            </form>
        </div>
    @stop
    <script src="{{ asset('js/setTimeOut.js') }}"></script>
    </body>
</html>