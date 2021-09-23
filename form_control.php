<?php
	$name = $_POST['name'];
	$visitor_emai = $_POST['email'];
	$telephone = $_POST['telephone'];
	$message = $_POST['message'];

	$email_form = 'sagar.wpe@gmail.com';

	$email_subject = 'New Form Subbmission';

	$email_body = "User Name: $name.\n";
				   "User Email: $visitor_email.\n";
				   "User Telephone: $telephone.\n";
				   "User_message: $message.\n";

		$to = "sagarkhandakar00@gmail.com";

		$headers = "Form: $email_form\r\n";

		mail($to,$email_subject,$email_body,$headers);

		header("Location: index.html")
?>