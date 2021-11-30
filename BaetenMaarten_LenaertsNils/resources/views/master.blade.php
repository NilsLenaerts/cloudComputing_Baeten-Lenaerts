<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="functions.js">
        </script>
        <link rel="stylesheet" href="styles.css"></link>
        <style>
          limenu{
            float: left;
          }

          limenu a, .dropbtn  {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
          }

          limenu a:hover, .dropdown:hover .dropbtn  {
            background-color: red;
          }

          limenu.dropdown  {
            display: inline-block;
          }

          .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 200px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
          }

          .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
          }

          .dropdown-content a:hover {background-color: #f1f1f1;}

          .dropdown:hover .dropdown-content {
            display: block;
          }
        </style>
    </head>
    <body>
        <ul style="list-style-type:none; margin:0; padding:0; overflow:hidden; background-color:#333;">
            <li class="dropdown" style=" float: left;">
                <div id="homeButtonLogo" style="width: 50px; margin-right:10px">
                    <a  href="/" class="dropbtn">
                    <img src="images/logo.png" alt='logo' style="width:50px;height:50px;">
                    </a>
                </div>
            </li>    

            <li class="dropdown" style=" float: left; margin-left: 15px;">
              <a href="/login" class="dropbtn">Login</a>
              <div class="dropdown-content">
                <a href="">Sign out</a>
              </div>
            </li>

            <li class="dropdown" style=" float: left; ">
              <a href="/homebrew" class="dropbtn">Homebrew</a>
              <div class="dropdown-content">
                <a href="/foundHomebrewSpells">Homebrew spells</a>
                <a href="">Homebrew Items</a>
              </div>
            </li>

            <li class="dropdown" style=" float: left; ">
              <a href="javascript:void(0)" class="dropbtn">Rules</a>
              <div class="dropdown-content">
                <a href="/spells">Spells</a>
                <a href="/foundClasses">Classes</a>
                <a href="">Races</a>
              </div>
            </li>

            <li class="dropdown" style=" float: left; ">
              <a href="javascript:void(0)" class="dropbtn">Calendar</a>
            </li>
        </ul>
        <h2>@yield('subtitle')</h2>
        @yield('content')
        
        <hr/>
    </body>
</html>

