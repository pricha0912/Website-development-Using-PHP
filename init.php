<?PHP
	#######################################################################################
	## THIS FILE IS THE COMMON FILE. THIS FILE INCLUDES ALL THE COMMON FILES REQUIRED IN YOUR WEBSITE. PLEASE INCLUDE THIS FILE IN ALL PAGES. SESSION HAS ALREADY STARTED IN THIS PAGE YOU DO NOT HAVE START SESSION IN THOSE PAGES WHERE YOU HAVE ALREADY INCLUDED THIS PAGE.
	## Created By Exalted Solution
	## Open Source Beta Version
	#######################################################################################
	session_start();
	include("includes/conn.php");
	include("includes/config.php");
	include("includes/define_tables.php");
	include("includes/common_functions.php");
	include("includes/database_functions.php");
	Db_Connect();
	
	include("includes/sitesetup.php");
	include("includes/array_fun.php");
?>