<!--Start header-->
<?php
	ob_start();
		include_once("init.php");
		filterURL($_SERVER['REQUEST_URI'], 'ADVANCED');
		//start code
		//fetch cms
		$cms = getCMS(3);
		//end code
	ob_end_flush();
	//start header
	require_once(INCLUDES.'header.php');
?>
<!--end header-->
	<div class="clearfix"></div>
    <div class="work-gap"></div>
	<div class="teach margin">
		<div class="container">
			<div class="row" >
				<div class="col-md-12 nopadding">
					<div class="col-md-9" id="">
						<div class="media ">
							<div class="media-left media-middle">
							</div>
							<div class="media-body">
							  <h4 class="media-heading"><?php echo $cms['title']; ?></h4>
							  <p><?php echo $cms['description']; ?></p>
							</div>
						</div>
					</div>
                    <!--start banner-->
					<?php require_once(INCLUDES.'banner.php'); ?>
                     <!--end banner-->
                    					
				</div>
			</div>
		</div>
	</div>
	 <!--start footer-->
	<?php require_once(INCLUDES.'footer.php'); ?>
    <!--end footer-->