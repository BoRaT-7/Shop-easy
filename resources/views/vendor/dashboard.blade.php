
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Dashboard | ShopEase</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-slate-100">

    <nav class="flex items-center justify-between bg-white px-6 py-4 shadow-sm">
        <h1 class="text-xl font-bold text-indigo-600">ShopEase Vendor</h1>

        <form action="{{ route('vendor.logout') }}" method="POST">
            @csrf
            <button class="rounded-lg bg-red-600 px-4 py-2 text-white hover:bg-red-700">
                Logout
            </button>
        </form>
    </nav>

    <main class="mx-auto max-w-6xl p-6">
        <h2 class="text-3xl font-bold text-slate-900">
            Welcome, {{ session('vendor_name') }}!
        </h2>

        <p class="mt-2 text-slate-600">
            Your vendor dashboard is ready.
        </p>

        <div class="mt-8 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
            <div class="rounded-xl bg-white p-6 shadow-sm">
                <h3 class="text-lg font-semibold">My Products</h3>
                <p class="mt-2 text-slate-500">Manage your store products.</p>
            </div>

            <div class="rounded-xl bg-white p-6 shadow-sm">
                <h3 class="text-lg font-semibold">My Orders</h3>
                <p class="mt-2 text-slate-500">View customer orders.</p>
            </div>

            <div class="rounded-xl bg-white p-6 shadow-sm">
                <h3 class="text-lg font-semibold">Store Profile</h3>
                <p class="mt-2 text-slate-500">Update your business information.</p>
            </div>
        </div>
    </main>

</body>
</html>
