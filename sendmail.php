<?php
	$headers = 'From: Lorem Test <example@example.com>' . "\r\n";

	if($_POST['name']!='' || $_POST['phone']!='' || $_POST['message']!=''){

		$message = 'Name: '.$_POST['name'].'\r\nPhone: '.$_POST['phone']."\r\nMessage: ".$_POST['message'];

		if(mail('test@test.com', 'From User', $message ,$headers)){
			echo "true";
		}
		else { echo "false";}
	}
	else {echo "false";}

?>