<?php
//form_inc.php

$toAddress      = "sborgh02@seattlecentral.edu";    //my email address here

if (isset($_POST['submit'])) 
{
    
    //defining variables from the form
    //Ternary Operator: $variable = (condition) ? valueIfTrue : valueIfFalse;
    $firstName = isset($_POST["FirstName"]) ? $_POST["FirstName"] : "NOT PROVIDED";
    $lastName  = isset($_POST["LastName"]) ? $_POST["LastName"] : "NOT PROVIDED";
    $customer = isset($_POST["customer?"]) ? $_POST["customer?"] : "NOT PROVIDED";              
    $email = isset($_POST["email"]) ? $_POST["email"] : "NOT PROVIDED";
    $phone = isset($_POST["phone"]) ? $_POST["phone"] : "NOT PROVIDED";
    if (isset($_POST["contact_time"])) {   
        if(is_array($_POST["contact_time"])) {  
                //if checkboxes is an array, collapse it to a comma separated string
                $contact_time = implode(",",$_POST["contact_time"]);
             }else{                             
                //if not an array, just get the value
                $contact_time = $_POST["contact_time"];
             }
    } else {
        $contact_time = "NOT PROVIDED";
    }
    
    $reason = isset($_POST["reason"]) ? $_POST["reason"] : "NOT PROVIDED";
    $message = isset($_POST["message"]) ? $_POST["message"] : "NOT PROVIDED";

	//build header and text for body of email
    $header =   "eMail from: " . $firstName . " " . $lastName       . PHP_EOL .
              "Email address: " . $email . "  -  Phone: " . $phone  . PHP_EOL . PHP_EOL .
              "Customer: ". $customer                               . PHP_EOL .
              "Reason for contacting us: " . $reason                . PHP_EOL .
	          "Preferred contact time: " . $contact_time            . PHP_EOL . PHP_EOL .
              "-----------------------------------------------"     . PHP_EOL;
    
	$emailText = "On " . date("l, F jS, Y") . " at " . date("G:i") . ", " . 
                 $firstName . " " . $lastName . " wrote: "         . PHP_EOL . PHP_EOL . 
                 $message . PHP_EOL;
    
    
    //mail() function requires the message has lines not larger than 70 characters 
    $emailText = wordwrap($emailText, 70, "\r\n");
    
        
    //build subject of the email
    $emailSubject = "Website feedback from " . $firstName . " " . $lastName;
    
    //send email
    mail($toAddress, $emailSubject, $emailText, $header);
    
    
    //confirming correct submission
    echo "<p>Thank you " . $_POST['FirstName'] . " for submitting your request.<br>
         We will respond as soon as possible!</p>
    ";
	//put link on page to reset form
	echo '<br><p><a href="index.php">Back to Home</a></p>';
    
    
    
}
else 
{
    echo '
    
        <h2>Please fill the form below:</h2>
        <form action="' . THIS_PAGE . '" method="post"> 
    
            First name: <input type="text" name="FirstName" >
                Last name*: <input type="text" name="LastName" required ><br><br>
                
            <input type="radio" name="customer?" value="yes">Customer
            <input type="radio" name="customer?" value="no">Not Customer<br><br>

            Email*: <input type="email" name="email" required >
            Phone: <input type="tel" name="phone" placeholder="123 456 7890" ><br><br>
                
            Preferred contact time:
            <input id="contact_time[]" type="checkbox" name="contact_time[]" value="morning">8am-11am
            <input type="checkbox" name="contact_time[]" value="afternoon">11am-3pm
            <input type="checkbox" name="contact_time[]" value="evening">3pm-6pm<br><br>
            
            Reason for contacting us:<br>
            <select name="reason">
                <option value="NOT PROVIDED" > </option>
                <option value="tech_ass" > Technical Assistence </option>
                <option value="order" > Existing Order </option>
                <option value="new_customer" > New customer </option>
                <option value="info" > General Information </option>
            </select><br><br>

            Your message*:<br>
            <textarea name="message" placeholder="Please write here..." rows="5" cols="55" required></textarea> <br><br>
                        
            <input type="submit" name="submit" value="Submit" />
        </form>        
    ';
}


?>

