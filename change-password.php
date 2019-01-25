<?php
	//start code
    ob_start();
		include_once("init.php");
		filterURL($_SERVER['REQUEST_URI'], 'ADVANCED');
		validation_check($_SESSION['USER_ID'], SITE_HOME, array('1'));
		if(!isset($msg)){$msg = '';}
		if(isset($_POST['btnSubmit']))
		{
			filterFORM($_POST, array('btnSubmit'));
			$oldPassword = $_POST['oldPassword'];
			$selPage=mysqli_query($link, "select id from ".MEMBERS." where password='".realStrip($oldPassword)."' AND id = '" .$_SESSION['USER_ID']."'");
			if(mysqli_num_rows($selPage)>0){
				$password = $_POST['newPassword'];
				$admin_upd_sql="UPDATE ".MEMBERS." SET password ='".realStrip($password)."' WHERE id = '" .$_SESSION['USER_ID']."'";
				mysqli_query($link, $admin_upd_sql) or die(mysql_error()." Error in pasword updation.");
				$msg="<label class='center-block text-center label-success'>Please check your current password to change it.</label>";
			}else{
				$msg="<label class='center-block text-center label-danger'>Your old password is wrong.</label>";
			}
		}
	ob_end_flush();
	//end code
    //start header
    require_once(INCLUDES.'header.php');
?>
<script language="JavaScript" type="text/javascript">
function check(form)
{
	var minsize = 5;			//minlength for password
	var maxsize = 20;			//maxlength for password
	var upassID=form.newPassword;
	var upass_string = upassID.value;
	
		
	var x1 = /^[a-z\d]{6,14}$/i // only alphanumerics, and length 6-10
	var x2 = /[a-z]/i           // a letter present
	var x3 = /\d/               // a digit present

	if($("#oldPassword").val()=='')
	{
		alert('Please enter old password.');
		$("#oldPassword").focus();
		return false;
	}
	if($("#newPassword").val()=='')
	{
		alert('Please enter old password');
		$("#newPassword").focus();
		return false;
	}
	if (upassID.value.length > maxsize) 
	{
		alert('Password length exceed 20 chracters.');
		$("#newPassword").focus();
		return false;
	}
	if (upassID.value.length < minsize) 
	{
		alert('Password length less than 5 chracters.');
		$("#newPassword").focus();
		return false;
	}
	
	//**************************** End ***********************************\\
	if($("#confPassword").val()=='')
	{
		alert('Please enter confirm password.');
		$("#confPassword").focus();
		return false;
	}
	if($("#newPassword").val()!=$("#confPassword").val())
	{
		alert('Password does not match');
		$("#newPassword").focus();
		return false;
	}
	return true;
}
</script>

	<div class="gap"></div>
	<section class="container work-body">
		<!--Start header-->
            <?php require_once(INCLUDES.'menu.php'); ?>
        <!--end menu-->
		<div class="col-md-6 no_bg">
			<div class="row"><?php echo $msg?></div>
			<h3 class="mrgn_top mrgn_bttm">Change Password</h3>
			<div class="lnd">          
				<form action="<?php echo basename($_SERVER['PHP_SELF']);?>" method="post" class="form" role="form" onSubmit="return check(this);">
					 <label for="">Old Password</label>
					 <input class="form-control" name="oldPassword" id="oldPassword" placeholder="" type="password"/>
					 <label for="">New Password</label>
					 <input class="form-control" name="newPassword" id="newPassword" placeholder="" type="password"/>
					 <label for="">Confirm Password</label>
					 <input class="form-control bottm_m" name="confPassword" id="confPassword" placeholder="" type="password"/>	
					 <div class="text-right"><button class="btn btn-md btn-primary pro_bgcolor" name="btnSubmit" type="submit">Update</button></div>
				</form>
			</div>
        </div>
		<!--Start footer-->
		<?php require_once(INCLUDES.'banner.php'); ?>
		<!--end footer-->
		<div class="clearfix"></div>
		<div class="work-gap"></div>
	</section>
	<!--Start footer-->
<?php require_once(INCLUDES.'footer.php'); ?>
<!--end footer-->