<?php
//config.php

include 'include/PHPDB_credentials.php';

define('DEBUG',TRUE); //we want to see all errors

$navLinks = array();
$navLinks['index.php'] = "Home";
$navLinks['about.php'] = "About";
$navLinks['craft_list.php'] = "Gallery";
$navLinks['contacts.php'] = "Contacts";
//disclaimer.php is not shown on purpose


function makeLinks($Array) {
    $myReturn = "";
    foreach($Array as $url => $text) 
    {
        if ($url == THIS_PAGE) {
            $current = " class=\"current\" ";
        } else {
            $current = "";
        }
        $myReturn .= "<li$current><a href=\"" . $url . "\">" . $text . "</a></li>";    
    }    
    return $myReturn;
}

/*  expected result:
        <ul>
            <li class="current"><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contacts.php">Contacts</a></li>
       </ul>
*/


define("THIS_PAGE", basename($_SERVER['PHP_SELF']));

$siteName = "LaSerraDelleIdee.hostei.com"; 

switch (THIS_PAGE){

    case "index.php":
        $pageTitle = "Home";
        $pageName = "La Serra delle Idee"; //it could be Welcome to our group
        //$pageStyle = "style.css";
    break;

    case "about.php":
        $pageTitle = "About us";
        $pageName = "Most recent publications";
        //$pageStyle = "publications.css";
    break;
    
    case "craft_list.php":
        $pageTitle = "Gallery";
        $pageName = "Flowers";
        //$pageStyle = "opportunities.css";
    break;
    
    case "contacts.php":
        $pageTitle = "Contacts";
        $pageName = "Contacts";
        //$pageStyle = "contacts.css";
    break;

    case "disclaimer.php":
        $pageTitle = "La Serra delle Idee";
        $pageName = "Disclaimer / Privacy Notice";
        //$pageStyle = "home.css";
    break;


    default:
        $pageTitle = THIS_PAGE;
        $pageName = THIS_PAGE;
        //$pageStyle = "style.css";
    break;
 
        
}


  
function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
		echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
		die();
    }
}

   
date_default_timezone_set('America/Los_Angeles'); #sets default date/timezone for this website

# End Config area --------------------------------
ob_start();  #buffers our page to be prevent header errors. Call before INC files or ANY html!
header("Cache-Control: no-cache");
header("Expires: -1");#Helps stop browser & proxy caching

//$title = THIS_PAGE; //fallback unique title - see title tag in header.php
if(DEBUG)
{# When debugging, show all errors & warnings
	ini_set('error_reporting', E_ALL | E_STRICT);  
}else{# zero will hide everything except fatal errors
	ini_set('error_reporting', 0);  
}  



/**
 * Wrapper function for processing data pulled from db
 *
 * Forward slashes are added to MySQL data upon entry to prevent SQL errors.  
 * Using our dbOut() function allows us to encapsulate the most common functions for removing  
 * slashes with the PHP stripslashes() function, plus the trim() function to remove spaces.
 *
 * Later, we can add to this function sitewide, as new requirements or vulnerabilities develop.
 *
 * @param string $str data as pulled from MySQL
 * @return $str data cleaned of slashes, spaces around string, etc.
 * @see dbIn()
 * @todo none
 */
function dbOut($str)
{
	if($str!=""){$str = stripslashes(trim($str));}//strip out slashes entered for SQL safety
	return $str;
} #End dbOut()


?>