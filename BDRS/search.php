<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search</title>
    <!-- Favicon -->
    <link rel="icon" href="img/core-img/logo (2).png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
<link href="css/lightbox.css" rel="stylesheet" />

  
 <script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script>

<body>
<?php include('Admin/function.php'); ?>

<!--------------Header area start-------------------------->
		 <?php require('header.php');?>
<!-----------------header area end-------------------------->
  
   
<div style="height:350px;">

     <form method="post" enctype="multipart/form-data">
   <table cellpadding="0" cellspacing="0" width="500px" height="250px" class="tableborder" style="margin:auto; margin-top:100px;" >
         <tr><td colspan="2">&nbsp;</td></tr>
        <tr><td colspan="2" align="center"><img src="Images/search.png" height="80px" /></td></tr>
        <tr><td colspan="2">&nbsp;</td></tr>
        <tr><td class="lefttd" style="padding-left:40px">Select Blood Group </td><td><select name="s2" required><option value="">Select</option>

<?php
$cn=makeconnection();
$s="select * from bloodgroup";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		if(isset($_POST["show"])&& $data[0]==$_POST["s2"])
		{
			echo "<option value=$data[0] selected>$data[1]</option>";
		}
		else
		{
			echo "<option value=$data[0]>$data[1]</option>";
		}
		
		
		
	}
	mysqli_close($cn);

?>



</select>

<?php
if(isset($_POST["show"]))
{
$cn=makeconnection();
$s="select * from bloodgroup where bg_id='" .$_POST["s2"] ."'";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$data=mysqli_fetch_array($result);
	$bg_id=$data[0];
	$bg_name=$data[1];
	
		
		
	mysqli_close($cn);
}
?>

</td></tr>
  <tr><td colspan="2">&nbsp;
            </td></tr>
        <tr><td colspan="2">&nbsp;</td></tr>
        <tr><td>&nbsp;</td><td>       
<tr><td>&nbsp;</td><td><input type="submit" value="Search" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>

                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
              
</table>



		
</form>
</div>

       
        <div class="clear"></div>
	<!-- ##### Footer Area Start ##### -->
<?php require('footer.php');?>
    <!-- ##### Footer Area End ##### -->

<?php 
if(isset($_POST["sbmt"]))
{
	//header("location:result.php?bg=".$_POST["s2"]);
	echo "<script>location.replace('result.php?bg=". $_POST["s2"] ."');</script>";
}

?>


   <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>
</html>