<?php
error_reporting(0);
if(!empty($_POST)){

     $headers = "MIME-Version: 1.0" . "\n";
	 $headers .= "Content-type:text/html;charset=UTF-8" . "\n";
	 $headers .="From:contact@thirdeyeinfo.com";


	$name = $_POST['fullname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$web_addr = $_POST['website_addr'];
	$msg = $_POST['message'];

	
        
     $file = file_get_contents("email-temp.html");
	 $file = str_replace("contact-name", $name, $file);
	 $file = str_replace("contact-email", $email, $file);
	 $file = str_replace("contact-phone", $phone, $file);
	 $file = str_replace("contact-web_addr", $web_addr, $file); 
 	 $file = str_replace("contact-message", $msg, $file);

 	  $user_file = file_get_contents("autorespond-email-temp.html");
	 $user_file = str_replace("name", $name, $user_file);


	

	$subject = "Contact us form details";
	//$message = "Name: ".$name."\n Email: ".$email."\n Phone: ".$phone."\n Message: ".$msg."\n Quotation: ".$quotation;

	// if(mail("aaa.com", $subject, $file, $headers)) {
	//mail( to, subject, message, headers, parameters );

	//mail("aaa.com", $subject, $message);
	if(mail("contact@thirdeyeinfo.com", $subject, $file, $headers)) {
 		if(mail($email, "Thank you for contacting us.", $user_file, $headers)){
 		echo json_encode(array("response"=>true));
 		}
 		else{
 		echo json_encode(array("response"=>true));
 		}
	} else {
 		echo json_encode(array("response"=>false));
 	}
 } else {
    echo json_encode(array("response"=>false));
}
?>