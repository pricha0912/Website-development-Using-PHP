<?php
	ob_start();
		include_once("init.php");
		filterURL($_SERVER['REQUEST_URI'], 'ADVANCED');
		if(!isset($msg)){$msg = '';}
		//start code
		//add
		if(isset($_POST['btnSubmit']))
		{
			$sel=mysqli_query($link, "select id from ".MEMBERS." where email='".realStrip($_POST['email'])."'");
			$chk=mysqli_fetch_array($sel);
			if($chk==''){
				$insertSql="INSERT INTO ".MEMBERS." SET 
					user_role		= 1,
					first_name		= '".realStrip($_POST['first_name'])."',
					middle_name		= '".realStrip($_POST['middle_name'])."',
					last_name		= '".realStrip($_POST['last_name'])."',
					email			= '".realStrip($_POST['email'])."',
					password		= '".realStrip($_POST['password'])."',
					dob				= '".realStrip($_POST['dob'])."',
					mobile			= '".realStrip($_POST['mobile'])."',
					alternative_no	= '".realStrip($_POST['alternative_no'])."',
					address			= '".realStrip($_POST['address'])."',
					created_date	= NOW()";
				$query=mysqli_query($link, $insertSql);		
				$id = mysqli_insert_id($link);
				//$_SESSION['USER_ID'] = $id;
				//start email section
				$from		= ADMIN_EMAIL; // sender
				$fromName	= DOMAIN_NAME;
				$to 		= $_POST['email'];
				$name		= $_POST['first_name'].' '.$_POST['last_name'];
				$mailArr 	= getEmail(1);
				$subject 	= $mailArr['email_subject'];
				$click		= '<a href="'.DOMAIN_SITE.'activate.php?id='.base64_encode($id).'">CLICK HERE</a>';
				$mail_body 	= str_replace(array("[NAME]", "[USERNAME]", "[PASSWORD]", "[CLICK]", "[THANK]"), array($name, $_POST['email'], $_POST['password'], $click, $fromName), $mailArr['email_body']);
				
				$ok = Send_HTML_Mail($to, $from, ADMIN_NAME, '', $subject, $mail_body);
				if($ok) {
					$msg="<label class='center-block text-center label-success'>You registered successfully with us, please check your registered email to activate your account.</label>";
				} else {
					$msg="<label class='center-block text-center label-danger'>There has been a mail error sending.</label>";
				}				
			}else{
				$msg="<label class='center-block text-center label-danger'>User already exits...</label>";
			}	
		}
		//end code
	ob_end_flush();
	//start header
	require_once(INCLUDES.'header.php');
?>
<link rel="stylesheet" type="text/css" href="<?php echo CSS.'datepicker.css'?>"/>
	<div class="gap"></div>
	<section class="container work-body">
		<div class="col-md-1"></div>
		<div class="col-md-7">
		<div class="row"><?php echo $msg?></div>
			<div class="well well-sm">
				<legend>SignUp Form Details</legend>
				<form action="" method="post" class="form" role="form">				 
					<div class="row">
						<div class="col-sm-4 col-md-4">
							<label for="" class="fnt_size">First Name*</label>
							<input class="form-control bottm_m" name="first_name"  type="text" required value="<?php echo $_POST['first_name']; ?>"/>
						</div>
						<div class="col-sm-4 col-md-4">
							<label for="" class="fnt_size">Middle Name</label>
							<input class="form-control bottm_m" name="middle_name" placeholder="" type="text" value="<?php echo $_POST['middle_name']; ?>"/>
						</div>
						<div class="col-sm-4 col-md-4">
							<label for="" class="fnt_size">Last Name*</label>
							 <input class="form-control bottm_m" name="last_name" placeholder="" type="text" required value="<?php echo $_POST['last_name']; ?>"/>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4 col-md-4">
							<label for="" class="fnt_size">Email ID*</label>
							<input class="form-control bottm_m" name="email" type="email" required value="<?php echo $_POST['email']; ?>"/>
						</div>
						<div class="col-sm-4 col-md-4">
                                <label for="" class="fnt_size">Password*</label>
                                <input class="form-control bottm_m" name="password" type="password" required value="<?php echo $_POST['password']; ?>"/>
                            </div>
						<div class="col-sm-4 col-md-4">
							<label for="" class="fnt_size">Date of Birth*</label>
							 <input class="form-control bottm_m" name="dob" placeholder="" type="text" id="datepicker" required value="<?php echo $_POST['dob']; ?>"/>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 col-md-6">
							<label for="" class="fnt_size">Mobile No*</label>
							<input class="form-control bottm_m" name="mobile"  type="text" required value="<?php echo $_POST['mobile']; ?>"/>
						</div>
						<div class="col-sm-6 col-md-6">
							<label for="" class="fnt_size">Alternative No</label>
							 <input class="form-control bottm_m" name="alternative_no" placeholder="" type="text" value="<?php echo $_POST['alternative_no']; ?>"/>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<label for="" class="fnt_size">Permanent Address</label>
							<textarea name="address" rows="" cols="" class="form-control bottm_m txt_box"><?php echo $_POST['address']; ?></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-12 terms">						
							<div class="checkbox">
								<label><input type="checkbox" name="agree" class="bottm_m chk_box" required /><span class="fnt_size">I Agree with <a href="privacy.html">Terms & Condition</a></span></label>
							</div>
						</div>
					</div>
					<div class="text-right"><button class="btn btn-md btn-primary pro_bgcolor" name="btnSubmit" type="submit">Submit</button></div>
				</form>
			</div>
        </div>
		<!--start banner-->
		
		 <!--end banner-->
		<div class="col-md-1"></div>
		<div class="work-gap"></div>
	</section>
	 <!--start footer-->
	<?php require_once(INCLUDES.'footer.php'); ?>
    <!--end footer-->
<!-- Calender Script Start -->
<script src="<?php echo FRONT_JS.'jquery-ui.min.js'; ?>"></script>
<script>
  $(document).ready(function() {
    $("#datepicker").datepicker({ dateFormat: 'yy-mm-dd' });
  });
</script>
<!-- Calender Script End -->