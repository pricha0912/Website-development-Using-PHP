<?php
	ob_start();
		include_once("init.php");
		filterURL($_SERVER['REQUEST_URI'], 'ADVANCED');
		validation_check($_SESSION['USER_ID'], SITE_HOME, array('1'));
		if(!isset($msg)){$msg = '';}
		//start code
		$where = ' WHERE status=1';
		if(isset($_POST['univ_id']) && $_POST['univ_id']!=''){
			$where .= ($where!= "" ? " AND " : " WHERE ") ."id ='".realStrip($_POST['univ_id'])."'";
		} if(isset($_POST['stream_id']) && $_POST['stream_id']!=''){
			$where .= ($where!= "" ? " AND " : " WHERE ") ."stream_id ='".realStrip($_POST['stream_id'])."'";
		} if(isset($_POST['passing_year']) && $_POST['passing_year']!=''){
			$where .= ($where!= "" ? " AND " : " WHERE ") ."passing_year ='".realStrip($_POST['passing_year'])."'";
		} if(isset($_POST['qualification_id']) && $_POST['qualification_id']!=''){
			$where .= ($where!= "" ? " AND " : " WHERE ") ."qualification_id ='".realStrip($_POST['qualification_id'])."'";
		} if(isset($_POST['marks']) && $_POST['marks']!=''){
			$where .= ($where!= "" ? " AND " : " WHERE ") ."marks ='".realStrip($_POST['marks'])."'";
		} if(isset($_POST['division_id']) && $_POST['division_id']!=''){
			$where .= ($where!= "" ? " AND " : " WHERE ") ."division_id ='".realStrip($_POST['division_id'])."'";
		} if(isset($_POST['country_id']) && $_POST['country_id']!=''){
			$where .= ($where!= "" ? " AND " : " WHERE ") ."country_id ='".realStrip($_POST['country_id'])."'";
		} if(isset($_POST['zone_id']) && $_POST['zone_id']!=''){
			$where .= ($where!= "" ? " AND " : " WHERE ") ."zone_id ='".realStrip($_POST['zone_id'])."'";
		}
		$num_results = mysqli_num_rows(mysqli_query($link, "SELECT id FROM ".UNIV.$where));
		$results_per_page = RESULT_PER_PAGE;
		$num_pages = max(ceil($num_results / $results_per_page), 1);
		$page = intval($_REQUEST['p']);
		if (!$page) {
			$page = 1;
		}	
		$count  = (($page-1) * $results_per_page) + 1;
		$offset = ($page-1)*$results_per_page;
		
		$sql = "SELECT * FROM ".UNIV.$where." LIMIT " .$offset.", ".$results_per_page; 
		$countQry  = mysqli_query($link, $sql);
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
				<legend>Search your university</legend>
				<form action="" method="post" class="form" role="form">				 
					<div class="row">
						<!--<div class="col-sm-6 col-md-6">
							<label for="" class="fnt_size">University Name</label>
							<?php drop_down('class="form-control bottm_m"', 'univ_id', UNIV, 'id', 'name', 'status=1', $_POST['univ_id'], '--Choose University--');?>
						</div>-->
						<div class="col-sm-4 col-md-4">
							<label for="" class="fnt_size">Year Of Passing</label>
							<select class="form-control bottm_m" name="passing_year" >
								<option value="">--Choose--</option>
								<?php 
									for($y=date('Y')-1; $y >= date('Y')-10; $y--)
									{
										$selected = "";
										if($_POST['passing_year']==$y) {
											$selected = 'selected="selected"';
										}
										echo '<option value="'.$y.'" '.$selected.'>'.$y.'</option>';
									}
								?>
							</select>
						</div>
						<div class="col-sm-4 col-md-4">
							<label for="" class="fnt_size">Country</label>
							<?php drop_down('class="form-control bottm_m"', 'country_id', COUNTRY, 'id', 'name', 'status=1', $_POST['country_id'], '--Choose Country--');?>
						</div>
						<div class="col-sm-4 col-md-4">
							<label for="" class="fnt_size">State/Province</label>
							 <?php drop_down('class="form-control bottm_m"', 'zone_id', ZONE, 'id', 'name', 'status=1 AND country_id="'.$_POST['country_id'].'"', $_POST['zone_id'], '--Choose State/Province--');?>
						</div>
										
					</div>
					<div class="row">
						<div class="col-sm-4 col-md-4">
							<label for="" class="fnt_size">Stream</label>
							<?php drop_down('class="form-control bottm_m"', 'stream_id', STREAM, 'id', 'name', 'status=1', $_POST['stream_id'], '--Choose Stream--');?>
						</div>	
						<div class="col-sm-4 col-md-4">
							<label for="" class="fnt_size">Qualification</label>
							 <?php drop_down('class="form-control bottm_m"', 'qualification_id', QUALIFICATION, 'id', 'name', 'status=1', $_POST['qualification_id'], '--Choose Qualification--');?>
						</div>
						<div class="col-sm-4 col-md-4">
							<label for="" class="fnt_size">Percentage Of Marks</label>
							 <select class="form-control bottm_m" name="marks" >
                                	<option value="">--Select Percentage--</option>
                                    <option value="34-40" <?php echo $_POST['marks']=='34-40' ? 'selected="selected"' : ''; ?>>34% - 40%</option>
                                    <option value="41-50" <?php echo $_POST['marks']=='41-50' ? 'selected="selected"' : ''; ?>>41% - 50%</option>
                                    <option value="51-60" <?php echo $_POST['marks']=='51-60' ? 'selected="selected"' : ''; ?>>51% - 60%</option>
                                    <option value="61-70" <?php echo $_POST['marks']=='61-70' ? 'selected="selected"' : ''; ?>>61% - 70%</option>
                                    <option value="71-80" <?php echo $_POST['marks']=='71-80' ? 'selected="selected"' : ''; ?>>71% - 80%</option>
                                    <option value="81-90" <?php echo $_POST['marks']=='81-90' ? 'selected="selected"' : ''; ?>>81% - 90%</option>
                                    <option value="91-100" <?php echo $_POST['marks']=='91-100' ? 'selected="selected"' : ''; ?>>91% - 100%</option>
                                </select>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4 col-md-4">
							<label for="" class="fnt_size">Division</label>
							 <?php drop_down('class="form-control bottm_m"', 'division_id', DIVISON, 'id', 'name', 'status=1', $_POST['division_id'], '--Choose Division--');?>
						</div>
						
					</div>
					<div class="text-right"><button class="btn btn-md btn-primary pro_bgcolor bottm_m" name="btnSearch" type="submit">Search</button></div>
				</form>
			</div>
			<div class="well well-sm">				
					<table class="table table-bordered width mrgn_bottom">
						<?php
							if($num_results>0 && isset($_POST['btnSearch']))
							{
						?>
							<thead align="right">
							  <tr>
							  	<th>SL. No.</th>
								<th>University Name</th>
								<th>Applying</th>
							  </tr>
							</thead>
							<tbody>
							<?php
								$i=0;
								while($arr = mysqli_fetch_assoc($countQry))
								{
									$i++;
							?>
							  <tr>
							  	<td><?php echo $offset+$i?></td>
								 <td class="v_align"><?php echo $arr['name']?></td>
								<td class="v_align"><a href="apply-university.php?id=<?php echo $arr['id']; ?>"><button class="btn btn-md btn-primary pro_bgcolor" type="submit">Apply</button></a></td>
							  </tr>	
							  <?php
									}
								?>	
								<input type="hidden" value="<?php echo $_REQUEST['p']?>" name="p" id="p" />
                                    <tr>
                                        <td class="a-center" colspan="8"><?php paginate($page, $num_results, $results_per_page); ?></td>
                                    </tr>
									<?php
                                        }
                                        else
                                        {
                                    ?>
                                    <tr>
                                        <td class="a-center" colspan="8"><font color="red">No University Found!</font></td>
                                    </tr>
                                	<?php } ?>				  
							</tbody>
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
<script>
$( "#country_id" ).change(function() {
	var val = $(this).val();
	//alert(val);
	$.ajax({
	   url: 'ajax.php',
	   dataType: 'html',
	   data: { action: 'country', cid: val },
	   success: function(data) {
	   		$('#zone_id').html(data);
	   }
	});
});
</script> 