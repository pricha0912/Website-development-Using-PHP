<?php
	ob_start();
		include_once("init.php");
		filterURL($_SERVER['REQUEST_URI'], 'ADVANCED');
		validation_check($_SESSION['USER_ID'], SITE_HOME, array('1'));
		if(!isset($msg)){$msg = '';}
		//start code
		//add
		if(isset($_POST['btnSubmit']))
		{
			$sel=mysqli_query($link, "select id from ".MEMBERS." where email='".realStrip($_POST['email'])."' AND id <> '".$_SESSION['USER_ID']."'");
			$chk=mysqli_fetch_array($sel);
			if($chk==''){
				$qry="UPDATE ".MEMBERS." SET 
					first_name		= '".realStrip($_POST['first_name'])."',
					middle_name		= '".realStrip($_POST['middle_name'])."',
					last_name		= '".realStrip($_POST['last_name'])."',
					email			= '".realStrip($_POST['email'])."',
					password		= '".realStrip($_POST['password'])."',
					dob				= '".realStrip($_POST['dob'])."',
					mobile			= '".realStrip($_POST['mobile'])."',
					alternative_no	= '".realStrip($_POST['alternative_no'])."',
					address			= '".realStrip($_POST['address'])."',
					updated_date	= NOW()
					WHERE id		= '".$_SESSION['USER_ID']."'";
				$query=mysqli_query($link, $qry);		
				$msg="<label class='center-block text-center label-success'>User has been successfully inserted.</label>";
			}else{
				$msg="<label class='center-block text-center label-danger'>User already exits...</label>";
			}	
		}
		//fetch record for edit/view
		$sqlShow="SELECT * FROM ".MEMBERS." WHERE id='".$_SESSION['USER_ID']."'";
		$query=mysqli_query($link, $sqlShow);
		$ft=mysqli_fetch_array($query);
		//end code
	ob_end_flush();
	//start header
	require_once(INCLUDES.'header.php');
?>
<link rel="stylesheet" type="text/css" href="<?php echo CSS.'datepicker.css'?>"/>
	<div class="gap"></div>
	<section class="container work-body">
	<!--start menu-->
	<?php require_once(INCLUDES.'menu.php'); ?>
    <!--end menu-->
		
		<div class="col-md-6">
			 <div class="row"><?php echo $msg?></div>
			<div class="well well-sm">
				<legend>Update Your Account</legend>
				<form action="" method="post" class="form" role="form">				 
					<div class="row">
						<div class="col-sm-4 col-md-4">
							<label for="" class="fnt_size">First Name*</label>
							 <input class="form-control bottm_m" name="first_name"  type="text" required value="<?php echo $ft['first_name']!='' ? $ft['first_name'] : $_POST['first_name']; ?>"/>
						</div>
						<div class="col-sm-4 col-md-4">
							<label for="" class="fnt_size">Middle Name</label>
							 <input class="form-control bottm_m" name="middle_name" placeholder="" type="text" value="<?php echo $ft['middle_name']!='' ? $ft['middle_name'] : $_POST['middle_name']; ?>"/>
						</div>
						<div class="col-sm-4 col-md-4">
							<label for="" class="fnt_size">Last Name*</label>
							<input class="form-control bottm_m" name="last_name" placeholder="" type="text" required value="<?php echo $ft['last_name']!='' ? $ft['last_name'] : $_POST['last_name']; ?>"/>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 col-md-6">
							<label for="" class="fnt_size">Email ID*</label>
							 <input class="form-control bottm_m" name="email" type="email" required value="<?php echo $ft['email']!='' ? $ft['email'] : $_POST['email']; ?>"/>
						</div>
						<div class="col-sm-6 col-md-6">
							<label for="" class="fnt_size">Password*</label>
							 <input class="form-control bottm_m" name="password" type="text" required value="<?php echo $ft['password']!='' ? $ft['password'] : $_POST['password']; ?>"/>
						</div>
						
					</div>
					<div class="row">
						<div class="col-sm-4 col-md-4">
							<label for="" class="fnt_size">Date of Birth</label>
							<input class="form-control bottm_m" name="dob" placeholder="" type="text" id="datepicker" required value="<?php echo $ft['dob']!='' ? $ft['dob'] : $_POST['dob']; ?>"/>
						</div>
						<div class="col-sm-4 col-md-4">
							<label for="" class="fnt_size">Mobile No*</label>
							<input class="form-control bottm_m" name="mobile"  type="text" required value="<?php echo $ft['mobile']!='' ? $ft['mobile'] : $_POST['mobile']; ?>"/>
						</div>
						<div class="col-sm-4 col-md-4">
							<label for="" class="fnt_size">Alternative No</label>
							 <input class="form-control bottm_m" name="alternative_no" placeholder="" type="text" value="<?php echo $ft['alternative_no']!='' ? $ft['alternative_no'] : $_POST['alternative_no']; ?>"/>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<label for="" class="fnt_size">Permanent Address</label>
							<textarea name="address" rows="" cols="" class="form-control bottm_m txt_box"><?php echo $ft['address']!='' ? $ft['address'] : $_POST['address']; ?></textarea>
						</div>
					</div>
					<div class="text-right"><button class="btn btn-md btn-primary pro_bgcolor1" name="btnSubmit" type="submit">Update</button></div>
				</form>
			</div>
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
	<!-- Calender Script Start -->
<script src="<?php echo FRONT_JS.'jquery-ui.min.js'; ?>"></script>
<script>
  $(document).ready(function() {
    $("#datepicker").datepicker({ dateFormat: 'yy-mm-dd' });
  });
</script>
<!-- Calender Script End -->