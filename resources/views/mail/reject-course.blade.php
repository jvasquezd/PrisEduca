<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="font-sans antialiased">
    <h1 style="color:rgb(241, 76, 76)"><b>Oh no!</b></h1>
    <p>Tu curso <b>{{ $course->title }}</b> ha sido rechazado</p>
    <hr>
    <h3>Details:</h3>
    <p>{!! $course->observation->body !!}</p>
</body>
</html>
