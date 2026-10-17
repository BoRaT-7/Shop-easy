
@include('layouts.header')

@include('home')

<main class="min-h-[50vh]">
    @yield('content')
</main>

@include('layouts.footer')

</body>
</html>
