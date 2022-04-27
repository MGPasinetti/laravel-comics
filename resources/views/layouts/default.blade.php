<!doctype html>
<html>

    <head>
        @include('includes.head')
    </head>

    <body>
        <div class="container">

            @include('includes.header')

            <main>
                @yield('content')
            </main>

            @include('includes.footer')
        </div>
    </body>
</html>
