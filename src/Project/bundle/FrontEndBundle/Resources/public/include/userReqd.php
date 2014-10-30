<?php session_start();
if($_SESSION['LoggedUser']==""){
	//header("location:http://www.outfitternepal.com/admin/");
	header("location:http://localhost/current-projects/outfitternepal.com/admin/");
}
?>