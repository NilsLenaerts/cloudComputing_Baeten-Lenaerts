<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/styles/styles.css">
        <link rel="stylesheet" href="/styles/backgrounds.css">
        <link rel="stylesheet" href="/styles/navbar.css">
        <link rel="stylesheet" href="/styles/tiles.css">
        <link rel="stylesheet" href="/styles/spellForms.css">
        <link rel="icon" href="/images/logo.png" sizes="any">   
        
        
        <title>@yield('subtitle')</title>
      
        <script type="text/javascript" src="/functions/official.js"></script>
        <script type="text/javascript" src="/functions/homebrew.js"></script>
        <script type="text/javascript" src="/functions/firebase.js"></script>
    </head>

    <body class="margin-0 background home-background-image">
        <ul class="navbar margin-0 padding-0 height-10-vh">
            <li class="dropdown float-left margin-right-1">
                <div id="homeButtonLogo">
                    <a  href="/" class="dropbtn no-bottom-padding">
                    <img id="logo" src="/images/logo.png" alt='logo'>
                    </a>
                </div>
            </li>    

            <li class="dropdown float-left">
              <a href="/homebrew" class="dropbtn">Homebrew</a>
              <div class="dropdown-content">
                <a href="/foundHomebrewSpells">Homebrew spells</a>
                <a href="/foundHomebrewItems">Homebrew Items</a>
              </div>
            </li>

            <li class="dropdown float-left">
              <a href="/realm" class="dropbtn"> D&D Realm</a>
              <div class="dropdown-content">
                <a href="/spells">Spells</a>
                <a href="/classes">Classes</a>
                <a href="/races">Races</a>
                <a href="/monsters">Monsters</a>
              </div>
            </li>
            
            <li class="dropdown float-left">
              <a href="/rules" class="dropbtn">Rules</a>
              <div class="dropdown-content">
                <a href="/adventuring">Adventuring</a>
                <a href="/appendix">Appendix</a>
                <a href="/combat">Combat</a>
                <a href="/equipment">Equipment</a>
                <a href="/spellcasting">Spellcasting</a>
                <a href="/using-ability-scores">Using Ability Scores</a>
              </div>
            </li>

            <li class="dropdown float-left">
              <a href="javascript:void(0)" class="dropbtn">Calendar</a>
            </li>
            
            <li class="dropdown float-right" style="margin-right: 150px;">
              <a href="/redirect" class="dropbtn">Login</a>
              <div class="dropdown-content">
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a> <form id="logout-form" action="{{ route('logout') }}" method="POST"> @csrf</form>
                <a href="/myCharacters">My characters</a>
              </div>
            </li>
            
            <li class="dropdown float-left">
              <a href="/random" class="dropbtn">Random Creator</a>
              <div class="dropdown-content">
                <a href="/character">Random Character Creator</a>
                <a href="/encounter">Random Encounter Creator</a>
              </div>
            </li>
        </ul>
        <main class="border-box padding-2">
            @yield('content')
        </main>
    </body>
</html>