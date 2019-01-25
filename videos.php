<?php
	ob_start();
		include_once("init.php");
		filterURL($_SERVER['REQUEST_URI'], 'ADVANCED');
		validation_check($_SESSION['USER_ID'], SITE_HOME, array('1'));
		if(!isset($msg)){$msg = '';}
		//start code
		$qryVd = mysqli_query($link, "SELECT * FROM ".VIDEOS." WHERE status=1");
		$numVd = mysqli_num_rows($qryVd);
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
			<div class="well">
				<div class="row">
					<?php
						if($numVd > 0)
						{
							while($vds = mysqli_fetch_assoc($qryVd))
							{
					?>
					<div class="col-sm-6 col-md-6 bottm_m">
						<?php echo $vds['video']; ?>
					</div>
				
				<?php
						}
					}
				?>
				</div>
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