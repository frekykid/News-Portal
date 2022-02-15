<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
if($_GET['action']=='del' && $_GET['scid'])
{
	$id=intval($_GET['scid']);
	$query=mysqli_query($con,"update  tblsubcategory set Is_Active='0' where SubCategoryId='$id'");
	$msg="Category deleted ";
}
// Code for restore
if($_GET['resid'])
{
	$id=intval($_GET['resid']);
	$query=mysqli_query($con,"update  tblsubcategory set Is_Active='1' where SubCategoryId='$id'");
	$msg="Category restored successfully";
}

// Code for Forever deletionparmdel
if($_GET['action']=='perdel' && $_GET['scid'])
{
	$id=intval($_GET['scid']);
	$query=mysqli_query($con,"delete from   tblsubcategory  where SubCategoryId='$id'");
	$delmsg="Category deleted forever";
}?>	