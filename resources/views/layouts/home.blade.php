
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

        <a href="/login"
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
