<?php 
//start of DATABASE CONN CREDINTIALS
if($_SERVER['REMOTE_ADDR']=="127.0.0.1"){
	$db="project_db";
	$host="localhost";
	$user="root";
	$pass="";
	$WebSiteUrl="http://localhost/Project/Symfony2Project/web/app_dev.php/project/"; // for local computer; development side purpose
	$AdminRedirectUrl="http://localhost/Project/Symfony2Project/web/app_dev.php/project/login/"; // for local computer; development side purpose
}else{
	$db="project_db";
	$host="localhost";
	$user="project_db";
	$pass="Mur!v4h7tmB0";
	$WebSiteUrl="http://".$_SERVER['SERVER_NAME']."/"; // for server computer; development side purpose
	$AdminRedirectUrl="http://".$_SERVER['SERVER_NAME']."/site/admin/";


}
//end of DATABASE CONN CREDINTIALS


//start of DEFAULTs 
//$WebSiteUrl="http://www.outfitternepal.com/";

$WebSiteName="Outfitter Nepal";
$DefEmail="info@outfitternepal.com";
$DegLogoPath="images/outfitter-nepal.png";

$DefWebmasterTitle="Imagine Web Solution";
$DefWebmasterUrl="http://www.imaginewebsolution.com";
$DefWebmasterEmail="info@imaginewebsolution.com";

$AltWebmasterEmail="alamgirmikrani@yahoo.com";
$AltWebmasterTitle="aAa";

$PageTitle=" :: Outfitter Nepal";
$PageKeywords=" :: Outfitter Nepal";
$PageDesc=" :: Outfitter Nepal";

$DefBannerWd="695";
$DefBannerHt="310";
$DefBannerThumbWd="";
$DefBannerThumbHt="";


$DefBodyWd="451";
$DefBodyHt="300";
$DefBodyThumbWd="225";
$DefBodyThumbHt="150";

$DefGalleryWd="650";
$DefGalleryHt="500";
$DefGalleryThumbWd="150";
$DefGalleryThumbHt="115";

$DefNumOfNews=4;
$DefNumOfHotels=10;
$DefNumOfClients=10;
$DefNumOfFD=7;
$DefNumOfPopular=7;
$DefNumClients=10;
$DefNumBlogs=10;
$DefNumPhotos="16";
$DefNumLinks="25";
//end of DEFAULTs
?>