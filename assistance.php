<?php
	ob_start();
		include_once("init.php");
		filterURL($_SERVER['REQUEST_URI'], 'ADVANCED');
		//start code
		//fetch cms
		$cms = getCMS(2);
		//Send
		if(isset($_POST['btnSend']))
		{
			filterFORM($_POST, array('btnSend'));

			$name		= $_POST['txtName'];
			$email		= $_POST['txtEmail'];
			$subject	= $_POST['txtSubject'];
			$message	= $_POST['message'];
				
			//start email section
			$mail_body 	= $message;		
			$mail_Subject  = $name.', '.$subject;
			$ok = Send_HTML_Mail(ADMIN_EMAIL, $email, $name, '', $mail_Subject, $mail_body);
			if($ok) {
				$msg="<label class='center-block text-center label-success'>Your message sent successfully, we will reply you soon.</label>";
			} else {
				$msg="<label class='center-block text-center label-danger'>Something is to send email for new password. Try Again..</label>";
			}
			/*$mail->Mailer 	= 'smtp';
			$mail->AddAddress($email, $full_name);
			$mail->Subject  = $full_name.', '.$subject;
			$mail->Body    	= $mail_body;
			$mail->MsgHTML($mail_body);
			$mail->IsHTML(true);
			if(!$mail->Send())
				$msg="<label class='center-block text-center label-danger'>Something is to send email for new password. Try Again..</label>";
			else
				mysql_query("UPDATE ".MEMBERS." SET password = $change_password WHERE email = '".realStrip($email)."' AND status = 1");
				$msg="<label class='center-block text-center label-success'>Password updated, please check your registered email for new password.</label>";
			$mail->ClearAddresses();*/
		}
		//end code
	ob_end_flush();
	//start header
	require_once(INCLUDES.'header.php');
?>
	<div class="gap"></div>
	<section class="container work-body">
		<div class="col-md-12">
			<h2>CONTACT US</h2>
		</div>
		 <div class="col-md-6">
            <div class="well well-sm">
                <form method="post" action="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name*</label>
                            <input type="text" name="txtName" class="form-control" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
							<label>Email Address*</label>
							<input type="email" name="txtEmail" class="form-control"  placeholder="Enter email" required="required" />
                        </div>
                        <div class="form-group">
							<label>Subject*</label>
							<input type="text" name="txtSubject" class="form-control"  placeholder="Enter subject" required="required" />
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Message*</label>
                            <textarea name="message" id="message" class="form-control msg_box" required="required" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right pro_bgcolor" name="btnSend">Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-3">
            <form>
            <legend><img src="images/Globe-32.png" width="25" height="25" border="0" alt="" class="m_all"> <?php echo $cms['title']?></legend>
            <?php echo $cms['description']?>
            </form>
        </div>
		<!--start banner-->
		<?php require_once(INCLUDES.'banner.php'); ?>
		 <!--end banner-->
		<div class="clearfix"></div>
		<div class="work-gap"></div>
	</section>
	<!--start footer-->
	<?php require_once(INCLUDES.'footer.php'); ?>
    <!--end footer-->