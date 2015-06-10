<?php
//flowers_db.php 

/**
 * @author Stefano Borghi <sborgh02@seattlecentral.edu>
 * ITC240 Spring2015
 */
 
    include "include/config.php";
    include "include/credentials.php";

?>


<!DOCTYPE html>
<html>
<!-- Original template from http://www.oswd.org/design/preview/id/2755/
 The original of this template was designed by http://www.tristarwebdesign.co.uk
-->
    
    <!-- here goes the HEAD, which includes the <head> section: <title>, <meta>, <link> (styles, fonts, etc.)-->    
    <?php include "include/head_inc.php"; ?>
    
<body>
    
    <!-- here goes the HEADER, which includes the <NAV> -->    
    <?php include "include/header_inc.php"; ?>

    
<!-- MAIN CONTENT START --------------------------------------------------------------------------------------->
	<section>            

        <h1><?=$pageName?></h1>
                
            <?php 

                $sql = "select * from t_Flowers";

                $iConn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_error()));
                $result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error()));

                if (mysqli_num_rows($result) > 0)//at least one record!
                {
                    //show results
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        
                        $color = ($row['Color'] == "White") ? "Grey" : $row['Color'];
                        
                        echo " 
                            <table style=\"width:100%; border-collapse:collapse;\" >
                            <tr>
                                <td style=\"width:80%; text-align:left; padding-right: 3em; \">".    
                                //column1 
                                    "Name: <b>" . $row['Name'] . "</b> <br />" .
                                    "Family: <b><i>" . $row['Family'] . "</i></b> <br />" .
                                    "Color: <b style=\"color:"  .$color. ";\">" . $row['Color'] . "</b> <br />" .
                                    "Country of origin: <b>" . $row['CountryOfOrigin'] . "</b> <br />" .
                                    "Description: <b>" . $row['Description'] . "</b> <br />
                                </td>

                                <td style=\"width:20%; text-align:right; \">". 
                                //column2
                                    "<img src=\"" .$row['Picture']. "\" alt=\"" .$row['Name']. "\" > <br />
                                </td>
                            </tr>
                            </table>
                        ";
                        
                        /*echo "<p>";
                        echo "Name: <b>" . $row['Name'] . "</b> <br />";
                        echo "Family: <b><i>" . $row['Family'] . "</i></b> <br />";
                        echo "Color: <b style=\"color:"  .$color. ";\">" . $row['Color'] . "</b> <br />";
                        echo "Country of origin: <b>" . $row['CountryOfOrigin'] . "</b> <br />";
                        echo "Description: <b>" . $row['Description'] . "</b> <br />";
                        echo "Picture: <img src=\"" .$row['Picture']. "\" alt=\"" .$row['Name']. "\" > <br />";
                        echo "------------------------------------------------------------------------------------<br />";
                        echo "</p>";*/
                        
                    }

                }else{

                    //no records
                    echo '<div align="center">What?! No Beers?  There must be a mistake!!</div>';

                }

                @mysqli_free_result($result); #releases web server memory
                @mysqli_close($iConn); #close connection to database

            ?>

        
    </section>
<!-- MAIN CONTENT END ------------------------------------------------------------------------------------------->

    
    
<!-- here goes the FOOTER, from footer_inc.php -->    
    <?php include "include/footer_inc.php"; ?>

</body>
</html>

