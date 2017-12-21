<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1>我的通知</h1>
        <ul>
            @foreach(Auth::user()->unreadNotifications as $notification)
                @include('notification.'.snake_case(class_basename($notification->type)) )
            @endforeach
        </ul>
        <form action="/user/notification" method="POST" accept-charset="UTF-8">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit">標誌已讀</button>
        </form>
    </body>
</html>
