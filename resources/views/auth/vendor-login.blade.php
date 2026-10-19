
@extends('layouts.main')

@section('title', 'Vendor Sign In | ShopEase')

@section('content')
<div class="relative flex min-h-[85vh] items-center justify-center overflow-hidden bg-slate-50 px-4 py-12">

    {{-- Background decorations --}}
    <div class="pointer-events-none absolute -left-24 -top-24 h-72 w-72 rounded-full bg-indigo-200/40 blur-3xl"></div>
    <div class="pointer-events-none absolute -bottom-24 -right-24 h-72 w-72 rounded-full bg-violet-200/40 blur-3xl"></div>

    <div class="relative grid w-full max-w-5xl overflow-hidden rounded-3xl bg-white shadow-2xl shadow-indigo-100/60 md:grid-cols-2">

        {{-- Left: Branding panel --}}
        <div class="relative hidden flex-col justify-between overflow-hidden bg-gradient-to-br from-indigo-700 via-indigo-600 to-violet-700 p-10 text-white md:flex">

            <div class="absolute -right-16 top-24 h-56 w-56 rounded-full border border-white/10"></div>
            <div class="absolute -right-8 top-32 h-40 w-40 rounded-full border border-white/10"></div>

            <a href="{{ route('home') }}" class="relative flex items-center gap-3">
                <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-white/15 text-2xl">
                    🛍️
                </span>
                <span class="text-2xl font-extrabold tracking-tight">ShopEase</span>
            </a>

            <div class="relative my-10">
                <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-2 text-sm font-medium ring-1 ring-white/20">
                    ✨ Seller Center
                </span>

                <h1 class="mt-6 text-4xl font-extrabold leading-tight">
                    Grow your business with ShopEase.
                </h1>

                <p class="mt-5 leading-7 text-indigo-100">
                    Manage your store, organize your products, and keep track of your orders—all in one place.
                </p>

                <div class="mt-8 space-y-4 text-sm text-indigo-50">
                    <p>✓ &nbsp; Manage your product listings</p>
                    <p>✓ &nbsp; Track customer orders</p>
                    <p>✓ &nbsp; Build your online business</p>
                </div>
            </div>

            <p class="relative text-sm text-indigo-200">
                Your business journey starts here.
            </p>
        </div>

        {{-- Right: Login form --}}
        <div class="p-6 sm:p-10 lg:p-12">

            {{-- Mobile branding --}}
            <a href="{{ route('home') }}" class="mb-8 flex items-center justify-center gap-2 md:hidden">
                <span class="text-3xl">🛍️</span>
                <span class="text-2xl font-extrabold text-indigo-700">ShopEase</span>
            </a>

            <div class="mb-8">
                <span class="text-sm font-bold uppercase tracking-[0.2em] text-indigo-600">
                    Welcome back
                </span>

                <h2 class="mt-3 text-3xl font-extrabold tracking-tight text-slate-900">
                    Vendor Sign In
                </h2>

                <p class="mt-3 text-sm leading-6 text-slate-500">
                    Enter your account details to access your seller dashboard.
                </p>
            </div>

            {{-- Validation errors --}}
            @if ($errors->any())
                <div role="alert" class="mb-6 rounded-xl border border-red-200 bg-red-50 p-4 text-sm text-red-700">
                    <p class="font-semibold">Unable to sign in</p>
                    <ul class="mt-2 list-inside list-disc space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('vendor.login.submit') }}" method="POST" class="space-y-5">
                @csrf

                {{-- Email --}}
                <div>
                    <label for="email" class="mb-2 block text-sm font-semibold text-slate-700">
                        Email address
                    </label>

                    <div class="relative">
                        <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                            ✉
                        </span>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autocomplete="email"
                            placeholder="you@example.com"
                            class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3.5 pl-11 pr-4 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-indigo-500 focus:bg-white focus:ring-4 focus:ring-indigo-100"
                        >
                    </div>
                </div>

                {{-- Password --}}
                <div>
                    <div class="mb-2 flex items-center justify-between gap-3">
                        <label for="password" class="text-sm font-semibold text-slate-700">
                            Password
                        </label>
                    </div>

                    <div class="relative">
                        <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                            🔒
                        </span>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            required
                            autocomplete="current-password"
                            placeholder="Enter your password"
                            class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3.5 pl-11 pr-20 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-indigo-500 focus:bg-white focus:ring-4 focus:ring-indigo-100"
                        >

                        <button
                            type="button"
                            id="togglePassword"
                            class="absolute inset-y-0 right-0 px-4 text-sm font-semibold text-indigo-600 hover:text-indigo-800"
                            aria-label="Show password"
                            aria-pressed="false"
                        >
                            Show
                        </button>
                    </div>
                </div>

                {{-- Submit --}}
                <button
                    type="submit"
                    class="flex w-full items-center justify-center gap-2 rounded-xl bg-indigo-600 px-5 py-3.5 font-bold text-white shadow-lg shadow-indigo-200 transition duration-200 hover:-translate-y-0.5 hover:bg-indigo-700 hover:shadow-indigo-300 focus:outline-none focus:ring-4 focus:ring-indigo-200"
                >
                    Sign In
                    <span aria-hidden="true">→</span>
                </button>
            </form>

            <div class="my-7 flex items-center gap-4">
                <div class="h-px flex-1 bg-slate-200"></div>
                <span class="text-xs font-medium uppercase tracking-wider text-slate-400">
                    New to ShopEase?
                </span>
                <div class="h-px flex-1 bg-slate-200"></div>
            </div>

            <p class="text-center text-sm text-slate-600">
                Don't have a vendor account?
                <a
                    href="{{ route('vendor.register') }}"
                    class="font-bold text-indigo-600 hover:text-indigo-800 hover:underline"
                >
                    Create account
                </a>
            </p>

            <p class="mt-8 text-center text-xs leading-5 text-slate-400">
                By signing in, you agree to follow ShopEase's seller guidelines.
            </p>
        </div>
    </div>
</div>

{{-- Show / hide password --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const passwordInput = document.getElementById('password');
        const toggleButton = document.getElementById('togglePassword');

        if (passwordInput && toggleButton) {
            toggleButton.addEventListener('click', function () {
                const isHidden = passwordInput.type === 'password';

                passwordInput.type = isHidden ? 'text' : 'password';
                toggleButton.textContent = isHidden ? 'Hide' : 'Show';
                toggleButton.setAttribute('aria-pressed', String(isHidden));
                toggleButton.setAttribute(
                    'aria-label',
                    isHidden ? 'Hide password' : 'Show password'
                );
            });
        }
    });
</script>
@endsection
