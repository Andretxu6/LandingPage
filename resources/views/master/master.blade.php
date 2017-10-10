<!DOCTYPE html>
<html>
    <head>
        @include('master.head')
    </head>
    <body>
        <header>
            @include('master.nav')
        </header>
        <div class="content">
            @yield('content')
        </div>
    </body>
</html>