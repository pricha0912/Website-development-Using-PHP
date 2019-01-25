<?php
	include_once("init.php");
	$action = $_REQUEST['action'];
	switch($action)
	{
		case "country":
			$country_id = $_REQUEST['cid'];
			echo drop_down('class="form-control bottm_m" required', 'zone_id', ZONE, 'id', 'name', 'status=1 AND country_id='.$country_id, $_POST['zone_id'], '--Choose State/Province--');
		break;
		
		case "zone":
			$zone_id = $_REQUEST['zid'];
			echo drop_down('class="form-control bottm_m" required', 'univ_id', UNIV, 'id', 'name', 'status=1 AND zone_id='.$zone_id, '', '--Choose University--');
			//echo drop_down('class="form-control bottm_m" required', 'zone_id', ZONE, 'id', 'name', 'status=1 AND country_id='.$country_id, $_POST['zone_id'], '--Choose State/Province--');
		break;
		
		case "ticket_no":
			$id 		= $_REQUEST['id'];
			$member_id 	= $_REQUEST['m'];
			$ticket 	= $_REQUEST['t'];
			$courier_id	= $_REQUEST['c'];
			$status 	= $_REQUEST['s'];
			$p 			= $_REQUEST['p'];
			
			$updateSql="UPDATE ".APPLY." SET 
				status	 	= '".$status."',
				courier_id	= '".$courier_id."',
				ticket	 	= '".$ticket."'
				WHERE id 	= '".$id."'";
			$query=mysqli_query($link, $updateSql);

			if($status == '1')
			{
				$var ='<a href = "javascript:void(0)" title = "Click Here To Inactive" onclick="approve(\''.$id.'\', \''.$member_id.'\', \'0\', \''.$p.'\')"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>';
				
				//start email for users
				$mem = mysqli_fetch_assoc(mysqli_query($link, "SELECT * FROM ".MEMBERS." WHERE id = '".$member_id."'"));
				
				$name		= $mem['first_name'].' '.$mem['last_name'];
				$to 		= $mem['email'];
				$mailArr 	= getEmail(4);
				$subject 	= $mailArr['email_subject'];
				$details = '';
				$mail_body 	= str_replace(array("[NAME]", "[TICKET]", "[THANK]"), array($name, $ticket, DOMAIN_NAME), $mailArr['email_body']);
				$okM = Send_HTML_Mail($to, ADMIN_EMAIL, DOMAIN_NAME, '', $subject, $mail_body);
							
				//start email for courier
				$courier = mysqli_fetch_assoc(mysqli_query($link, "SELECT * FROM ".COURIER." WHERE id = '".$courier_id."'"));
				
				$cname		= $courier['company_name'];
				$to 		= $courier['email'];
				$mailArr 	= getEmail(5);
				$subject 	= $mailArr['email_subject'];
				$details = '';
				$mail_body 	= str_replace(array("[NAME]", "[MEMBER_NAME]", "[TICKET]", "[THANK]"), array($cname, $name, $ticket, DOMAIN_NAME), $mailArr['email_body']);
				$okC = Send_HTML_Mail($to, ADMIN_EMAIL, DOMAIN_NAME, '', $subject, $mail_body);
				
				if($okM && $okC) {
					$msg="<label class='center-block text-center label-success'>Application has been approved.</label>";
				} else {
					$msg="<label class='center-block text-center label-danger'>There has been a mail error sending.</label>";
				}
				//end email
			}
			else
			{
				 $var ='<a href = "javascript:void(0)" title = "Click Here To Active" onclick="approve(\''.$id.'\', \''.$member_id.'\', \'1\', \''.$p.'\')"><i class="fa fa-thumbs-down" aria-hidden="true"></i></a>';

				$msg="<label class='center-block text-center label-danger'>Application has been dis-approved.</label>";
			}
			echo $ticket.'@@@'.$var.'@@@'.$msg;
		break;
	}
?>