<?php
//footer_inc.php 

?>


<footer>
    <nav class="footer">
        <ul>
            <?=makeLinks($navLinks)?>
        </ul>
    </nav>


    <p>Copyright &copy; <?=date("Y")?> <?=$siteName?>, all rights reserved |<a class="disclaimer" href="disclaimer.php" target="_blank">Disclaimer</a></p>


    <!--  w3c validator buttons  -->
    <div class="validators">
        <a href="http://validator.w3.org/check/referer" target="_blank">W3C HTML5</a>
        <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">W3C CSS</a>
    </div>

</footer>
