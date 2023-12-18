<x-layout>
    <h1 class="my-16 text-center text-4xl font-medium text-slate-600">Sign in to your account</h1>
    <x-card class="py-8 px-16">
        <form method="" id="" action="{{ route('auth.store') }}" method="POST">
            @csrf

            <div class="mb-8">
                <label class="block mb-2 text-sm text-slate-900 font-medium" for="email">E-mail</label>
                <x-text-input type="email" name="email" />
            </div>

            <div class="mb-8">
                <label class="block mb-2 text-sm text-slate-900 font-medium" for="password">Password</label>
                <x-text-input type="password" name="password" />
            </div>

            <div class="mb-8 flex justify-between items-center text-sm font-medium">
                <div>
                    <div class="flex items-center space-x-2">
                        <input type="checkbox" name="remember" class="rounded-sm border border-slate-400" />
                        <label for="remember">Remember me</label>
                    </div>
                </div>
                <div>
                    <a href="#" class="text-indigo-500 hover:underline">Forgot password?</a>
                </div>
            </div>

            <x-button class="w-full bg-green-50">Login</x-button>
        </form>
    </x-card>
</x-layout>
