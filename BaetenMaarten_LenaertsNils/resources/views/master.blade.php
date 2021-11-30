<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script type="text/javascript" src="functions.js">
        </script>
        <link rel="stylesheet" type="text/css" href="/resources/css/styles.css" media=”screen” />
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
          
            li.color:before {
                content: counter(item, disc) " ";
                color: pink;
            }
            
            .blackRedShadow {
                text-shadow:0px 5px 5px #ff0033;
            }
            .lucida {
                font-family: "Lucida Handwriting", Lucida, Cursive;
            }
            
            
            body.classes {
                background-image: url("https://i.pinimg.com/originals/0d/b6/a6/0db6a6b8f350497d0c8ca98c9ffac314.jpg");
                background-color: #cccccc;
                background-position: center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }
            
            body.home {
                background-image: url("https://media.dnd.wizards.com/dnd_background_dia4.jpg");
                background-color: #cccccc;
                background-position: center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }
            
            body.spellList {
                background-image: url("https://preview.redd.it/ml5iaypp87t51.png?width=960&crop=smart&auto=webp&s=c893b5634e81f9854129cb7b068491da32f33509");
                background-color: #cccccc;
                background-position: center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }

            body.spell {
                background-image: url("https://www.worldanvil.com/media/cache/cover/uploads/images/431b8d39f46fc2107bcc1cd9afb32b3e.png");
                background-color: #cccccc;
                background-position: center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }
            
            body.show {
                background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8jxIaU-rc80h_v3gGjsMGnllSHnfTlgdIyw&usqp=CAU");
                background-color: #cccccc;
                background-position: center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }
            
            body.login {
                background-image: url("https://cdn.wallpapersafari.com/19/97/MfNw16.jpg");
                background-color: #cccccc;
                background-position: center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }

            body.homebrew {
                background-image: url("https://www.wargamer.com/wp-content/uploads/2021/09/dnd-backgrounds-5e-anthropologist.jpg");
                background-color: #cccccc;
                background-position: center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }
            .center{
               text-align: center; 
            }
            
            .left {
                float: left;
                width: 382px;
            }
            
            .navbar {
                overflow: hidden;
                background-color: #333;
                position: fixed; /* Set the navbar to fixed position */
                top: 0; /* Position the navbar at the top of the page */
                width: 100%; /* Full width */
            }
            
        </style>
    </head>
    <body  style="margin-top:100px">
        <ul class="navbar" style="list-style-type:none; margin-top:5px; margin-right:0;  padding:0; overflow:visible; background-color:#333;">
            <li class="dropdown" style=" float: left;">
                <div id="homeButtonLogo" style="width: 50px; margin-right:10px">
                    <a  href="/" class="dropbtn">
                    <img src="images/logo.png" alt='logo' style="width:50px;height:50px;">
                    </a>
                </div>
            </li>    

            <li class="dropdown" style=" float: left; margin-left: 15px;">
              <a href="/login" class="dropbtn" style="font-size: 40px;" >Login</a>
              <div class="dropdown-content">
                <a href="">Sign out</a>
              </div>
            </li>

            <li class="dropdown" style=" float: left; ">
              <a href="/homebrew" class="dropbtn" style="font-size: 40px;">Homebrew</a>
              <div class="dropdown-content">
                <a href="/foundHomebrewSpells">Homebrew spells</a>
                <a href="">Homebrew Items</a>
              </div>
            </li>

            <li class="dropdown" style=" float: left; ">
              <a href="javascript:void(0)" class="dropbtn" style="font-size: 40px;" >Rules</a>
              <div class="dropdown-content">
                <a href="/spells">Spells</a>
                <a href="/foundClasses">Classes</a>
                <a href="">Races</a>
              </div>
            </li>

            <li class="dropdown" style=" float: left; ">
              <a href="javascript:void(0)" class="dropbtn" style="font-size: 40px;" >Calendar</a>
            </li>
        </ul>
        <h2>@yield('subtitle')</h2>
        @yield('content')

    </body>
</html>

