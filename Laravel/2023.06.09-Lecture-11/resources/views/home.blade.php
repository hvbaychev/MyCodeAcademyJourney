<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Изпращане на електронна поща</title>

    </head>
    <body>
        <center>
        <p>Изпращане на електронна поща</p>



        <form action="{{route('send')}}" method="POST">
        @csrf
        @method('POST')
            <div>

                    @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                <label for="name">Your name : </label>
                <input type="text" id="name" name="name" value="{{ old('name') }}">
                <span>@error('name') {{$message}} @enderror</span>
            </div>
            <div>
                <label for="phone">Your phone : </label>
                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}">
                <span>@error('phone') {{$message}} @enderror</span>
            </div>
            <div>
                <label for="email">Send email to :</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}">
                <span>@error('email') {{$message}} @enderror</span>
            </div>
            <div>
                <label for="message">Text :</label>
                <textarea id="message" name="message" rows="5" value="{{ old('message') }}"></textarea>
                <span>@error('message') {{$message}} @enderror</span>
            </div>
            <div>
                <button type="submit">Изпрати</button>
            </div>
        </form>

        </center>
    </body>
</html>
