<?php
//form_inc.php

$toAddress      = "sborgh02@seattlecentral.edu";    //email address to which the email will be sent

if (isset($_POST['submit'])) 
{
    $name = isset($_POST["name"]) ? $_POST["name"] : "NOT PROVIDED";
    $email = isset($_POST["email"]) ? $_POST["email"] : "NOT PROVIDED";
    $message = isset($_POST["message"]) ? $_POST["message"] : "NOT PROVIDED";

	//build header and text for body of email
    $header = "Replay to " . $name . ": " . $email . PHP_EOL . 
              "-----------------------------------------------"     . PHP_EOL;
    
	$emailText = "On " . date("l, F jS, Y") . " at " . date("G:i") . " " . 
                 $name . " wrote: "         . PHP_EOL . PHP_EOL . 
                 $message . PHP_EOL;
                 
    //mail() function requires the message has lines not larger than 70 characters 
    $emailText = wordwrap($emailText, 70, "\r\n");
    
        
    //build subject of the email
    $emailSubject = "Website feedback from " . $name;
    
    //send email
    mail($toAddress, $emailSubject, $emailText, $header);
    
    
    
    
    echo "<h3>Thank you " . $_POST['name'] . " for submitting your request.<br>
          <p>We will respond as soon as possible!</h3>
        ";
    
}
else 
{
    echo '
        <h2>Please fill the form below:</h2>
        <form action="' . THIS_PAGE . '" method="post"> 
    
            Name*: <input type="text" name="name" required placeholder="Your name" ><br>
                        
            Email*: <input type="email" name="email" required placeholder="Your email" ><br><br>
            
            Please write here your message*:<br>
            <textarea name="message" rows="5" cols="55" placeholder="Write your message here" required ></textarea> <br><br>
                        
            <input type="submit" name="submit" value="Submit" />
        </form>        
    ';
}


?>