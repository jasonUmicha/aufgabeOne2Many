<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>

<body class="bg-gradient-to-r from-gray-100 to-gray-200">
<div class="shadow py-10 m-auto text-blue-500 font-semibold ">
    <nav>
        <a class="px-6 py-10 shadow hover:text-gray-500 " href="/fahrer">Fahrer</a>
        <a class="px-6 py-10 shadow hover:text-gray-500" href="/fahrten">Fahrten</a>
    </nav>
</div>
@yield('content')
</body>
</html>
