<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Character @yield('subtitle')</title>
        <script type="text/javascript" src="functions.js">
        </script>
    </head>
    <body>
        <h1>D&D 5e</h1>
        <h2>@yield('subtitle')</h2>
        @yield('content')
        <div id="status" style="background-color: #ddd"></div>
        <hr/>
    </body>
</html>

