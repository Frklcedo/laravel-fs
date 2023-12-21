<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel job board</title>


    {{-- @vite('resources/css/app.css') --}}
    {{-- @vite('resources/js/app.js') --}}

    @vite([ 'resources/css/app.css', 'resources/js/app.js' ])
</head>

<body class="text-slate-700 bg-gradient-to-r from-indigo-100 from-10% via-sky-100 via-30% to-emerald-100 to-90%">
    <div class="mx-auto pt-10 max-w-2xl ">
        {{-- auth()->user()->name ?? 'Guest' --}}
        <nav class="mb-8 flex justify-between items-center text-lg font-medium">
            <ul class="flex space-x-2">
                <li>
                    <a href="{{ route('jobs.index') }}">Home</a>
                </li>
            </ul>
            <ul class="flex space-x-2">
                @auth
                <li>
                    {{ auth()->user->name ?? 'Anon' }}
                </li>
                <li>
                    <form method="POST" action="{{ route('auth.destroy') }}">
                        @csrf
                        @method('DELETE')
                        <button>Logout</button>
                    </form>
                </li>
                @else
                <li>
                    <a href="{{ route('login') }}">Sign in</a>
                </li>
                @endauth
            </ul>
        </nav>
        {{ $slot }}
    </div>
</body>

</html>
