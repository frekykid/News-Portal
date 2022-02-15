<?php
session_start();
include(‘includes/config.php’);
error_reporting(0);
if(strlen($_SESSION[‘login’])==0)
  { 
header(‘location:index.php’);
}
else{
if(isset($_POST[‘submitsubcat’]))
{
$categoryid=$_POST[‘category’];
$subcatname=$_POST[‘subcategory’];
$subcatdescription=$_POST[‘sucatdescription’];
$status=1;
$query=mysqli_query($con,”insert into tblsubcategory(CategoryId,Subcategory,SubCatDescription,Is_Active) values(‘$categoryid’,’$subcatname’,’$subcatdescription’,’$status’)”);
if($query)
{
$msg=”Subcategory created “;
}
else{
$error=”Something went wrong . Please try again.”;    
} 
}?>	