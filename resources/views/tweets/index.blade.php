<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PillTweets</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            PillTweets
        </div>
        @if ( $errors->count() > 0 )
            ...An error occured...
            @foreach( $errors->all() as $message )
                ...{{ $message }}...
            @endforeach
        @endif
        @foreach($tweets as $tweet)
            <div class="tweet">
                <p>{{\Illuminate\Support\Carbon::createFromTimeString($tweet->created_at)->format('d.m Y H:i:s')}}</p>
                <p>{{$tweet->text}}</p>
                <p>{!! $tweet->source !!}</p>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
