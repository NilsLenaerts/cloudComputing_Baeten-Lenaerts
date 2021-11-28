<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>D&D 5e @yield('subtitle')</title>
        <script type="text/javascript" src="functions.js">
        </script>
        <style type="text/css">
            #homeButton{
                text-decoration: none;
                font-weight: 300;

            }
            #homeButton:link{
                color: #000;
                
            }
            #homeButton:visited {
                color: #000;
                
            }
            #homeButton:hover {
                color: #333;
                font-weight: 700;
            }

            #homeButtonLogo:hover{
                background: #ccc;
                transition-duration: .5s;
            }
            #homeButtonLogo{
                transition-duration: .5s;
            }

        </style>
    </head>
    <body>
        <div id=homeButtonLogo style="width: 50px;">
            <a  href="/">
                <img src="images/logo.png" alt='logo' style="width:50px;height:50px;">
            </a>
        </div>
        <h1><a id = "homeButton" href="/">D&D 5e</a></h1>
        <h3><a href = "login">Login</a></h3>
        <h2>@yield('subtitle')</h2>
        @yield('content')
        
        <hr/>
    </body>
</html>

