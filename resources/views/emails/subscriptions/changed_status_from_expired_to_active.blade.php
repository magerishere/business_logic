<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Business Logic</title>
</head>
<body style="padding: 16px">
<h1> Expired Subscription </h1>

Subscription with id: <strong>{{$subscription->id}}</strong> for user <strong>{{$subscription->user->email}}</strong>
in market <strong>{{$subscription->market->value}}</strong> with price <strong>{{$subscription->price}}</strong>
and type of <strong>{{$subscription->type->value}}</strong> has been expired at <strong>{{$subscription->expire_at}}</strong>.
<br>
Thanks,<br>
{{ config('app.name') }}
</body>
</html>
