
@extends('layouts.main')

@section('title', 'Become a Seller | ShopEase')

@section('content')
<div class="min-h-screen bg-slate-50 px-4 py-10 sm:px-6 lg:px-8">
    <div class="mx-auto grid max-w-6xl overflow-hidden rounded-3xl bg-white shadow-xl lg:grid-cols-2">

        {{-- Left Image Section --}}
        <div class="relative hidden min-h-[700px] bg-slate-900 lg:block">
            <img
                src="{{ asset('images/login-images/vendor-singup.png') }}"
                alt="Become a ShopEase seller"
                class="absolute inset-0 h-full w-full object-cover"
            >

            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-900/20 to-slate-900/10"></div>

            <div class="absolute bottom-0 left-0 right-0 p-10 text-white">
                <span class="inline-block rounded-full bg-amber-400 px-4 py-2 text-sm font-bold text-slate-900">
                    SELL WITH SHOPEASE
                </span>

                <h2 class="mt-5 text-4xl font-extrabold leading-tight">
                    Start Your Business Journey Today
                </h2>

                <p class="mt-4 max-w-md text-base leading-7 text-slate-200">
                    Create your seller account, showcase your products,
                    and grow your business with ShopEase.
                </p>
            </div>
        </div>

        {{-- Right Registration Form --}}
        <div class="flex items-center justify-center p-6 sm:p-10 lg:p-12">
            <div class="w-full max-w-md">
                <div class="">
                    <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">
                        Become a Seller
                    </h1>

                    <p class="mt-3 text-sm leading-6 text-slate-500">
                        Create your ShopEase seller account to get started.
                    </p>
                </div>

                {{-- Validation Errors --}}
                @if (session('success'))
    <div
        role="alert"
        class="mt-5 rounded-xl border border-green-200 bg-green-50 p-4 text-sm font-medium text-green-800"
    >
        <div class="flex items-center gap-2">
            <span class="text-lg">✓</span>
            <span>{{ session('success') }}</span>
        </div>
    </div>
@endif
                @if ($errors->any())
                    <div class="mt-5 rounded-lg border border-red-200 bg-red-50 p-4 text-sm text-red-700">
                        <ul class="list-inside list-disc space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{url('vendor/register')}}" method="POST" class="mt-8 space-y-5">
                    @csrf

                    {{-- Full Name --}}
                    <div>
                        <label for="name" class="mb-2 block text-sm font-semibold text-slate-700">
                            Full Name
                        </label>

                        <input
                            type="text"
                            id="full_name"
                            name="full_name"
                            value="{{ old('name') }}"
                            placeholder="Enter your full name"
                            autocomplete="name"
                            required
                            class="w-full rounded-xl border border-slate-300 px-4 py-3 outline-none transition focus:border-amber-500 focus:ring-4 focus:ring-amber-100"
                        >
                    </div>

                    {{-- Email --}}
                    <div>
                        <label for="email" class="mb-2 block text-sm font-semibold text-slate-700">
                            Email Address
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="you@example.com"
                            autocomplete="email"
                            required
                            class="w-full rounded-xl border border-slate-300 px-4 py-3 outline-none transition focus:border-amber-500 focus:ring-4 focus:ring-amber-100"
                        >
                    </div>

                    {{-- Phone --}}
                    <div>
                        <label for="phone" class="mb-2 block text-sm font-semibold text-slate-700">
                            Phone Number
                        </label>

                        <input
                            type="tel"
                            id="phone"
                            name="phone"
                            value="{{ old('phone') }}"
                            placeholder="Enter your phone number"
                            autocomplete="tel"
                            class="w-full rounded-xl border border-slate-300 px-4 py-3 outline-none transition focus:border-amber-500 focus:ring-4 focus:ring-amber-100"
                        >
                    </div>

                    {{-- Shop Name --}}
                    <div>
                        <label for="shop_name" class="mb-2 block text-sm font-semibold text-slate-700">
                            Shop Name
                        </label>

                        <input
                            type="text"
                            id="business_name"
                            name="business_name"
                            value="{{ old('shop_name') }}"
                            placeholder="Enter your shop name"
                            autocomplete="organization"
                            class="w-full rounded-xl border border-slate-300 px-4 py-3 outline-none transition focus:border-amber-500 focus:ring-4 focus:ring-amber-100"
                        >
                    </div>

                    {{-- Password --}}
                    <div>
                        <label for="password" class="mb-2 block text-sm font-semibold text-slate-700">
                            Password
                        </label>

                        <div class="relative">
                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="Create a password"
                                autocomplete="new-password"
                                minlength="8"
                                required
                                class="w-full rounded-xl border border-slate-300 px-4 py-3 pr-20 outline-none transition focus:border-amber-500 focus:ring-4 focus:ring-amber-100"
                            >

                            <button
                                type="button"
                                onclick="togglePassword('password', this)"
                                class="absolute inset-y-0 right-3 my-auto h-fit text-sm font-semibold text-amber-600 hover:text-amber-700"
                                aria-label="Show password"
                            >
                                Show
                            </button>
                        </div>
                    </div>

                    {{-- Confirm Password --}}
                    <div>
                        <label for="password_confirmation" class="mb-2 block text-sm font-semibold text-slate-700">
                            Confirm Password
                        </label>

                        <div class="relative">
                            <input
                                type="password"
                                id="password_confirmation"
                                name="password_confirmation"
                                placeholder="Confirm your password"
                                autocomplete="new-password"
                                minlength="8"
                                required
                                class="w-full rounded-xl border border-slate-300 px-4 py-3 pr-20 outline-none transition focus:border-amber-500 focus:ring-4 focus:ring-amber-100"
                            >

                            <button
                                type="button"
                                onclick="togglePassword('password_confirmation', this)"
                                class="absolute inset-y-0 right-3 my-auto h-fit text-sm font-semibold text-amber-600 hover:text-amber-700"
                                aria-label="Show confirm password"
                            >
                                Show
                            </button>
                        </div>
                    </div>

                    {{-- Submit --}}
                    <button
                        type="submit"
                        class="w-full rounded-xl bg-slate-900 px-5 py-3.5 font-bold text-white shadow-md transition hover:bg-amber-400 hover:text-slate-950 focus:outline-none focus:ring-4 focus:ring-amber-200"
                    >
                        Create Seller Account
                    </button>
                </form>

                <p class="mt-6 text-center text-sm text-slate-600">
                    Already have an account?
                    <a href="/vendor/login" class="font-bold text-amber-600 hover:underline">
                        Login
                    </a>
                </p>

                <p class="mt-6 text-center text-xs leading-5 text-slate-400">
                    By creating an account, you agree to follow ShopEase's seller terms and policies.
                </p>
            </div>
        </div>
    </div>
</div>

{{-- Show / Hide Password --}}
<script>
    function togglePassword(inputId, button) {
        const input = document.getElementById(inputId);

        if (input.type === 'password') {
            input.type = 'text';
            button.textContent = 'Hide';
            button.setAttribute('aria-label', 'Hide password');
        } else {
            input.type = 'password';
            button.textContent = 'Show';
            button.setAttribute('aria-label', 'Show password');
        }
    }
</script>
@endsection
