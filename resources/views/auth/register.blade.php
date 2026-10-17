
@extends('layouts.main')

@section('title', 'Become a Seller | ShopEase')

@section('content')

<div class="flex min-h-[75vh] items-center justify-center bg-slate-50 px-4 py-12">

    <div class="w-full max-w-lg rounded-2xl border border-slate-200 bg-white p-8 shadow-lg">

        <h1 class="text-center text-3xl font-bold text-slate-900">
            Become a Seller
        </h1>

        <p class="mt-2 text-center text-slate-500">
            Create your ShopEase seller account.
        </p>

        <form action="#" method="POST" class="mt-8 space-y-5">
            @csrf

            <div>
                <label for="name" class="mb-2 block text-sm font-medium text-slate-700">
                    Full Name
                </label>
                <input type="text" id="name" name="name"
                       placeholder="Enter your full name"
                       required
                       class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-100">
            </div>

            <div>
                <label for="email" class="mb-2 block text-sm font-medium text-slate-700">
                    Email Address
                </label>
                <input type="email" id="email" name="email"
                       placeholder="Enter your email"
                       required
                       class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-100">
            </div>

            <div>
                <label for="phone" class="mb-2 block text-sm font-medium text-slate-700">
                    Phone Number
                </label>
                <input type="tel" id="phone" name="phone"
                       placeholder="Enter your phone number"
                       class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-100">
            </div>

            <div>
                <label for="password" class="mb-2 block text-sm font-medium text-slate-700">
                    Password
                </label>
                <input type="password" id="password" name="password"
                       placeholder="Create a password"
                       required minlength="8"
                       class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-amber-500 focus:ring-2 focus:ring-amber-100">
            </div>

            <button type="submit"
                    class="w-full rounded-lg bg-slate-900 px-4 py-3 font-semibold text-white transition hover:bg-amber-400 hover:text-slate-900">
                Create Seller Account
            </button>
        </form>

        <p class="mt-6 text-center text-sm text-slate-600">
            Already have an account?
            <a href="/login" class="font-semibold text-amber-600 hover:underline">
                Login
            </a>
        </p>

    </div>
</div>

@endsection
