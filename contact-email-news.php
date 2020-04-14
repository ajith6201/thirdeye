<?php
error_reporting(0);
if(!empty($_POST)){

     $headers = "MIME-Version: 1.0" . "\n";
	 $headers .= "Content-type:text/html;charset=UTF-8" . "\n";
	 $headers .="From:contact@thirdeyeinfo.com";


	$name = $_POST['fullname'];
	$email = $_POST['email'];

	
        
     $file = file_get_contents("email-temp-news.html");
	 $file = str_replace("contact-name", $name, $file);
	 $file = str_replace("contact-email", $email, $file);

 	  $user_file = file_get_contents("autorespond-email-temp-news.html");
	 $user_file = str_replace("name", $name, $user_file);


	

	$subject = "Newsletter Subscriber";
	//$message = "Name: ".$name."\n Email: ".$email;

	// if(mail("aaa.com", $subject, $file, $headers)) {
	//mail( to, subject, message, headers, parameters );

	//mail("aaa.com", $subject, $message);
	if(mail("contact@thirdeyeinfo.com", $subject, $file, $headers)) {
 		if(mail($email, "Thanks for subscribing to our newsletter", $user_file, $headers)){
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