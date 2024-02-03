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
                    <a href="{{ route('my-job-applications.index') }}">
                        {{ auth()->user()->name ?? 'Anon' }}:  Applications
                    </a>
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

        @if(session('success'))
            <div role="alert" class="my-8 rounded-md border-l-4 border-green-300 bg-green-100 p-4 text-green-700 opacity-75">
                <p class="font-bold">Success!</p>
                <p>{{ session('success') }}</p>
            </div>
        @endif
        @if(session('error'))
            <div role="alert" class="my-8 rounded-md border-l-4 border-red-300 bg-red-100 p-4 text-red-700 opacity-75">
                <p class="font-bold">Error!</p>
                <p>{{ session('error') }}</p>
            </div>
        @endif

        {{ $slot }}
    </div>
</body>

</html>
