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
        <link rel="stylesheet" href="/styles/characterCheet.css">
        <link rel="stylesheet" href="/styles/modal.css">
        <link rel="stylesheet" href="/styles/myCharacters.css">
        <link rel="icon" href="/images/logo.png" sizes="any">   
        
        
        <title>@yield('subtitle')</title>
      
        <script type="text/javascript" src="/functions/official.js"></script>
        
        <script type="text/javascript" src="/functions/homebrew.js"></script>
        <script type="text/javascript" src="/functions/firebase.js"></script>
        <script type="text/javascript" src="/functions/diceRoller.js"></script>

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
              <a href="/homebrew" class="dropbtn"><i class="fa fa-flask" aria-hidden="true"></i> Homebrew</a>
              <div class="dropdown-content">
                <a href="/foundHomebrewSpells">Homebrew spells</a>
                <a href="/foundHomebrewItems">Homebrew Items</a>
              </div>
            </li>

            <li class="dropdown float-left">
              <a href="/realm" class="dropbtn"><i class="fa fa-globe" aria-hidden="true"></i> D&D Realm</a>
              <div class="dropdown-content">
                <a href="/spells">Spells</a>
                <a href="/classes">Classes</a>
                <a href="/races">Races</a>
                <a href="/monsters">Monsters</a>
              </div>
            </li>
            
            <li class="dropdown float-left">
                <a href="/rules" class="dropbtn"><i class="fa fa-book"></i> Rules</a>
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
              <a href="javascript:void(0)" class="dropbtn"><i class="fa fa-calendar" aria-hidden="true"></i> Calendar</a>
            </li>
            
            <li class="dropdown float-right" >
              @guest
              <a href="/login" class="dropbtn"><i class="fa fa-sign-in"></i> Login</a>
              @else
              <a href="/profile" class="dropbtn"><i class="fa fa-user"></i> {{ Auth::user()->name }}</a>
              <div class="dropdown-content">
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a> <form id="logout-form" action="{{ route('logout') }}" method="POST"> @csrf</form>
                <a href="/myCharacters"><i class="fa fa-folder-open-o" aria-hidden="true"></i> My characters</a>
              </div>
              @endguest
            </li>
            
            <li class="dropdown float-left">
              <a href="/random" class="dropbtn"><i class="fa fa-cubes" aria-hidden="true"></i> Random Creator</a>
              <div class="dropdown-content">
                <a href="/character">Random Character Creator</a>
                <a href="/encounter">Random Encounter Creator</a>
              </div>
            </li>
            
        </ul>
        <main class="border-box padding-2">
            <div class="dropdown float-left ">
            <button class="dropbtn2"><i class="fa fa-random"></i>   Roll</button>
                <div class="dropdown-content" style="background-color: #E6D0BE;">
                    <a class="popup" onclick="roll('d20')">D20  
                    <span class="popuptext" id="d20"></span>
                    </a>
                    <a class="popup" onclick="roll('d12')">D12  
                    <span class="popuptext" id="d12"></span>
                    </a>
                    <a class="popup" onclick="roll('d10')">D10  
                    <span class="popuptext" id="d10"></span>
                    </a>
                    <a class="popup" onclick="roll('d8')">D8    
                    <span class="popuptext" id="d8"></span>
                    </a>
                    <a class="popup" onclick="roll('d6')">D6    
                    <span class="popuptext" id="d6"></span>
                    </a>
                    <a class="popup" onclick="roll('d4')">D4    
                    <span class="popuptext" id="d4"></span>
                    </a>
                        
                </div>
            </div>
            @yield('content')
        </main>
    </body>
    <script type="text/javascript" src="/functions/charCheet.js"></script>
</html>