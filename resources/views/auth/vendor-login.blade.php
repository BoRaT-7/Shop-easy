
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Sign In | ShopEase</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-slate-100 flex items-center justify-center p-4">

    <div class="w-full max-w-md rounded-2xl bg-white p-8 shadow-lg">
        <h1 class="text-3xl font-bold text-slate-900 text-center">
            Vendor Sign In
        </h1>

        <p class="mt-2 text-center text-slate-500">
            Sign in to manage your ShopEase store.
        </p>

        @if ($errors->any())
            <div class="mt-5 rounded-lg bg-red-50 p-3 text-sm text-red-700">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('vendor.login.submit') }}"
              method="POST"
              class="mt-6 space-y-5">
            @csrf

            <div>
                <label for="email" class="mb-2 block font-medium text-slate-700">
                    Email Address
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autocomplete="email"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-indigo-500"
                    placeholder="vendor@example.com"
                >
            </div>

            <div>
                <label for="password" class="mb-2 block font-medium text-slate-700">
                    Password
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                    autocomplete="current-password"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-indigo-500"
                    placeholder="Enter your password"
                >
            </div>

            <button
                type="submit"
                class="w-full rounded-lg bg-indigo-600 py-3 font-semibold text-white transition hover:bg-indigo-700"
            >
                Sign In
            </button>
        </form>

        <p class="mt-6 text-center text-sm text-slate-600">
            Don't have a vendor account?
            <a href="{{ route('vendor.register') }}"
               class="font-semibold text-indigo-600 hover:underline">
                Register here
            </a>
        </p>
    </div>

</body>
</html>
