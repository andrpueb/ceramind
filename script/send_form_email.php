<?php
if (isset($_REQUEST['submitted'])) {
    // Initialize error array.
    $errors = array();
    // Check for a proper First name
    if (!empty($_REQUEST['firstname'])) {
        $firstname = $_REQUEST['firstname'];
        $pattern = "/^[a-zA-Z0-9\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
        if (preg_match($pattern,$firstname)){ $firstname = $_REQUEST['firstname'];}
        else{ $errors[] = 'Your Name can only contain _, 1-9, A-Z or a-z 2-20 long.';}
    } else {$errors[] = 'You forgot to enter your First Name.';}

    // Check for a proper Last name
    if (!empty($_REQUEST['lastname'])) {
        $lastname = $_REQUEST['lastname'];
        $pattern = "/^[a-zA-Z0-9\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
        if (preg_match($pattern,$lastname)){ $lastname = $_REQUEST['lastname'];}
        else{ $errors[] = 'Your Name can only contain _, 1-9, A-Z or a-z 2-20 long.';}
    } else {$errors[] = 'You forgot to enter your Last Name.';}

    //Check for a valid phone number
    if (!empty($_REQUEST['phone'])) {
        $phone = $_REQUEST['phone'];
        $pattern = "/^[0-9\_]{7,20}/";
        if (preg_match($pattern,$phone)){ $phone = $_REQUEST['phone'];}
        else{ $errors[] = 'Your Phone number can only be numbers.';}
    } else {$errors[] = 'You forgot to enter your Phone number.';}

}
//End of validation

if (isset($_REQUEST['submitted'])) {
    if (empty($errors)) {
        $from = "http://ceramind.co/"; //Site name
        // Change this to your email address you want to form sent to
        $to = "andresfpuentes@gmail.com";
        $subject = "Admin - Our Site! Comment from " . $name . "";

        $message = "Message from " . $firstname . " " . $lastname . "
  Phone: " . $phone . "
  Red Maple Acer: " . $check1 ."
  Chinese Pistache: " . $check2 ."
  Raywood Ash: " . $check3 ."";
        mail($to,$subject,$message,$from);
    }
}
?>

<?php
//Print Errors
if (isset($_REQUEST['submitted'])) {
    // Print any error messages.
    if (!empty($errors)) {
        echo '<hr /><h3>The following occurred:</h3><ul>';
        // Print each error.
        foreach ($errors as $msg) { echo '<li>'. $msg . '</li>';}
        echo '</ul><h3>Your mail could not be sent due to input errors.</h3><hr />';}
    else{echo '<hr /><h3 align="center">Your mail was sent. Thank you!</h3><hr /><p>Below is the message that you sent.</p>';
         echo "Message from " . $firstname . " " . $lastname . " <br />Phone: ".$phone." <br />";
         echo "<br />Red Maple Acer: " . $check3 . "";
         echo "<br />Chinese Pistache: " . $check2 . "";
         echo "<br />Raywood Ash: " . $check3 . "";
        }
}
//End of errors array
?>
