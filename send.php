<?php  
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])){
	
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$mesage = $_POST['message'];
	
	if(!empty($name) && !empty($phone) &&  !empty($email) && !empty($mesage)){
		
		$to = 'mail.venky542@gmail.com';
		$subject = 'Register';
		$message = '<html><body>';
		//$message = '<img src="images/logo.jpg">';
		$message .= '<table rules="all" style="border-color: #666;border: 1px solid" cellpadding="10">';
		$message .= "<tr><td><strong>First Name:</strong> </td><td>" . strip_tags($name) . "</td></tr>";
		$message .= "<tr><td><strong>Email: </strong> </td><td>" . strip_tags($email) . "</td></tr>";
		$message .= "<tr><td><strong>Contact No: </strong> </td><td>" . strip_tags($phone) . "</td></tr>";
		$message .= "<tr><td><strong>Message: </strong> </td><td>" . strip_tags($mesage) . "</td></tr>";
		$message .= "</table>";
		$message .= "</body></html>";
		//echo $message;

		//$body = "Last Name: ".$last_name."\n"."First Name: ".$first_name."\n"."Mobile: ".$countryCode." ".$mobile."\n"."Email Id: ".$email."\n"."Location: ".$location."\n"."Comment: ".$comment;
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: '.$email  . "\r\n";
		if(mail($to, $subject, $message, $headers)){
			// echo "success";
		 	echo "<script>
				alert('Success');
				location.href='index.html';
		 	</script>"; 

		 	//header('Location: contact-us.html');

		}else{
			// echo "failed";
			echo "<script>
				alert('Please Try Again....');
				location.href='contact-us.html';
		 	</script>";
		 	
			
		}
	}
		
}
?>