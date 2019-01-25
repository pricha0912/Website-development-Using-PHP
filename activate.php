<?php
	include_once("init.php");
	$id = base64_decode($_GET['id']);
	$chk = mysqli_query($link, "SELECT `id`, `first_name`, `last_name`, `email`, `password` FROM ".MEMBERS." WHERE status=0 AND id='".$id."'");
	if(mysqli_num_rows($chk) > 0)
	{
		$arr = mysqli_fetch_assoc($chk);
		mysqli_query($link, "UPDATE ".MEMBERS." SET status=1 WHERE status=0 AND id='".$id."'");
		$_SESSION['USER_ID'] = $id;
		$_SESSION['USER_ROLE'] = 1;
		header("location:profile.php");
	}
?>