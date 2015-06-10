<?php
//header_inc.php

?>

<header>
    
    <div id="logo">
        <a href="index.php">
            <img src="images/logo_header.png" alt="Home" title="Logo"/>
        </a>
    </div>

    
    <!-- NAV BAR -->
    <nav class="top"> 
        <ul>
            <?=makeLinks($navLinks)?>
        </ul>
    </nav>


    <!-- Socials -->
    <div class="connect">
        <a href="https://www.facebook.com/pages/La-Serra-delle-Idee/435337789841095" target="_blank" >
            <img src="images/facebook2_150.png" alt="facebook" title="facebook"/>
        </a>
        
        
        
        
        <!--  <a href="#" class="twitter">twitter</a>
        <a href="#" class="vimeo">vimeo</a>-->
    </div>
    
</header>
