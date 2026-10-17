
<nav class="navbar sticky top-0 z-50 bg-white shadow-sm px-3 sm:px-6 lg:px-10">

    <!-- Brand and Mobile Menu -->
    <div class="navbar-start gap-1">

        <div class="dropdown">
            <button tabindex="0"
                    type="button"
                    class="btn btn-ghost btn-square lg:hidden"
                    aria-label="Open navigation menu">

                <svg xmlns="http://www.w3.org/2000/svg"
                     class="h-6 w-6"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M4 6h16M4 12h8m-8 6h16"/>
                </svg>
            </button>

            <ul tabindex="0"
                class="menu menu-sm dropdown-content bg-white
                       rounded-box z-50 mt-3 w-52 p-2 shadow-xl">

                <li><a href="/">Home</a></li>
                <li><a href="/shop">Shop</a></li>
                <li><a href="/categories">Categories</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>

        <a href="/"
           class="btn btn-ghost text-xl sm:text-2xl font-extrabold">
            <span class="text-amber-500">Shop</span><span>Ease</span>
        </a>
    </div>

    <!-- Desktop Links -->
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1 font-medium">
            <li><a href="/" class="hover:text-amber-500">Home</a></li>
            <li><a href="/shop" class="hover:text-amber-500">Shop</a></li>
            <li><a href="/categories" class="hover:text-amber-500">Categories</a></li>
            <li><a href="/about" class="hover:text-amber-500">About Us</a></li>
            <li><a href="/contact" class="hover:text-amber-500">Contact</a></li>
        </ul>
    </div>

    <!-- Search and Actions -->
    <div class="navbar-end gap-1 sm:gap-2">

        <label class="input input-bordered hidden md:flex
                      items-center gap-2 w-40 xl:w-56">

            <svg xmlns="http://www.w3.org/2000/svg"
                 class="h-4 w-4 opacity-60"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor">
                <circle cx="11" cy="11" r="7" stroke-width="2"/>
                <path stroke-linecap="round"
                      stroke-width="2"
                      d="m16 16 4 4"/>
            </svg>

            <input type="search"
                   class="grow min-w-0"
                   placeholder="Search products..."
                   aria-label="Search products">
        </label>

        <a href="/cart"
           class="btn btn-ghost btn-circle btn-sm sm:btn-md"
           aria-label="Shopping cart">

            <div class="indicator">
                <span class="indicator-item badge badge-sm
                             bg-amber-400 text-slate-900 border-none">
                    0
                </span>

                <svg xmlns="http://www.w3.org/2000/svg"
                     class="h-6 w-6"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M3 3h2l2.4 12.4a2 2 0 002 1.6h8.8a2 2 0 002-1.6L22 8H6"/>
                    <circle cx="10" cy="21" r="1"/>
                    <circle cx="18" cy="21" r="1"/>
                </svg>
            </div>
        </a>
        <a href="{{route('register')}}"
           class="btn btn-sm sm:btn-md bg-slate-900
                  hover:bg-amber-400 text-white hover:text-slate-900
                  border-slate-900 hover:border-amber-400
                  rounded-lg font-semibold whitespace-nowrap">
            <span class="hidden sm:inline">Become a Seller</span>
            <span class="sm:hidden">Sell</span>
        </a>
        <a href="/login"
           class="btn btn-sm sm:btn-md bg-amber-400
                  hover:bg-amber-300 text-slate-900
                  border-amber-400 rounded-lg">
            Login
        </a>
    </div>
</nav>
<!-- Category Navigation Bar -->
<nav class="relative z-40 hidden border-y border-slate-200 bg-slate-100
            shadow-sm md:block">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-10">

        <ul class="flex items-center justify-center gap-2 lg:gap-8">

            <!-- Fashion -->
           <li class="group relative">
    <a href="{{ route('category.detail', [
        'slug' => 'fashion',
        'id' => 1
    ]) }}"
       class="flex items-center gap-2 border-b-2
              border-transparent px-3 py-4 text-sm
              font-semibold text-slate-700
              transition-all duration-300
              hover:border-amber-500 hover:text-amber-600
              lg:px-4">

        <svg xmlns="http://www.w3.org/2000/svg"
             class="h-5 w-5 transition-transform duration-300
                    group-hover:scale-110"
             fill="none"
             viewBox="0 0 24 24"
             stroke="currentColor">

            <path stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="1.8"
                  d="M16 3l4 2 2 5-4 2-2-3v12H8V9l-2 3-4-2 2-5 4-2a8 8 0 008 0z"/>
        </svg>

        <span>Fashion</span>
    </a>
</li>

            <!-- Electronics -->
            <li class="group relative">
                <a href="/shop?category=electronics"
                   class="flex items-center gap-2 border-b-2
                          border-transparent px-3 py-4 text-sm
                          font-semibold text-slate-700
                          transition-all duration-300
                          hover:border-amber-500 hover:text-amber-600
                          lg:px-4">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-5 w-5 transition-transform
                                duration-300 group-hover:scale-110"
                         fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <rect x="3" y="4" width="18" height="13"
                              rx="2" stroke-width="1.8"/>
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="1.8"
                              d="M8 21h8m-4-4v4"/>
                    </svg>

                    Electronics

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-3.5 w-3.5 transition-transform
                                group-hover:rotate-180"
                         fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="m6 9 6 6 6-6"/>
                    </svg>
                </a>

                <div class="invisible absolute left-0 top-full
                            w-48 translate-y-2 rounded-xl
                            border border-slate-100 bg-white p-2
                            opacity-0 shadow-xl transition-all
                            duration-200 group-hover:visible
                            group-hover:translate-y-0
                            group-hover:opacity-100
                            group-focus-within:visible
                            group-focus-within:translate-y-0
                            group-focus-within:opacity-100">

                    <a href="/shop?category=mobiles"
                       class="block rounded-lg px-4 py-3 text-sm
                              text-slate-700 hover:bg-amber-50
                              hover:text-amber-700">
                        Mobiles & Tablets
                    </a>

                    <a href="/shop?category=computers"
                       class="block rounded-lg px-4 py-3 text-sm
                              text-slate-700 hover:bg-amber-50
                              hover:text-amber-700">
                        Computers
                    </a>

                    <a href="/shop?category=accessories"
                       class="block rounded-lg px-4 py-3 text-sm
                              text-slate-700 hover:bg-amber-50
                              hover:text-amber-700">
                        Accessories
                    </a>
                </div>
            </li>

            <!-- Furniture -->
            <li class="group relative">
                <a href="/shop?category=furniture"
                   class="flex items-center gap-2 border-b-2
                          border-transparent px-3 py-4 text-sm
                          font-semibold text-slate-700
                          transition-all duration-300
                          hover:border-amber-500 hover:text-amber-600
                          lg:px-4">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-5 w-5 transition-transform
                                duration-300 group-hover:scale-110"
                         fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="1.8"
                              d="M3 11h18v6H3zM5 17v4m14-4v4M5 11V7a2 2 0 012-2h10a2 2 0 012 2v4"/>
                    </svg>

                    Furniture
                </a>
            </li>

            <!-- Grocery -->
            <li class="group relative">
                <a href="/shop?category=grocery"
                   class="flex items-center gap-2 border-b-2
                          border-transparent px-3 py-4 text-sm
                          font-semibold text-slate-700
                          transition-all duration-300
                          hover:border-amber-500 hover:text-amber-600
                          lg:px-4">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-5 w-5 transition-transform
                                duration-300 group-hover:scale-110"
                         fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="1.8"
                              d="M3 4h2l2.2 10.2a2 2 0 002 1.6h8.9a2 2 0 002-1.6L22 8H6M10 21a1 1 0 100-2 1 1 0 000 2zm8 0a1 1 0 100-2 1 1 0 000 2z"/>
                    </svg>

                    Grocery
                </a>
            </li>

            <!-- Appliances -->
            <li class="group relative">
                <a href="/shop?category=appliances"
                   class="flex items-center gap-2 border-b-2
                          border-transparent px-3 py-4 text-sm
                          font-semibold text-slate-700
                          transition-all duration-300
                          hover:border-amber-500 hover:text-amber-600
                          lg:px-4">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-5 w-5 transition-transform
                                duration-300 group-hover:scale-110"
                         fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <rect x="5" y="2" width="14" height="20"
                              rx="2" stroke-width="1.8"/>
                        <path stroke-linecap="round"
                              stroke-width="1.8"
                              d="M9 6h6m-6 4h6m-3 8h.01"/>
                    </svg>

                    Appliances

                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-3.5 w-3.5 transition-transform
                                group-hover:rotate-180"
                         fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="m6 9 6 6 6-6"/>
                    </svg>
                </a>

                <div class="invisible absolute right-0 top-full
                            w-48 translate-y-2 rounded-xl
                            border border-slate-100 bg-white p-2
                            opacity-0 shadow-xl transition-all
                            duration-200 group-hover:visible
                            group-hover:translate-y-0
                            group-hover:opacity-100
                            group-focus-within:visible
                            group-focus-within:translate-y-0
                            group-focus-within:opacity-100">

                    <a href="/shop?category=kitchen-appliances"
                       class="block rounded-lg px-4 py-3 text-sm
                              text-slate-700 hover:bg-amber-50
                              hover:text-amber-700">
                        Kitchen Appliances
                    </a>

                    <a href="/shop?category=home-appliances"
                       class="block rounded-lg px-4 py-3 text-sm
                              text-slate-700 hover:bg-amber-50
                              hover:text-amber-700">
                        Home Appliances
                    </a>
                </div>
            </li>

        </ul>
    </div>
</nav>
