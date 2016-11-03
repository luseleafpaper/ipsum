<!DOCTYPE html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Foobooks' --}}
        @yield('title','Lorem Ipsum')
    </title>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

    <header>
    </header>

    <nav>
        <ul>
            <li><a href='/ipsum'>Lorem Ipsum Generator</a></li>
            <li><a href='/usergen'>User Generator</a></li>
        </ul>
    </nav>


    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>


    <footer>
        <!-- &copy; {{ date('Y') }} &nbsp;&nbsp; --> 
    </footer>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
