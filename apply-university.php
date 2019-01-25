<?php
	ob_start();
		include_once("init.php");
		filterURL($_SERVER['REQUEST_URI'], 'ADVANCED');
		validation_check($_SESSION['USER_ID'], SITE_HOME, array('1'));
		if(!isset($msg)){$msg = '';}
		//start code
	
		//fetch student details
		$sqlShow="SELECT * FROM ".MEMBERS." WHERE id='".$_SESSION['USER_ID']."'";
		$query=mysqli_query($link, $sqlShow);
		$ft=mysqli_fetch_array($query);
		//add
		if(isset($_POST['btnSubmit']))
		{
			$sel=mysqli_query($link, "select id from ".APPLY." where f_id='".$_POST['univ_id']."' AND member_id = '".$_SESSION['USER_ID']."' AND apply_for = 1");
			$chk=mysqli_fetch_array($sel);
			if($chk==''){
				if($_FILES["doc1"]['name']!= ''){
					$fileData  	= pathinfo(basename($_FILES["doc1"]["name"]));
					$doc1 	= rand() .'.'. $fileData ['extension'];	
					move_uploaded_file($_FILES["doc1"]["tmp_name"], DOC.$doc1);
				}if($_FILES["doc2"]['name']!= ''){
					$fileData  	= pathinfo(basename($_FILES["doc2"]["name"]));
					$doc2 	= rand() .'.'. $fileData ['extension'];	
					move_uploaded_file($_FILES["doc2"]["tmp_name"], DOC.$doc2);
				}if($_FILES["doc3"]['name']!= ''){
					$fileData  	= pathinfo(basename($_FILES["doc3"]["name"]));
					$doc3 	= rand() .'.'. $fileData ['extension'];	
					move_uploaded_file($_FILES["doc3"]["tmp_name"], DOC.$doc3);
				}if($_FILES["doc4"]['name']!= ''){
					$fileData  	= pathinfo(basename($_FILES["doc4"]["name"]));
					$doc4 	= rand() .'.'. $fileData ['extension'];	
					move_uploaded_file($_FILES["doc4"]["tmp_name"], DOC.$doc4);
				}if($_FILES["doc5"]['name']!= ''){
					$fileData  	= pathinfo(basename($_FILES["doc5"]["name"]));
					$doc5 	= rand() .'.'. $fileData ['extension'];	
					move_uploaded_file($_FILES["doc5"]["tmp_name"], DOC.$doc5);
				}if($_FILES["doc6"]['name']!= ''){
					$fileData  	= pathinfo(basename($_FILES["doc6"]["name"]));
					$doc6 	= rand() .'.'. $fileData ['extension'];	
					move_uploaded_file($_FILES["doc6"]["tmp_name"], DOC.$doc6);
				}if($_FILES["doc7"]['name']!= ''){
					$fileData  	= pathinfo(basename($_FILES["doc7"]["name"]));
					$doc7 	= rand() .'.'. $fileData ['extension'];	
					move_uploaded_file($_FILES["doc7"]["tmp_name"], DOC.$doc7);
				}if($_FILES["doc8"]['name']!= ''){
					$fileData  	= pathinfo(basename($_FILES["doc8"]["name"]));
					$doc8 	= rand() .'.'. $fileData ['extension'];	
					move_uploaded_file($_FILES["doc8"]["tmp_name"], DOC.$doc8);
				}if($_FILES["doc9"]['name']!= ''){
					$fileData  	= pathinfo(basename($_FILES["doc9"]["name"]));
					$doc9 	= rand() .'.'. $fileData ['extension'];	
					move_uploaded_file($_FILES["doc9"]["tmp_name"], DOC.$doc9);
				}if($_FILES["doc10"]['name']!= ''){
					$fileData  	= pathinfo(basename($_FILES["doc10"]["name"]));
					$doc10 	= rand() .'.'. $fileData ['extension'];	
					move_uploaded_file($_FILES["doc10"]["tmp_name"], DOC.$doc10);
				}
				$name = $_POST['first_name'].' '.$_POST['middle_name'].' '.$_POST['last_name'];
				$qry="INSERT INTO ".APPLY." SET 
					apply_for		= 1,
					f_id			= '".$_POST['univ_id']."',
					member_id		= '".$_SESSION['USER_ID']."',
					country_id		= '".$_POST['country_id']."',
					zone_id			= '".$_POST['zone_id']."',
					name			= '".realStrip($name)."',
					dob				= '".realStrip($_POST['dob'])."',				
					phone			= '".realStrip($_POST['mobile'])."',
					address			= '".realStrip($_POST['address'])."',
					passport_no		= '".realStrip($_POST['passport_no'])."',
					documents		= '".realStrip($_POST['documents'])."',
					doc1			= '".$doc1."',
					doc2			= '".$doc2."',
					doc3			= '".$doc3."',
					doc4			= '".$doc4."',
					doc5			= '".$doc5."',
					doc6			= '".$doc6."',
					doc7			= '".$doc7."',
					doc8			= '".$doc8."',
					doc9			= '".$doc9."',
					doc10			= '".$doc10."',
					created_date	= NOW()";
				$query=mysqli_query($link, $qry);	
				//start email
				$from = $ft['email']; // sender
				$mailArr 	= getEmail(3);
				$subject 	= $mailArr['email_subject'];
				$details = 'Name: '.$name.'<br/>University Name: '.fetchValById('id='.$_POST['univ_id'], UNIV, 'name').'<br/>DOB: '.$_POST['dob'].'<br/>Phone: '.$_POST['mobile'].'<br/> Address: '.$_POST['address'].'<br/>Passport No.: '.$_POST['passport_no'].'<br/>Documents: '.$_POST['documents'];
				$mail_body 	= str_replace(array("[NAME]", "[DETAILS]", "[THANK]"), array($name, $details, DOMAIN_NAME), $mailArr['email_body']);
				$ok = Send_HTML_Mail(ADMIN_EMAIL, $from, $name, '', $subject, $mail_body);
				if($ok) {
					$msg="<label class='center-block text-center label-success'>Your apply has been successfully submitted.</label>";					header("Location:applied.php");  exit();
				} else {
					$msg="<label class='center-block text-center label-danger'>There has been a mail error sending.</label>";
				}
				//end email	
				
			}else{
				$msg="<label class='center-block text-center label-danger'>You already applied for this unversity...</label>";
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
		<!--start menu-->
		<?php require_once(INCLUDES.'menu.php'); ?>
		<!--end menu-->
		<div class="col-md-6">
			<div class="row"><?php echo $msg?></div>
			<div class="well well-sm">
				<legend>Get your Courier Ticket</legend>
				<form action="" method="post" class="form" role="form" enctype="multipart/form-data">	
					<div class="row">
						<div class="col-sm-4 col-md-4">
							<label for="" class="fnt_size">First Name*</label>
							 <input class="form-control bottm_m" name="first_name"  type="text" required value="<?php echo $ft['first_name']!='' ? $ft['first_name'] : $_POST['first_name']; ?>"/>
						</div>
						<div class="col-sm-4 col-md-4">
							<label for="" class="fnt_size">Middle Name*</label>
							 <input class="form-control bottm_m" name="middle_name" placeholder="" type="text" value="<?php echo $ft['middle_name']!='' ? $ft['middle_name'] : $_POST['middle_name']; ?>"/>
						</div>
						<div class="col-sm-4 col-md-4">
							<label for="" class="fnt_size">Last Name*</label>
							<input class="form-control bottm_m" name="last_name" placeholder="" type="text" required value="<?php echo $ft['last_name']!='' ? $ft['last_name'] : $_POST['last_name']; ?>"/>
						</div>
					</div>			 
					<div class="row">
						<div class="col-sm-4 col-md-4">
							<label for="" class="fnt_size">Mobile*</label>
							<input class="form-control bottm_m" name="mobile"  type="text" required value="<?php echo $ft['mobile']!='' ? $ft['mobile'] : $_POST['mobile']; ?>"/>
						</div>
						<div class="col-sm-4 col-md-4">
							<label for="" class="fnt_size">Date Of Birth*</label>
							<input class="form-control bottm_m" name="dob" placeholder="" type="text" id="datepicker" required value="<?php echo $ft['dob']!='' ? $ft['dob'] : $_POST['dob']; ?>"/>
						</div>
						<div class="col-sm-4 col-md-4">
							<label for="" class="fnt_size">Passport No*</label>
							<input class="form-control bottm_m" name="passport_no" placeholder="" type="text" required value="<?php echo $_POST['passport_no']; ?>"/>
						</div>
					</div>
					<div class="row">
						
						<div class="col-sm-4 col-md-4">
							<label for="" class="fnt_size">Country*</label>
							<?php drop_down('class="form-control bottm_m" required', 'country_id', COUNTRY, 'id', 'name', 'status=1', $_POST['country_id'], '--Choose Country--');?>
						</div>
						<div class="col-sm-4 col-md-4">
							<label for="" class="fnt_size">State/Province*</label>
							 <?php drop_down('class="form-control bottm_m" required', 'zone_id', ZONE, 'id', 'name', 'status=1 AND country_id="'.$_POST['country_id'].'"', $_POST['zone_id'], '--Choose State/Province--');?>
						</div>
						<div class="col-sm-4 col-md-4">
							<label for="" class="fnt_size">University Details*</label>
							<?php 
								if(isset($_GET['id']) && $_GET['id']!='') {
									$id = $_GET['id'];
								} else {
									$id = $_POST['univ_id'];
								}
								drop_down('class="form-control bottm_m" required', 'univ_id', UNIV, 'id', 'name', 'status=1', $id, '--Choose University--');
							?>
						</div>
					</div>
					
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<label for="" class="fnt_size">University Address</label>
							<textarea name="address" rows="" cols="" class="form-control bottm_m txt_box"><?php echo $ft['address']!='' ? $ft['address'] : $_POST['address']; ?></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<label for="" class="fnt_size">Documents*</label>
							<input class="form-control bottm_m" name="documents" placeholder="" type="text" required value="<?php echo $_POST['documents']; ?>"/>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 col-md-6">
							<label for="" class="fnt_size">Upload Documents*</label>
							<input class="bottm_m" name="doc1"  type="file" value=""/>
						</div>
						<div class="col-sm-6 col-md-6">
							<label for="" class="fnt_size"></label>
							<input class="bottm_m" name="doc2"  type="file" value="" required/>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 col-md-6">
							<input class="bottm_m" name="doc3"  type="file" value="" required/>
						</div>
						<div class="col-sm-6 col-md-6">
							<input class="bottm_m" name="doc4"  type="file" value=""required/>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 col-md-6">
							<input class="bottm_m" name="doc5"  type="file" value=""required/>
						</div>
						<div class="col-sm-6 col-md-6">
							<input class="bottm_m" name="doc6"  type="file" value=""required/>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 col-md-6">
							<input class="bottm_m" name="doc7"  type="file" value=""/>
						</div>
						<div class="col-sm-6 col-md-6">
							<input class="bottm_m" name="doc8"  type="file" value=""/>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 col-md-6">
							<input class="bottm_m" name="doc9"  type="file" value=""/>
						</div>
						<div class="col-sm-6 col-md-6">
							<input class="bottm_m" name="doc10"  type="file" value=""/>
						</div>
					</div>
					<div class="text-right"><button class="btn btn-md btn-primary pro_bgcolor" name="btnSubmit" type="submit">Save</button></div>
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
$( "#zone_id" ).change(function() {
	var val = $(this).val();
	//alert(val);
	$.ajax({
	   url: 'ajax.php',
	   dataType: 'html',
	   data: { action: 'zone', zid: val },
	   success: function(data) {
	   		$('#univ_id').html(data);
	   }
	});
});
</script> 
<!-- Calender Script End -->