<?php
	//start code
    ob_start();
		include_once("init.php");
		filterURL($_SERVER['REQUEST_URI'], 'ADVANCED');
		if(!isset($msg)){$msg = '';}
		if(isset($_POST['btnSubmit']))
		{
			filterFORM($_POST, array('btnSubmit'));
			$login_sql="SELECT id, user_role FROM ".MEMBERS." WHERE email = '".$_POST['email']."'  AND  password= '".$_POST['password']."' AND user_role=1 AND status=1";
			$login_qry=mysqli_query($link, $login_sql) or die(mysql_error()." Error in Login");
	
			if(mysqli_num_rows($login_qry))
			{
				$login_row=mysqli_fetch_array($login_qry);
				$_SESSION['USER_ID']=$login_row['id'];
				$_SESSION['USER_ROLE']=$login_row['user_role'];
				header('location: apply-university.php');
			}
			else
			{
				$msg="<label class='center-block text-center label-danger'>Invalid Login or Password.</label>";
			}
		}
	ob_end_flush();
	//end code
    //start header
    require_once(INCLUDES.'header.php');
?>
	<div class="gap"></div>
	<section class="container work-body">	
		<div class="col-md-2"></div>
		<div class="col-md-5">
		<div class="row"><?php echo $msg?></div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<strong> Sign in to continue</strong>
				</div>
				<div class="panel-body">
					<form role="form" action="" method="POST">
						<fieldset>
							<div class="row">
								<div class="center-block text-center">
									<img class="profile-img bottm_m"
										src="images/photopng.png" alt="">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12 col-md-12   ">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-envelope"></i>
											</span> 
											<input class="form-control" placeholder="Email Address" name="email" type="email" autofocus required />
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-key"></i>
											</span>
											<input class="form-control" placeholder="Password" name="password" type="password" value="" required />
										</div>
									</div>
									<!--<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-key"></i>
											</span>
											<input class="form-control" placeholder="Confirm Password" name="password" type="password" value="">
										</div>
									</div>-->
									<div class="form-group">
										<input type="submit" class="btn btn-lg btn-primary btn-block pro_bgcolor" name="btnSubmit" value="Log in">
									</div>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
				<div class="panel-footer ">
					<a href="forget-password.php" >Forget Password? </a>
				</div>
			</div>
		</div>		
		<!--start banner-->
		
		 <!--end banner-->
		<div class="col-md-2"></div>
		<div class="clearfix"></div>
		<div class="work-gap"></div>
	</section>
	<!--start footer-->
	<?php require_once(INCLUDES.'footer.php'); ?>
    <!--end footer-->