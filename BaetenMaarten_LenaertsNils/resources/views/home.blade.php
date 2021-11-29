 @extends('master')
@section('subtitle', 'Home')
@section('content')
    <head>
            <meta charset="UTF-8">
            <title>Character @yield('subtitle')</title>
            <script type="text/javascript" src="functions.js">
            </script>
    </head>
    <body>
        <h2>Welcome to D&amp;D&nbsp;</h2>
        <p><a style="text-decoration: underline;" href="calendar">gameCalendar</a></p>
        <p>For random character creation press this <a style="text-decoration: underline;" href="randomCharacterCreation">link</a></p>
        <p>For random dungeon creation press this <a style="text-decoration: underline;" href="google.com">link</a></p>
        <p>For all D&amp;D rules press this <a style="text-decoration: underline;" href="rules">link</a></p>
        <p>For all D&amp;D homebrew content press this <a style="text-decoration: underline;" href="homebrew">link</a></p>
        <p><img src="https://dnd.wizards.com/sites/all/themes/dx/logo.png" width="382" height="64" /></p>
        <p><em>&nbsp;May the die be in your favor</em></p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </body>
@stop