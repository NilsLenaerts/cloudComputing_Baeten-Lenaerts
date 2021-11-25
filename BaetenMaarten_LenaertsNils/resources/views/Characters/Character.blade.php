@extends('master')
@section('subtitle', 'Your Character')
@section('content')
   <header style="">
    

    <div class="wrapper">
        <!-- Menu -->
        <nav id="menu">
            <a class="home" href="/"><span style="background: url(https://dnd.wizards.com/sites/all/themes/dx/logo.png) 0 0 no-repeat !important; background-size: 200% auto !important;">Dungeons &amp; Dragons</span></a>

            <div class="menu-wrapper">
                <ul class="main-menu">
                    <li class="top_level expanded">
  <a title="" class="nolink" tabindex="0"><span>Products</span></a>  <div class="mega_menu">
    <ul class="mega_menu_content ">
      <li class="column expanded first">
  <a title="" class="nolink" tabindex="0">Tabletop Games</a>    <ul class="submenu-col">
    
<li class="default leaf first">
	<a href="/get-started"><span class="">Where to Start</span></a></li>

<li class="default leaf">
	<a href="/products/tabletop-games/rpg-products" title=""><span class="">Tabletop RPGs</span></a></li>

<li class="default leaf">
	<a href="/products/tabletop-games/board-card-games" title=""><span class="">Board &amp; Card Games</span></a></li>

<li class="default leaf">
	<a href="/miniatures" title=""><span class="">Miniatures</span></a></li>

<li class="default leaf">
	<a href="/products/merchandise"><span class="">Accessories</span></a></li>

<li class="default leaf last">
	<a href="/products/catalog/tabletop-games" title=""><span class="">All</span></a></li>
  </ul>
  </li>
<li class="column expanded">
  <a title="" class="nolink" tabindex="0">Digital Games</a>    <ul class="submenu-col">
    
<li class="default leaf first">
	<a href="https://darkalliance.com" title=""><span class="">Dark Alliance</span></a></li>

<li class="default leaf">
	<a href="/products/digital-games/pcmac" title=""><span class="">PC/Mac</span></a></li>

<li class="default leaf">
	<a href="/products/digital-games/console" title=""><span class="">Console Games</span></a></li>

<li class="default leaf">
	<a href="/products/digital-games/mobiletablet" title=""><span class="">Mobile and Tablet</span></a></li>

<li class="default leaf">
	<a href="/digital_tools"><span class="">Digital Tools</span></a></li>

<li class="default leaf last">
	<a href="/products/catalog/digital-games" title=""><span class="">All</span></a></li>
  </ul>
  </li>
<li class="column expanded">
  <a title="" class="nolink" tabindex="0">Fiction</a>    <ul class="submenu-col">
    
<li class="default leaf first">
	<a href="/products/fiction/novels" title=""><span class="">Novels</span></a></li>

<li class="default leaf">
	<a href="/products/fiction/comicsgraphic-novels" title=""><span class="">Comics/Graphic Novels</span></a></li>

<li class="default leaf last">
	<a href="/products/fiction/novels" title=""><span class="">All</span></a></li>
  </ul>
  </li>
<li class="column expanded last">
  <a title="" class="nolink" tabindex="0">Support</a>    <ul class="submenu-col">
    
<li class="default leaf first">
	<a href="https://dnd-support.wizards.com/hc/en-us" title="" target="_blank"><span class="">Customer Support</span></a></li>

<li class="default leaf">
	<a href="https://locator.wizards.com/?searchType=dnd" title="" target="_blank"><span class="">Store &amp; Event Locator</span></a></li>

<li class="default leaf">
	<a href="https://www.amazon.com/dnd" title="" target="_blank" class="cta-external-link-icon"><span class="">Amazon Storefront</span></a></li>

<li class="default leaf last">
	<a href="/remote/freematerial"><span class="">Stay at Home/Play at Home</span></a></li>
  </ul>
  </li>
    </ul>
  </div>
</li>
<li class="top_level expanded">
  <a title="" class="nolink" tabindex="0"><span>Gameplay</span></a>  <div class="mega_menu">
    <ul class="mega_menu_content ">
      <li class="column expanded first">
  <a href="/dungeons-and-dragons/what-is-dd" title="">Overview</a>    <ul class="submenu-col">
    
<li class="default leaf first">
	<a href="/dungeons-and-dragons/what-is-dd"><span class="">What is D&amp;D?</span></a></li>

<li class="default leaf">
	<a href="/start-playing"><span class="">Ways to Play</span></a></li>

<li class="default leaf last">
	<a href="/stayinformed"><span class="">Stay Informed</span></a></li>
  </ul>
  </li>
<li class="column expanded">
  <a title="" class="nolink" tabindex="0">Getting Started</a>    <ul class="submenu-col">
    
<li class="default leaf first">
	<a href="/basics-play"><span class="">Basics of Play</span></a></li>

<li class="default leaf">
	<a href="/rules-introduction"><span class="">Rules Introduction</span></a></li>

<li class="default leaf">
	<a href="/races"><span class="">Choosing a Race</span></a></li>

<li class="default leaf last">
	<a href="/classes"><span class="">Choosing a Class</span></a></li>
  </ul>
  </li>
<li class="column expanded last">
  <a href="/products/tabletop-games/trpg-resources">Resources</a>    <ul class="submenu-col">
    
<li class="default leaf first">
	<a href="/charactersheets" class="active"><span class="">Character Sheets</span></a></li>

<li class="default leaf">
	<a href="/articles/features/basicrules" title=""><span class="">Basic Rules</span></a></li>

<li class="default leaf">
	<a href="https://dmsguild.com" title=""><span class="">DMsGuild</span></a></li>

<li class="default leaf">
	<a href="/content/dragon"><span class="">Dragon+</span></a></li>

<li class="default leaf">
	<a href="/newsletter" title=""><span class="">Newsletter</span></a></li>

<li class="default leaf last">
	<a href="/remote/freematerial" title=""><span class="">Stay at Home/Play at Home</span></a></li>
  </ul>
  </li>
    </ul>
  </div>
</li>
<li class="top_level expanded">
  <a title="" class="nolink" tabindex="0"><span>Story</span></a>  <div class="mega_menu">
    <ul class="mega_menu_content ">
      <li class="column expanded first">
  <a title="" class="nolink" tabindex="0">Current Stories</a>    <ul class="submenu-col">
    
<li class="default leaf first">
	<a href="https://dnd.wizards.com/products/wild-beyond-witchlight" title=""><span class="">The Wild Beyond the Witchlight</span></a></li>

<li class="default leaf last">
	<a href="/products/tabletop-games/rpg-products/icewind-dale-rime-frostmaiden" title=""><span class="">Icewind Dale: Rime of the Frostmaiden</span></a></li>
  </ul>
  </li>
<li class="column expanded">
  <a title="" class="nolink" tabindex="0">Story Archive</a>    <ul class="submenu-col">
    
<li class="default leaf first">
	<a href="/products/tabletop-games/rpg-products/baldursgate_descent" title=""><span class="">Descent Into Avernus</span></a></li>

<li class="default leaf">
	<a href="/story/waterdeep"><span class="">Waterdeep</span></a></li>

<li class="default leaf">
	<a href="/story/tombofannihilation"><span class="">Tomb of Annihilation</span></a></li>

<li class="default leaf">
	<a href="/dungeons-and-dragons/story/curse-of-strahd" title=""><span class="">Curse of Strahd</span></a></li>

<li class="default leaf">
	<a href="/dungeons-and-dragons/story/storm-kings-thunder"><span class="">Storm King's Thunder</span></a></li>

<li class="default leaf">
	<a href="/dungeons-and-dragons/story/rage-of-demons"><span class="">Rage of Demons</span></a></li>

<li class="default leaf">
	<a href="/products/elemental-evil" title=""><span class="">Elemental Evil </span></a></li>

<li class="default leaf last">
	<a href="/dungeons-and-dragons/story/tyrannyofdragons"><span class="">Tyranny of Dragons</span></a></li>
  </ul>
  </li>
<li class="column expanded last">
  <a title="" class="nolink" tabindex="0">Lore</a>    <ul class="submenu-col">
    
<li class="default leaf first">
	<a href="http://legendofdrizzt.com" title=""><span class="">The Legend of Drizzt</span></a></li>

<li class="default leaf">
	<a href="/dungeons-and-dragons/story/heroes"><span class="">Heroes</span></a></li>

<li class="default leaf">
	<a href="/dungeons-and-dragons/what-is-dd/monsters"><span class="">Monsters</span></a></li>

<li class="default leaf last">
	<a href="/story/lore/forgotten-realms"><span class="">Locations</span></a></li>
  </ul>
  </li>
    </ul>
  </div>
</li>
<li class="top_level expanded">
  <a title="" class="nolink" tabindex="0"><span>Events</span></a>  <div class="mega_menu">
    <ul class="mega_menu_content ">
      <li class="column expanded first">
  <a href="/playevents/gather-together">Events &amp; Conventions</a>    <ul class="submenu-col">
    
<li class="default leaf first">
	<a href="/virtual_play_weekends"><span class="">Virtual Play Weekends</span></a></li>

<li class="default leaf">
	<a href="/playevents/gather-together" title=""><span class="">Convention Info</span></a></li>

<li class="default leaf last">
	<a href="/extralife"><span class="">Extra Life</span></a></li>
  </ul>
  </li>
<li class="column expanded">
  <a href="/playevents/organized-play" title="">Adventurers League</a>    <ul class="submenu-col">
    
<li class="default leaf first">
	<a href="/ddal_general"><span class="">Overview</span></a></li>

<li class="default leaf">
	<a href="/ddal_players"><span class="">Player Info</span></a></li>

<li class="default leaf">
	<a href="/ddal_dms"><span class="">DM Info</span></a></li>

<li class="default leaf last">
	<a href="/ddal_misthunters"><span class="">Mist Hunters</span></a></li>
  </ul>
  </li>
<li class="column expanded last">
  <a href="/community" title="">Community</a>    <ul class="submenu-col">
    
<li class="default leaf first">
	<a href="https://discord.gg/dnd" title="" target="_blank" class="cta-external-link-icon"><span class="">Discord</span></a></li>

<li class="default leaf">
	<a href="https://www.facebook.com/dungeonsanddragons" title="" target="_blank" class="cta-external-link-icon"><span class="">Facebook</span></a></li>

<li class="default leaf">
	<a href="https://twitter.com/Wizards_DnD" title="" target="_blank" class="cta-external-link-icon"><span class="">Twitter</span></a></li>

<li class="default leaf">
	<a href="https://www.twitch.tv/dnd" title="" target="_blank" class="cta-external-link-icon"><span class="">Twitch</span></a></li>

<li class="default leaf">
	<a href="https://www.youtube.com/user/DNDWizards" title="" target="_blank" class="cta-external-link-icon"><span class="">YouTube</span></a></li>

<li class="default leaf last">
	<a href="https://company.wizards.com/fancontentpolicy" title=""><span class="">Fan Site Kit</span></a></li>
  </ul>
  </li>
    </ul>
  </div>
</li>
<li class="top_level expanded">
  <a href="/articles" title=""><span>Articles</span></a>  <div class="mega_menu">
    <ul class="mega_menu_content ">
      <li class="column expanded first">
  <a title="" class="nolink" tabindex="0">Articles</a>    <ul class="submenu-col">
    
<li class="default leaf first">
	<a href="/articles/news" title=""><span class="">News</span></a></li>

<li class="default leaf">
	<a href="/articles/events" title=""><span class="">Events</span></a></li>

<li class="default leaf">
	<a href="/articles/features" title=""><span class="">Features</span></a></li>

<li class="default leaf">
	<a href="/articles/sage-advice" title=""><span class="">Sage Advice</span></a></li>

<li class="default leaf">
	<a href="/articles/dd-studio-blog" title=""><span class="">D&amp;D Studio Blog</span></a></li>

<li class="default leaf">
	<a href="/articles/unearthed-arcana" title=""><span class="">Unearthed Arcana</span></a></li>

<li class="default leaf last">
	<a href="/articles" title=""><span class="">All</span></a></li>
  </ul>
  </li>
<li class="column expanded">
  <a href="/articles/media-resources">Galleries</a>    <ul class="submenu-col">
    
<li class="default leaf first">
	<a href="/articles/media-resources/wallpapers" title=""><span class="">Wallpaper</span></a></li>

<li class="default leaf last">
	<a href="/articles/media-resources/comics" title=""><span class="">Comics</span></a></li>
  </ul>
  </li>
<li class="column expanded last">
  <a href="/content/dragon" title="">Dragon+</a>    <ul class="submenu-col">
    
<li class="default leaf first">
	<a href="https://dnd.dragonmag.com" title="" target="_blank" class="cta-external-link-icon"><span class="">Latest Issue</span></a></li>

<li class="default leaf last">
	<a href="/content/dragon" title=""><span class="">Archive</span></a></li>
  </ul>
  </li>
    </ul>
  </div>
</li>
<li class="top_level expanded">
  <a title="" class="nolink" tabindex="0"><span>Media</span></a>  <div class="mega_menu">
    <ul class="mega_menu_content ">
      <li class="column expanded first">
  <a title="" class="nolink" tabindex="0">Livestreams</a>    <ul class="submenu-col">
    
<li class="default leaf first">
	<a href="/articles/events/black-dice-society" title=""><span class="">Black Dice Society</span></a></li>

<li class="default leaf last">
	<a href="/articles/events/nights-eveningstar" title=""><span class="">Nights of Eveningstar</span></a></li>
  </ul>
  </li>
<li class="column expanded last">
  <a title="" class="nolink" tabindex="0">Podcasts</a>    <ul class="submenu-col">
    
<li class="default leaf first">
	<a href="/dragon-talk/podcast-hub" title=""><span class="">Dragon Talk</span></a></li>

<li class="default leaf">
	<a href="/dungeon-delve/podcast-hub" title=""><span class="">Dungeon Delve</span></a></li>

<li class="default leaf">
	<a href="https://dnd.wizards.com/nights-eveningstar/podcast-hub" title=""><span class="">Nights of Eveningstar</span></a></li>

<li class="default leaf last">
	<a href="/podcast-hub"><span class="">All</span></a></li>
  </ul>
  </li>
    </ul>
  </div>
</li>
<li class="top_level_right leaf">
  <a href="https://myaccounts.wizards.com/login/dnd" title="" class="ico-accounts"><span>Accounts</span></a></li>
<li class="top_level_right leaf">
  <a href="https://locator.wizards.com/search?searchType=stores" title="" class="ico-locator"><span>Store Locator</span></a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
    <img src="https://media.dnd.wizards.com/styles/story_banner/public/images/head-banner/DX_CharacterSheet_Articles_Header-Image.jpg" alt="" width="1920/" height="600" /></em></p>   
@stop
