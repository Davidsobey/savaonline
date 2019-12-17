<?php
if (isset($_REQUEST['firstname'],$_REQUEST['email'])) {
      
    $beard = $_REQUEST['beard'];
	$hobbies = $_REQUEST['hobbies'];
    $shoesize = $_REQUEST['shoesize'];
    $tshirt = $_REQUEST['tshirt'];
    $Pants = $_REQUEST['Pants'];
    $LOW = $_REQUEST['LOW'];
    $AoS = $_REQUEST['AoS'];
	$Drink = $_REQUEST['Drink'];
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];

    $message = "Beard: ".$beard." \r\n 
    Hobbies: ".$hobbies." \r\n
    Shoesize: ".$shoesize." \r\n
    T-Shirt: ".$tshirt." \r\n
    Pants: ".$Pants." \r\n
    Line of Work: ".$LOW." \r\n
    Apple/Samsung: ".$AoS." \r\n
    Drink: ".$Drink." \r\n
    Firstname: ".$firstname." \r\n
    Lastname: ".$lastname." \r\n
    Email: ".$email." \r\n
    Phone: ".$phone." \r\n";
    // Set you  r email address where you want to receive emails. 
    $to = 'aman@savaonline.com';
      
    $subject = 'SAVA:  Client Request has been made';
    $headers = "From: ".$firstname." <".$email."> (".$phone.") \r\n";
      
    $send_email = mail($to,$subject,$message,$headers);
    $newURL = '../index.html';
    header('Location: '.$newURL);
}
?>