
<footer class="mt-12 bg-slate-900 text-slate-300">

    <div class="mx-auto max-w-7xl px-6 py-12 lg:px-10">

        <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-4">

            <!-- Brand -->
            <div>
                <a href="/" class="text-2xl font-extrabold text-white">
                    Shop<span class="text-amber-400">Ease</span>
                </a>

                <p class="mt-4 text-sm leading-7 text-slate-400">
                    Your online shopping destination for quality
                    products and great value.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="mb-5 font-bold text-white">Quick Links</h3>

                <ul class="space-y-3 text-sm">
                    <li><a href="/" class="hover:text-amber-400">Home</a></li>
                    <li><a href="/shop" class="hover:text-amber-400">Shop</a></li>
                    <li><a href="/categories" class="hover:text-amber-400">Categories</a></li>
                    <li><a href="/about" class="hover:text-amber-400">About Us</a></li>
                    <li><a href="/contact" class="hover:text-amber-400">Contact</a></li>
                </ul>
            </div>

            <!-- Customer Service -->
            <div>
                <h3 class="mb-5 font-bold text-white">Customer Service</h3>

                <ul class="space-y-3 text-sm">
                    <li><a href="/help" class="hover:text-amber-400">Help Center</a></li>
                    <li><a href="/shipping" class="hover:text-amber-400">Shipping Information</a></li>
                    <li><a href="/returns" class="hover:text-amber-400">Returns & Refunds</a></li>
                    <li><a href="/privacy" class="hover:text-amber-400">Privacy Policy</a></li>
                    <li><a href="/terms" class="hover:text-amber-400">Terms & Conditions</a></li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div>
                <h3 class="mb-5 font-bold text-white">Stay Connected</h3>

                <p class="mb-4 text-sm leading-6 text-slate-400">
                    Get updates about new products and special offers.
                </p>

                <form action="#" method="GET" class="flex flex-col gap-3">
                    <input type="email"
                           name="email"
                           placeholder="Enter your email"
                           aria-label="Email address"
                           required
                           class="input w-full border-slate-700
                                  bg-slate-800 text-white
                                  placeholder:text-slate-400">

                    <button type="submit"
                            class="btn border-none bg-amber-400
                                   font-semibold text-slate-900
                                   hover:bg-amber-300">
                        Subscribe
                    </button>
                </form>
            </div>

        </div>

    </div>

    <!-- Copyright -->
    <div class="border-t border-slate-700">
        <div class="mx-auto flex max-w-7xl flex-col items-center
                    justify-between gap-4 px-6 py-5 text-sm
                    md:flex-row lg:px-10">

            <p class="text-center text-slate-400">
                &copy; {{ date('Y') }} ShopEase. All rights reserved.
            </p>

            <div class="flex gap-5">
                <a href="/privacy" class="hover:text-amber-400">Privacy</a>
                <a href="/terms" class="hover:text-amber-400">Terms</a>
                <a href="/contact" class="hover:text-amber-400">Support</a>
            </div>

        </div>
    </div>

</footer>
