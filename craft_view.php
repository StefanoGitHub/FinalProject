<?php
// view.php along with demo_list.php provides a sample web application
 /*
 * this app is contingent upon the  installation and proper 
 * configuration of the nmMini package (config-mini.php) or equivalent  
 * 
 * @package nmListView
 * @author Bill Newman <williamnewman@gmail.com>
 * @version 3.0 2012/11/14
 * @link http://www.newmanix.com/
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License ("OSL") v. 3.0
 * @see demo_list.php
 * @todo none
 */
 
require 'include/config.php'; #provides configuration, pathing, error handling, db credentials
 
# check variable of item passed in - if invalid data, forcibly redirect back to demo_list.php page
if(isset($_GET['id']) && (int)$_GET['id'] > 0){#proper data must be on querystring
	 $myID = (int)$_GET['id']; #Convert to integer, will equate to zero if fails
}else{#send the user to a safe location!
	header("Location:craft_list.php");
}

//sql statement to select individual item
$sql = "select Name,Color,Family,Description,Picture from t_Flowers where FlowerID = " . $myID;

$foundRecord = FALSE; # Will change to true, if record found!
   
# connection comes first in mysqli (improved) function
$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0)
{#records exist - process
    $foundRecord = TRUE;	
    $row = mysqli_fetch_assoc($result);//)

    $Name = dbOut($row['Name']);
    $Color = dbOut($row['Color']);
    $Family = dbOut($row['Family']);
    $Picture = dbOut($row['Picture']);
    $Description = dbOut($row['Description']);

    $pageTitle = $Name; #overwrite title with beer name
}

@mysqli_free_result($result); # We're done with the data!

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

<?php
if($foundRecord)
{#records exist - show beer!
?>
	<article>            
<div id="gallery">    
    <div><h1 align="center"><?=$Name;?></h1>
        
	<table align="center" style="width:400px; border-collapse:collapse;">
        <tr><td align="center">   <img src="<?=$Picture;?>" />                  </td></tr>
        <tr><td align="center">   Color: <b><?=$Color;?></b>                    </td></tr>		
        <tr><td align="center">   Family: <b><?=$Family;?></b>                  </td></tr>		
        <tr><td align="center">   <b>Description: </b><i><?=$Description;?></i> </td></tr>
	</table>
        <br>
    <p align="center"><a href="craft_list.php">All flowers</a></p>

        
<?php
}else{//no such beer!
    
    echo '<h2 align="center">What! No such flower? There must be a mistake!!</h2>';
    echo '<p align="center"><a href="craft_list.php">Another flower?</a></p>';
}

?>
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