<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    
<div class="min-h-screen bg-slate-100 text-slate-800">

    <div class="flex min-h-screen">

        {{-- Sidebar --}}
        <aside class="hidden w-64 shrink-0 flex-col bg-[#20272b] text-slate-300 md:flex">

            <a href="{{ route('vendor.dashboard') }}"
               class="flex h-16 items-center border-b border-white/10 px-6 text-xl font-extrabold tracking-wide text-white">
                🛍️ SHOP<span class="text-indigo-400">EASE</span>
            </a>

            <nav class="flex-1 space-y-1 px-3 py-5">

                <a href="{{ route('vendor.dashboard') }}"
                   class="flex items-center gap-3 rounded-lg bg-indigo-600 px-4 py-3 text-sm font-semibold text-white">
                    <span>📊</span> Dashboard
                </a>

                <a href="#add-product"
                   class="flex items-center gap-3 rounded-lg px-4 py-3 text-sm transition hover:bg-white/10 hover:text-white">
                    <span>📦</span> Products
                    <span class="ml-auto">⌄</span>
                </a>

                <a href="#orders"
                   class="flex items-center gap-3 rounded-lg px-4 py-3 text-sm transition hover:bg-white/10 hover:text-white">
                    <span>🛒</span> Orders
                </a>

                <a href="#customers"
                   class="flex items-center gap-3 rounded-lg px-4 py-3 text-sm transition hover:bg-white/10 hover:text-white">
                    <span>👥</span> Customers
                </a>

                <a href="#profile"
                   class="flex items-center gap-3 rounded-lg px-4 py-3 text-sm transition hover:bg-white/10 hover:text-white">
                    <span>⚙️</span> Store Profile
                </a>

            </nav>

            <div class="border-t border-white/10 p-4">
                <p class="text-xs text-slate-400">Logged in as</p>
                <p class="mt-1 truncate text-sm font-semibold text-white">
                    {{ session('vendor_name', 'Vendor') }}
                </p>

                <form action="{{ route('vendor.logout') }}" method="POST" class="mt-4">
                    @csrf
                    <button type="submit"
                            class="w-full rounded-lg border border-white/10 px-4 py-2 text-sm transition hover:bg-red-500/20 hover:text-red-300">
                        ↪ Logout
                    </button>
                </form>
            </div>
        </aside>

        {{-- Main Content --}}
        <div class="min-w-0 flex-1">

            {{-- Top Navigation --}}
            <header class="sticky top-0 z-20 flex min-h-16 flex-wrap items-center justify-between gap-4 border-b border-slate-200 bg-white px-4 py-3 shadow-sm sm:px-6">

                <div>
                    <p class="text-xs text-slate-500">Vendor Portal</p>
                    <h1 class="text-lg font-bold text-slate-800">Dashboard</h1>
                </div>

                <div class="flex items-center gap-3">
                    <form action="#" method="GET" class="hidden sm:flex">
                        <input type="search"
                               name="search"
                               placeholder="Search for..."
                               class="w-48 rounded-l-lg border border-slate-300 px-3 py-2 text-sm outline-none focus:border-indigo-500 lg:w-64">

                        <button type="submit"
                                class="rounded-r-lg bg-indigo-600 px-4 text-white transition hover:bg-indigo-700"
                                aria-label="Search">
                            🔍
                        </button>
                    </form>

                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-indigo-100 font-bold text-indigo-700">
                        {{ strtoupper(substr(session('vendor_name', 'V'), 0, 1)) }}
                    </div>
                </div>
            </header>

            <main class="p-4 sm:p-6 lg:p-8">

                {{-- Welcome --}}
                <div class="mb-6 flex flex-wrap items-center justify-between gap-4">
                    <div>
                        <h2 class="text-2xl font-extrabold text-slate-900">
                            Welcome, {{ session('vendor_name', 'Vendor') }}! 👋
                        </h2>
                        <p class="mt-1 text-sm text-slate-500">
                            Manage your store and add products to ShopEase.
                        </p>
                    </div>

                    <span class="inline-flex items-center gap-2 rounded-full bg-amber-50 px-4 py-2 text-xs font-semibold text-amber-700 ring-1 ring-amber-200">
                        <span>●</span> Vendor Panel
                    </span>
                </div>

                {{-- Summary Cards --}}
                <div class="mb-7 grid gap-4 sm:grid-cols-2 xl:grid-cols-3">

                    <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                        <div class="flex items-center justify-between">
                            <p class="text-sm font-medium text-slate-500">Total Products</p>
                            <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-50 text-xl">📦</span>
                        </div>
                        <p class="mt-4 text-3xl font-extrabold text-slate-900">0</p>
                        <p class="mt-1 text-xs text-slate-400">Products added to your store</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                        <div class="flex items-center justify-between">
                            <p class="text-sm font-medium text-slate-500">Total Orders</p>
                            <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-xl">🛒</span>
                        </div>
                        <p class="mt-4 text-3xl font-extrabold text-slate-900">0</p>
                        <p class="mt-1 text-xs text-slate-400">Customer orders received</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm sm:col-span-2 xl:col-span-1">
                        <div class="flex items-center justify-between">
                            <p class="text-sm font-medium text-slate-500">Store Status</p>
                            <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-amber-50 text-xl">🏪</span>
                        </div>
                        <p class="mt-4 text-2xl font-extrabold text-amber-600">Getting Started</p>
                        <p class="mt-1 text-xs text-slate-400">Add your first product below</p>
                    </div>

                </div>

                {{-- Add Product Form --}}
                <section id="add-product" class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

                    <div class="border-b border-slate-200 px-5 py-5 sm:px-7">
                        <div class="flex items-center gap-3">
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-50 text-xl">
                                ➕
                            </div>

                            <div>
                                <h3 class="text-lg font-bold text-slate-900">Add Product</h3>
                                <p class="mt-1 text-sm text-slate-500">
                                    Enter your product details below.
                                </p>
                            </div>
                        </div>
                    </div>

                    <form action="#" method="POST" enctype="multipart/form-data" class="p-5 sm:p-7">
                        @csrf

                        <div class="grid gap-8 lg:grid-cols-3">

                            {{-- Product Details --}}
                            <div class="space-y-5 lg:col-span-2">

                                <div>
                                    <label for="product_name" class="mb-2 block text-sm font-semibold text-slate-700">
                                        Product Name <span class="text-red-500">*</span>
                                    </label>

                                    <input id="product_name"
                                           type="text"
                                           name="product_name"
                                           placeholder="e.g. Premium Smart Watch"
                                           class="w-full rounded-xl border border-slate-300 px-4 py-3 text-sm outline-none transition placeholder:text-slate-400 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100">
                                </div>

                                <div>
                                    <label for="price" class="mb-2 block text-sm font-semibold text-slate-700">
                                        Price (৳) <span class="text-red-500">*</span>
                                    </label>

                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 flex items-center pl-4 font-semibold text-slate-500">৳</span>
                                        <input id="price"
                                               type="number"
                                               name="price"
                                               min="0"
                                               step="0.01"
                                               placeholder="1499.00"
                                               class="w-full rounded-xl border border-slate-300 py-3 pl-10 pr-4 text-sm outline-none transition placeholder:text-slate-400 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100">
                                    </div>
                                </div>

                                <div>
                                    <label for="category" class="mb-2 block text-sm font-semibold text-slate-700">
                                        Category <span class="text-red-500">*</span>
                                    </label>

                                    <select id="category"
                                            name="category"
                                            class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm text-slate-600 outline-none transition focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100">
                                        <option value="">Select Category</option>
                                        <option value="fashion">👕 Fashion</option>
                                        <option value="electronics">📱 Electronics</option>
                                        <option value="furniture">🪑 Furniture</option>
                                        <option value="grocery">🛒 Grocery</option>
                                        <option value="appliances">🏠 Home Appliances</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="quantity" class="mb-2 block text-sm font-semibold text-slate-700">
                                        Stock Quantity <span class="text-red-500">*</span>
                                    </label>

                                    <input id="quantity"
                                           type="number"
                                           name="quantity"
                                           min="0"
                                           placeholder="25 pcs"
                                           class="w-full rounded-xl border border-slate-300 px-4 py-3 text-sm outline-none transition placeholder:text-slate-400 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100">
                                </div>

                                <div>
                                    <label for="description" class="mb-2 block text-sm font-semibold text-slate-700">
                                        Product Description
                                    </label>

                                    <textarea id="description"
                                              name="description"
                                              rows="4"
                                              placeholder="Describe your product, features, and specifications..."
                                              class="w-full resize-y rounded-xl border border-slate-300 px-4 py-3 text-sm outline-none transition placeholder:text-slate-400 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100"></textarea>
                                </div>

                            </div>

                            {{-- Image Upload --}}
                            <div>
                                <label class="mb-2 block text-sm font-semibold text-slate-700">
                                    Product Image
                                </label>

                                <div class="rounded-2xl border-2 border-dashed border-slate-300 bg-slate-50 p-5 text-center transition hover:border-indigo-400">

                                    <div id="imagePreview"
                                         class="mx-auto flex h-36 w-36 items-center justify-center overflow-hidden rounded-2xl bg-white text-5xl shadow-sm ring-1 ring-slate-200">
                                        📷
                                    </div>

                                    <p class="mt-4 text-sm font-semibold text-slate-700">Upload product photo</p>
                                    <p class="mt-1 text-xs leading-5 text-slate-500">
                                        PNG, JPG or WEBP
                                    </p>

                                    <label for="product_image"
                                           class="mt-4 inline-flex cursor-pointer items-center justify-center rounded-lg bg-slate-900 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-indigo-600">
                                        📤 Choose Image
                                    </label>

                                    <input id="product_image"
                                           type="file"
                                           name="product_image"
                                           accept="image/png,image/jpeg,image/webp"
                                           class="sr-only">

                                    <p id="fileName" class="mt-3 break-all text-xs text-slate-500">
                                        No image selected
                                    </p>
                                </div>
                            </div>

                        </div>

                        {{-- Buttons --}}
                        <div class="mt-8 flex flex-wrap items-center justify-end gap-3 border-t border-slate-200 pt-6">
                            <button type="reset"
                                    class="rounded-xl border border-slate-300 px-5 py-3 text-sm font-semibold text-slate-600 transition hover:bg-slate-100">
                                Reset Form
                            </button>

                            <button type="submit"
                                    class="inline-flex items-center gap-2 rounded-xl bg-indigo-600 px-6 py-3 text-sm font-bold text-white shadow-lg shadow-indigo-100 transition hover:bg-indigo-700 focus:outline-none focus:ring-4 focus:ring-indigo-200">
                                <span>➕</span> Add Product
                            </button>
                        </div>

                    </form>
                </section>

                {{-- Placeholder Sections --}}
                <div class="mt-7 grid gap-5 lg:grid-cols-2">

                    <section id="orders" class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <div class="flex items-center gap-3">
                            <span class="text-2xl">🛒</span>
                            <div>
                                <h3 class="font-bold text-slate-900">Recent Orders</h3>
                                <p class="mt-1 text-sm text-slate-500">Your latest customer orders will appear here.</p>
                            </div>
                        </div>
                        <div class="mt-5 rounded-xl bg-slate-50 p-5 text-center text-sm text-slate-500">
                            No orders to display yet.
                        </div>
                    </section>

                    <section id="profile" class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <div class="flex items-center gap-3">
                            <span class="text-2xl">🏪</span>
                            <div>
                                <h3 class="font-bold text-slate-900">Store Profile</h3>
                                <p class="mt-1 text-sm text-slate-500">Keep your vendor information up to date.</p>
                            </div>
                        </div>
                        <div class="mt-5 rounded-xl bg-slate-50 p-5">
                            <p class="text-sm text-slate-500">Signed in as</p>
                            <p class="mt-1 font-semibold text-slate-800">
                                {{ session('vendor_name', 'Vendor') }}
                            </p>
                        </div>
                    </section>

                    <div id="customers" class="hidden"></div>

                </div>

                <footer class="mt-8 border-t border-slate-200 py-5 text-center text-xs text-slate-400">
                    © {{ date('Y') }} ShopEase. Built for your business.
                </footer>

            </main>
        </div>
    </div>
</div>

{{-- Product Image Preview: UI Only --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const input = document.getElementById('product_image');
        const preview = document.getElementById('imagePreview');
        const fileName = document.getElementById('fileName');

        if (!input || !preview || !fileName) return;

        input.addEventListener('change', function () {
            const file = this.files && this.files[0];

            if (!file) {
                preview.textContent = '📷';
                fileName.textContent = 'No image selected';
                return;
            }

            if (!file.type.startsWith('image/')) {
                this.value = '';
                preview.textContent = '📷';
                fileName.textContent = 'Please select an image file.';
                return;
            }

            const reader = new FileReader();

            reader.onload = function (event) {
                preview.innerHTML = '';
                const image = document.createElement('img');
                image.src = event.target.result;
                image.alt = 'Product image preview';
                image.className = 'h-full w-full object-contain';
                preview.appendChild(image);
            };

            reader.readAsDataURL(file);
            fileName.textContent = file.name;
        });
    });
</script>
</body>
</html>