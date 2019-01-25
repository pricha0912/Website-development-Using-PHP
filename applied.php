<?php
	ob_start();
		include_once("init.php");
		validation_check($_SESSION['USER_ID'], SITE_HOME, array('1'));
		filterURL($_SERVER['REQUEST_URI'], 'ADVANCED');
		//start code
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
			<div class="well well-sm">
				<legend>Applied for Universities</legend>
				<form action="#" method="post" class="form" role="form">	
								
					<table class="table table-bordered">
					<?php
						//fetch university
						$qryUniv = mysqli_query($link, "SELECT * FROM ".APPLY." WHERE apply_for=1 AND member_id = '".$_SESSION['USER_ID']."' ORDER BY created_date DESC");
						$numUniv = mysqli_num_rows($qryUniv);
						if($numUniv > 0)
						{
					?>	
						<thead>
						  <tr>
							<th>University Name</th>
							<th>Date</th>
							<th>Status</th>
						  </tr>
						</thead>
						<tbody>
						<?php
							while($univ = mysqli_fetch_assoc($qryUniv))
							{
						?>	
						  <tr>
							<td><?php echo fetchValById('id='.$univ['f_id'], UNIV, 'name'); ?></td>
							<td><?php echo date('d/m/Y H:i a', strtotime($univ['created_date'])); ?></td>
							<td><?php echo $univ['status']==1 ? 'Applied' : '<button class="btn btn-md btn-primary pro_bgcolor" name="btnSubmit" type="button">Pay Now</button>'; ?></td>
						  </tr>
						  <?php } ?>
						</tbody>
					<?php 
						} 
						else
						{
							echo '<tr><td>No applied found for university.</td></tr>';
						}
					?>
				  </table>
				</form>
			</div>
			<div class="well well-sm">
				<legend>Applied for Ads</legend>
				<form action="#" method="post" class="form" role="form">				 
					<table class="table table-bordered">
						<?php
							//fetch ads
							$qryAds = mysqli_query($link, "SELECT * FROM ".APPLY." WHERE apply_for=2 AND member_id = '".$_SESSION['USER_ID']."' ORDER BY created_date DESC");
							$numAds = mysqli_num_rows($qryAds);
							if($numAds > 0)
							{
						?>	
						<thead>
						  <tr>
							<th>Ad Name</th>
							<th>Applied For</th>
							<th>Status</th>
						  </tr>
						</thead>
						<tbody>
						<?php
							while($aads = mysqli_fetch_assoc($qryAds))
							{
						?>	
						 <tr>
							<td><?php echo fetchValById('id='.$aads['f_id'], ADVERT, 'title'); ?></td>
							<td><?php echo date('d/m/Y H:i a', strtotime($aads['created_date'])); ?></td>
							<td><?php echo $aads['status']==1 ? 'Approved' : 'Applied'; ?></td>
						  </tr>
						  <?php } ?>
						</tbody>
					<?php 
						} 
						else
						{
							echo '<tr><td>No applied found for Ads.</td></tr>';
						}
					?>
				  </table>
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