<?php
// index.php

    include "include/config.php";

?>

<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
    
    <!-- here goes the HEAD, which includes the <head> section: <title>, <meta>, <link> (styles, fonts, etc.)-->    
    <?php include "include/head_inc.php"; ?>

    <body>
        
		<div class="background">
            
			<!-- <div id="bg">background</div>    ????? -->
            
			<div class="page">
                
            <!-- here goes the HEADER, which includes the <NAV> -->    
            <?php include "include/header_inc.php"; ?>
                
                
				<section>
                    
<!-- - - MAIN CONTENT START HERE - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
                    <article>
						<div id="contacts">
							<div>
                                <!-- form handler -->
                                <?php include "include/form_inc.php"; ?>
                    
                            </div>
						</div>
					</article>

<!-- - - MAIN CONTENT END HERE - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
                    
                </section>
  
    <!-- here goes the FOOTER, from footer_inc.php -->    
    <?php include "include/footer_inc.php"; ?>
                    
                    
			</div> <!-- page -->
		</div> <!-- background -->
	</body>
</html>  