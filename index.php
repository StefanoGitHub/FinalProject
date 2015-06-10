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
						<div class="figure">
							<img class="cover" src="images/cover.png" alt="La Serra delle Idee" title="La Serra delle Idee" />
							<div>
								<p>La Serra delle Idee</p>
							</div>
						</div>
						<div>	
							<p>Consectetur adipiscing elit. Nunc id lectus ante, adipiscing 
							scelerisque odio. Nam non massa felis, ac consequat quam. Sed turpis nisl, convallis ut varius nec, vestibulum vel sapien. Donec euismod
							varius tellus, blandit egestas felis facilisis ut. Donec mattis purus at dui auctor nec volutpat purus ullamcorper. Phasellus sit amet magna
							vitae tellus mollis pharetra sed dictum metus. Nam ultrices mauris ut metus lacinia vitae suscipit augue molestie. Nulla facilisi. Fusce eget
							velit erat. Sed viverra, est vitae viverra convallis, nisi nulla venenatis mauris, vitae sagittis mauris ante in libero. Integer in augue nec arcu
							bibendum pulvinar vitae in velit. Quisque pretium venenatis sapien, non condimentum purus sodales mattis. In hac habitasse platea 
							dictumst. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc a quam eu tellus congue ornare
							quis vel augue.</p>
							
							<p>Donec id sapien molestie ipsum blandit pellentesque. Cras molestie aliquet tellus ac interdum. Mauris ullamcorper porttitor justo, 
							ultricies adipiscing massa dapibus non. Cras arcu justo, facilisis sit amet molestie eget, volutpat et urna. Integer diam odio, vestibulum 
							vitae pharetra tempor, porttitor quis nunc. Duis vulputate ante sed enim pharetra facilisis lobortis urna mattis. Donec eu quam ante, 
							vitae ornare neque. Praesent posuere orci nec lorem tempor elementum sed ornare odio. Aenean id interdum augue.</p>
						</div>
						<ul>
							<li class="first">
								<a href="#"><img src="images/finger-nails.jpg" alt=""/></a>
								<span><a href="blog.html">Lorem Ipsum</a></span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque posuere consectetur sapien, eu rhoncus ante pellen</p>
							</li>
							<li>
								<a href="#"><img src="images/face-treatment.jpg" alt=""/></a>
								<span><a href="blog.html">Lorem Ipsum</a></span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque posuere consectetur sapien, eu rhoncus ante pellen</p>
							</li>
							<li>
								<a href="#"><img src="images/back-massage.jpg" alt=""/></a>
								<span><a href="blog.html">Lorem Ipsum</a></span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque posuere consectetur sapien, eu rhoncus ante pellen</p>
							</li>
						</ul>
					</article>
<!-- - - MAIN CONTENT END HERE - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
              
            </section>

                    
                    
    <!-- here goes the FOOTER, from footer_inc.php -->    
    <?php include "include/footer_inc.php"; ?>
                    
                    
			</div> <!-- page -->
		</div> <!-- background -->
	</body>
</html>  