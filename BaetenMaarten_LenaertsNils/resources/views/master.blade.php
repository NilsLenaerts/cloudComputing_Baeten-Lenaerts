<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="functions.js">
        </script>
        <link rel="stylesheet" href="/styles.css"> 
        <meta charset="UTF-8">
        <title>@yield('subtitle')</title>
        <script type="text/javascript" src="functions.js"></script>
    </head>
    <body  style="margin-top:100px">
        <ul class="navbar" style="list-style-type:none; margin-top:5px; margin-right:0;  padding:0; overflow:visible; background-color:#333;">
            <li class="dropdown" style=" float: left;">
                <div id="homeButtonLogo" style="width: 50px; margin-right:30px">
                    <a  href="/" class="dropbtn">
                    <img src="/images/logo.png" alt='logo' style="width:50px;height:50px;">
                    </a>
                </div>
            </li>    

            <li class="dropdown" style=" float: left; ">
              <a href="/homebrew" class="dropbtn" style="font-size: 40px;">Homebrew</a>
              <div class="dropdown-content">
                <a href="/foundHomebrewSpells">Homebrew spells</a>
                <a href="/foundHomebrewItems">Homebrew Items</a>
              </div>
            </li>

            <li class="dropdown" style=" float: left; ">
              <a href="/rules" class="dropbtn" style="font-size: 40px;" >Rules</a>
              <div class="dropdown-content">
                <a href="/spells">Spells</a>
                <a href="/classes">Classes</a>
                <a href="/races">Races</a>
                <a href="/monsters">Monsters</a>
              </div>
            </li>

            <li class="dropdown" style=" float: left; ">
              <a href="javascript:void(0)" class="dropbtn" style="font-size: 40px; " >Calendar</a>
            </li>
            
            <li class="dropdown" style=" float: right; margin-right: 15px;">
              <a href="/login" class="dropbtn" style="font-size: 40px;" >Login</a>
              <div class="dropdown-content">
                <a href="">Sign out</a>
              </div>
            </li>
        </ul>
        @yield('content')

    </body>
</html>

