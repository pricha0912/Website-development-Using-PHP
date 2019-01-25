<?php
	ob_start();
		include_once("init.php");
		filterURL($_SERVER['REQUEST_URI'], 'ADVANCED');
		//start code
		//Lost Password
		$change_password = stringToInteger('', 6);
		if(isset($_POST['btnLostPassword']))
		{
			filterFORM($_POST, array('btnLostPassword'));
			$email			= $_POST['pemail'];
			$chkExist=mysqli_query($link, "select id, email, password, CONCAT(first_name,' ',last_name) AS full_name FROM ".MEMBERS." where email = '".realStrip($email)."' AND status = 1");
			if(mysqli_num_rows($chkExist)>0){
				$fd = mysqli_fetch_assoc($chkExist);
				$full_name	= $fd['full_name'];
				$email		= $fd['email'];
				
				//start email section
				$mailArr 	= getEmail(2);
				$subject 	= $mailArr['email_subject'];
				$mail_body 	= str_replace(array("[NAME]", "[USERNAME]", "[PASSWORD]", "[THANK]"), array($full_name, $fd['email'], $fd['password'], DOMAIN_NAME), $mailArr['email_body']);		
				$mail_Subject  = $full_name.', '.$subject;
				$ok = Send_HTML_Mail($email, ADMIN_EMAIL, ADMIN_NAME, '', $mail_Subject, $mail_body);
				if($ok) {
					mysql_query("UPDATE ".MEMBERS." SET password = $change_password WHERE email = '".realStrip($email)."' AND status = 1");
					$msg="<label class='center-block text-center label-success'>Password updated, please check your registered email for new password.</label>";
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
			}else{
				$msg="<label class='center-block text-center label-danger'>Your email address not exists!!!</label>";
			}
		}
		//end code
	ob_end_flush();
	//start header
	require_once(INCLUDES.'header.php');
?>
	<div class="gap"></div>
	<section class="container work-body">
		<div class="col-md-2"></div>
		<div class="col-md-5">
			<div class="panel panel-default">
				<div class="panel-heading">
					<strong>Forget Password?</strong>
				</div>
				<div class="panel-body">
					<form role="form"  method="POST">
						<fieldset>
							<div class="row">
								<div class="center-block text-center">
									<img class="profile-img bottm_m" src="images/photopng.png" alt="">
								</div>
							</div>
							<div class="row"><?php echo $msg?></div>
							<div class="row">
								<div class="col-sm-12 col-md-12   ">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-envelope"></i>
											</span> 
											<input class="form-control" placeholder="Email Adderss" name="pemail" type="email" required autofocus />
										</div>
									</div>
									<div class="form-group">
										<input type="submit" class="btn btn-lg btn-primary btn-block pro_bgcolor" name="btnLostPassword" value="Submit">
									</div>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
				<div class="panel-footer ">
					Back to <a href="login.php" > Log in</a>
				</div>
			</div>
		</div>
		<!--start banner-->
		<?php require_once(INCLUDES.'banner.php'); ?>
		 <!--end banner-->
		<div class="col-md-2"></div>
		<div class="clearfix"></div>
		<div class="work-gap"></div>
	</section>
	<!--start footer-->
	<?php require_once(INCLUDES.'footer.php'); ?>
    <!--end footer-->