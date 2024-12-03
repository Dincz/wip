<?php 
$to = "admin@wipindia.com"; // this is your Email address
$from = $_POST['email']; // this is the sender's Email address
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$subject = "Westerninfra: Website Inquiry";

$message = "Name: ".$first_name . " \n" ."Phone: ". $last_name . "\n" ."Email: ". $email . "\n" . $_POST['message'];


$headers = "From:" . $from;
$headers2 = "From:" . $to;
mail($to,$subject,$message,$headers);
mail($from,$headers2); // sends a copy of the message to the sender
echo "<p style='color:green;text-align: center;'>Thank You, we have registered your enquiry. we will get in touch with you shortly.</p> ";
header( "refresh:5;url=index.php" );
// You can also use header('Location: thank_you.php'); to redirect to another page.
?>