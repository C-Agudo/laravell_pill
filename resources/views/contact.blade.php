@extends('template')
    <body>
    @section('content')
        <div class="flex-center position-ref full-height">
            <h2>Contact</h2>
            <form action="/contact" method="post">
                {{ csrf_field() }}
                <label for="name">Name</label>
                <input type="text" name="name" />

                <label for="email">Email</label>
                <input type="email" name="email" />

                <label for="tel">Phone</label>
                <input type="tel" name="tel" />

                <label for="consult">Consult</label>
                <textarea name="consult" id="" cols="30" rows="10" minlength="55" placeholder="Write here your consult"></textarea>

                <input type="submit" value="Send">
            </form>
        </div>
    @stop
    </body>
</html>