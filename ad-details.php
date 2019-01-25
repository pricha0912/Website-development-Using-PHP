<?php
	ob_start();
		include_once("init.php");
		filterURL($_SERVER['REQUEST_URI'], 'ADVANCED');
		//start code
		
		//fetch Ad details
		$ad_details = mysqli_fetch_assoc(mysqli_query($link, "SELECT * FROM ".ADVERT." WHERE status=1 AND id='".$_GET['id']."'"));
		//fetch student details
		$sqlShow="SELECT * FROM ".MEMBERS." WHERE id='".$_SESSION['USER_ID']."'";
		$query=mysqli_query($link, $sqlShow);
		$ft=mysqli_fetch_array($query);
		//apply
		if(isset($_POST['btnSubmit']))
		{
			$sel=mysqli_query($link, "select id from ".APPLY." where f_id='".$_POST['univ_id']."' AND member_id = '".$_SESSION['USER_ID']."' AND apply_for = 2");
			$chk=mysqli_fetch_array($sel);
			if($chk==''){
				$name = $ft['first_name'].' '.$ft['middle_name'].' '.$ft['last_name'];
				$qry="INSERT INTO ".APPLY." SET 
					apply_for		= 2,
					f_id			= '".$_GET['id']."',
					member_id		= '".$_SESSION['USER_ID']."',
					name			= '".realStrip($name)."',
					dob				= '".$ft['dob']."',				
					phone			= '".realStrip($ft['mobile'])."',
					address			= '".realStrip($ft['address'])."',
					created_date	= NOW()";
				$query=mysqli_query($link, $qry);		
				$msg="<label class='center-block text-center label-success'>Your apply has been successfully submitted.</label>";
			}else{
				$msg="<label class='center-block text-center label-danger'>You already applied for this Ads...</label>";
			}	
		}
		//end code
	ob_end_flush();
	//start header
	require_once(INCLUDES.'header.php');
?>
	<div class="gap"></div>
	<section class="container work-body">
		<!--start menu-->
		<?php require_once(INCLUDES.'menu.php'); ?>
		<!--end menu-->
		<div class="col-md-6">
			<div class="row"><?php echo $msg?></div>
			<div class="well well-sm">
				<legend>Apply For The Ads</legend>
				
				<form action="" method="post" class="form" role="form">	
				<div class="text-right"><button class="btn btn-md btn-primary pro_bgcolor1" name="btnSubmit" type="submit">Apply</button></div>
					<div class="media ">
						<div class="media-body">
						
						  <h4 class="media-heading"><?php echo $ad_details['title']; ?></h4>
						  <p><img src="<?php echo ADS.$ad_details['image']; ?>" alt="" /></p>
						  <p><?php echo $ad_details['description']; ?></p>
						</div>
					</div>
				<div class="text-right"><button class="btn btn-md btn-primary pro_bgcolor1" name="btnSubmit" type="submit">Apply</button></div>
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