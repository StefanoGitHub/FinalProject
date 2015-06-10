<?php
/**
 * list.php 
 *
 * 
 * @package ITC240 Spring15
 * @author Stefano Borghi <stefano.borghi@gmail.com>
 * @version 1.0 2015/04/21
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License ("OSL") v. 3.0
 * @see header_inc.php
 * @see footer_inc.php 
 */

 /**
 * Allows unique page title for each page. 
 * If left empty, will default to $PageTitle inside headerINC.php
 * @global boolean $HidePageErrors
 * @see headerINC.php 
 */

require 'include/config.php'; #provides configuration, pathing, error handling, db credentials 
 
# SQL statement
$sql = "select Name, FlowerID, Family from t_Flowers";

#Fills <title> tag  
//$title = 'Flowers from our garden';

# END CONFIG AREA ---------------------------------------------------------- 

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
<div id="gallery">    
    <div><h1><?=$pageName?></h1>
                        
<p>This page shows all the flowers I like the most:</p> 
<?php

# connection comes first in mysqli (improved) function

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));
if(mysqli_num_rows($result) > 0)
{#records exist - process
	while($row = mysqli_fetch_assoc($result))
	{# process each row
         echo '<p align="center"><a href="craft_view.php?id=' . (int)$row['FlowerID'] . '">' . dbOut($row['Name']) . '</a>';
         echo ', Family <i>' . dbOut($row['Family'])  . '</i></p>';
 
	} 
}else{#no records
    echo "<p align=center>What! No flowers?  There must be a mistake!!</p>";	
}
@mysqli_free_result($result);
?>        </div>
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