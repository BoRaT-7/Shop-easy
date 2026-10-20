@extends('layouts.main')

@section('title', 'Vendor Sign In | ShopEase')

@section('content')
<div class="relative flex min-h-[85vh] items-center justify-center overflow-hidden bg-slate-50 px-4 py-12">

    {{-- Background Decorations --}}
    <div class="pointer-events-none absolute -left-24 -top-24 h-72 w-72 rounded-full bg-indigo-200/40 blur-3xl"></div>
    <div class="pointer-events-none absolute -bottom-24 -right-24 h-72 w-72 rounded-full bg-violet-200/40 blur-3xl"></div>

    <div class="relative grid w-full max-w-5xl overflow-hidden rounded-3xl bg-white shadow-2xl shadow-indigo-100/70 md:grid-cols-2">

        {{-- Left Branding Panel --}}
        <div class="relative hidden flex-col justify-between overflow-hidden bg-gradient-to-br from-indigo-700 via-indigo-600 to-violet-700 p-10 text-white md:flex">

            <div class="absolute -right-16 -top-16 h-64 w-64 rounded-full border border-white/10"></div>
            <div class="absolute -bottom-24 -left-16 h-72 w-72 rounded-full border border-white/10"></div>

            <div class="relative z-10">
                <a href="{{ url('/') }}" class="inline-flex items-center gap-3">
                    <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-white/15 text-2xl shadow-lg backdrop-blur">
                        🛍️
                    </span>
                    <span class="text-2xl font-extrabold tracking-tight">
                        ShopEase
                    </span>
                </a>

                <div class="mt-20">
                    <span class="rounded-full border border-white/20 bg-white/10 px-4 py-2 text-xs font-semibold uppercase tracking-widest">
                        Seller Portal
                    </span>

                    <h2 class="mt-7 text-4xl font-extrabold leading-tight">
                        Your business.<br>
                        Your growth.<br>
                        <span class="text-indigo-200">Your success.</span>
                    </h2>

                    <p class="mt-5 max-w-sm text-sm leading-7 text-indigo-100">
                        Welcome back to ShopEase. Manage your store, showcase your products, and grow your business in one place.
                    </p>
                </div>
            </div>

            <div class="relative z-10 mt-12 rounded-2xl border border-white/15 bg-white/10 p-5 backdrop-blur-sm">
                <div class="flex items-center gap-4">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-white/15 text-2xl">
                        🚀
                    </div>
                    <div>
                        <p class="font-semibold">Ready to grow?</p>
                        <p class="mt-1 text-sm text-indigo-100">
                            Your seller journey continues here.
                        </p>
                    </div>
                </div>
            </div>

            <p class="relative z-10 mt-8 text-xs text-indigo-200">
                © {{ date('Y') }} ShopEase. All rights reserved.
            </p>
        </div>

        {{-- Right Login Panel --}}
        <div class="p-6 sm:p-10 lg:p-12">

            {{-- Mobile Branding --}}
            <a href="{{ url('/') }}" class="mb-8 flex items-center justify-center gap-2 md:hidden">
                <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-100 text-2xl">
                    🛍️
                </span>
                <span class="text-2xl font-extrabold tracking-tight text-slate-900">
                    Shop<span class="text-indigo-600">Ease</span>
                </span>
            </a>

            <div class="mb-8">
                <div class="mb-5 flex h-14 w-14 items-center justify-center rounded-2xl bg-indigo-50 text-3xl ring-1 ring-indigo-100">
                    👋
                </div>

                <p class="text-sm font-semibold uppercase tracking-widest text-indigo-600">
                    Vendor Account
                </p>

                <h1 class="mt-2 text-3xl font-extrabold tracking-tight text-slate-900">
                    Welcome back!
                </h1>

                <p class="mt-3 text-sm leading-6 text-slate-500">
                    Sign in to access your seller dashboard and manage your store.
                </p>
            </div>

            {{-- Error Message --}}
            @if (session('error'))
                <div role="alert" class="mb-5 flex gap-3 rounded-xl border border-red-200 bg-red-50 p-4 text-sm text-red-700">
                    <span class="text-lg">⚠️</span>
                    <p>{{ session('error') }}</p>
                </div>
            @endif

            {{-- Success Message --}}
            @if (session('success'))
                <div role="status" class="mb-5 flex gap-3 rounded-xl border border-emerald-200 bg-emerald-50 p-4 text-sm text-emerald-700">
                    <span class="text-lg">✅</span>
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            {{-- Validation Errors --}}
            @if ($errors->any())
                <div role="alert" class="mb-5 flex gap-3 rounded-xl border border-red-200 bg-red-50 p-4 text-sm text-red-700">
                    <span class="text-lg">❌</span>
                    <div>
                        <p class="font-semibold">Unable to sign in</p>
                        <p class="mt-1">{{ $errors->first() }}</p>
                    </div>
                </div>
            @endif

            {{-- Login Form: Logic Unchanged --}}
            <form action="{{ route('vendor.login.submit') }}"
                  method="POST"
                  class="space-y-5">

                @csrf

                {{-- Email --}}
                <div>
                    <label for="email" class="mb-2 block text-sm font-semibold text-slate-700">
                        Email Address
                    </label>

                    <div class="relative">
                        <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-lg">
                            ✉️
                        </span>

                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autocomplete="email"
                            placeholder="you@example.com"
                            class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3.5 pl-12 pr-4 text-sm text-slate-800 outline-none transition placeholder:text-slate-400 hover:border-slate-300 focus:border-indigo-500 focus:bg-white focus:ring-4 focus:ring-indigo-100"
                        >
                    </div>
                </div>

                {{-- Password --}}
                <div>
                    <div class="mb-2 flex items-center justify-between">
                        <label for="password" class="block text-sm font-semibold text-slate-700">
                            Password
                        </label>
                    </div>

                    <div class="relative">
                        <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-lg">
                            🔒
                        </span>

                        <input
                            id="password"
                            type="password"
                            name="password"
                            required
                            autocomplete="current-password"
                            placeholder="Enter your password"
                            class="w-full rounded-xl border border-slate-200 bg-slate-50 py-3.5 pl-12 pr-16 text-sm text-slate-800 outline-none transition placeholder:text-slate-400 hover:border-slate-300 focus:border-indigo-500 focus:bg-white focus:ring-4 focus:ring-indigo-100"
                        >

                        <button
                            type="button"
                            id="togglePassword"
                            aria-label="Show password"
                            aria-pressed="false"
                            class="absolute inset-y-0 right-0 rounded-r-xl px-4 text-xs font-semibold text-indigo-600 transition hover:text-indigo-800 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                        >
                            Show
                        </button>
                    </div>
                </div>

                {{-- Sign In Button --}}
                <button
                    type="submit"
                    class="group flex w-full items-center justify-center gap-2 rounded-xl bg-indigo-600 px-5 py-4 text-sm font-bold text-white shadow-lg shadow-indigo-200 transition duration-200 hover:-translate-y-0.5 hover:bg-indigo-700 hover:shadow-xl focus:outline-none focus:ring-4 focus:ring-indigo-200 active:translate-y-0"
                >
                    <span>Sign In to Your Account</span>
                    <span class="transition-transform group-hover:translate-x-1">→</span>
                </button>
            </form>

            {{-- Register Link --}}
            <div class="my-7 flex items-center gap-4">
                <div class="h-px flex-1 bg-slate-200"></div>
                <span class="text-xs font-medium text-slate-400">NEW TO SHOEASE?</span>
                <div class="h-px flex-1 bg-slate-200"></div>
            </div>

            <p class="text-center text-sm text-slate-600">
                Don't have a vendor account?
                <a href="{{ route('vendor.register') }}"
                   class="ml-1 font-bold text-indigo-600 transition hover:text-indigo-800 hover:underline">
                    Create account
                </a>
            </p>

            <p class="mt-8 flex items-center justify-center gap-2 text-xs text-slate-400">
                <span>🔐</span>
                Secure sign-in for ShopEase vendors
            </p>

        </div>
    </div>
</div>

{{-- Show / Hide Password: UI Only --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const passwordInput = document.getElementById('password');
        const toggleButton = document.getElementById('togglePassword');

        if (passwordInput && toggleButton) {
            toggleButton.addEventListener('click', function () {
                const isHidden = passwordInput.type === 'password';

                passwordInput.type = isHidden ? 'text' : 'password';
                toggleButton.textContent = isHidden ? 'Hide' : 'Show';
                toggleButton.setAttribute('aria-label', isHidden ? 'Hide password' : 'Show password');
                toggleButton.setAttribute('aria-pressed', String(isHidden));
            });
        }
    });
</script>
@endsection