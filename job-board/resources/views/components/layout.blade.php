<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel job board</title>
    @vite('resources/css/app.css')
</head>

<body class="text-slate-700 bg-slate-200">
    <div class="mx-auto pt-10 max-w-2xl ">
        {{ $slot }}
    </div>
</body>

</html>
