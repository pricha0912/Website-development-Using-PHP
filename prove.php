<?php
$to = "hemraj99@gmail.com";
$subject= "Transfer - Got admission letter";
$todayis = date("l, F j, Y, g:i a") ;
$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];
$comments = $_REQUEST["comments"];
$message = 'I authorize GoodWind to represent my admission to university. I have accepted the terms and condition = I Agree';

$message = "
Applied Date:  $todayis

Name:          $name

Email:         $email

Phone:         $phone

Message:       $comments

Approval:      $message
";

  $mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";

	      $headers = "From: $email\r\n" .
	      "MIME-Version: 1.0\r\n" .
		   "X-Mailer: www.pegasusdesignhouse.com; \r\n" . 
                 "Reply-To: $email\n" .
	         "Content-Type: multipart/mixed;\r\n" .
	         " boundary=\"{$mime_boundary}\"";

	      $message = "This is a multi-part message in MIME format.\n\n" .
	         "--{$mime_boundary}\n" .
	         "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
	         "Content-Transfer-Encoding: 7bit\n\n" .
	      $message . "\n\n";

	      foreach($_FILES as $userfile)
	      {
	         $tmp_name = $userfile['tmp_name'];
	         $type = $userfile['type'];
	         $name = $userfile['name'];
	         $size = $userfile['size'];

	         if (file_exists($tmp_name))
	         {
	            if(is_uploaded_file($tmp_name))
	            {
	               $file = fopen($tmp_name,'rb');

	               $data = fread($file,filesize($tmp_name));

	               fclose($file);


	               $data = chunk_split(base64_encode($data));
	            }

	            $message .= "--{$mime_boundary}\n" .
	               "Content-Type: {$type};\n" .
	               " name=\"{$name}\"\n" .
	               "Content-Disposition: attachment;\n" .
	               " filename=\"{$fileatt_name}\"\n" .
	               "Content-Transfer-Encoding: base64\n\n" .
	            $data . "\n\n";
	         }
	      }

	      $message.="--{$mime_boundary}--\n";

if (mail($to, $subject, $message, $headers))
	{
?>
<script language="javascript" type="text/javascript">
<!--

	alert("Your Mail has been sent Successfully!");

	document.location = "admission.html";

-->
</script>
<?
	}

	else
	{
?>
<script language="javascript" type="text/javascript">
<!--

	alert("Your Mail has not been sent due to an ERROR. Please try again.");

	document.location = "admission.html";

-->
</script>
<?
	}
?>