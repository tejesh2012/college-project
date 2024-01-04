<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Camps</title>
    <!-- Favicon -->
    <link rel="icon" href="img/core-img/logo (2).png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
<link href="css/lightbox.css" rel="stylesheet" />

 <style>
 body{
	 align-items: center;
 }
 </style>
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
</head>

<body>
<?php include('admin/function.php'); ?>

<!--------------Header area start-------------------------->
		 <?php require('header.php');?>
<!-----------------header area end-------------------------->
<div style="height:400px; width:100%; margin:auto; background-color:#f8f1e4;   box-shadow:4px 1px 20px black;">
    <div class="s_bg">
<div class="wrap">
<div class="main_cont">
     <div class="main">
        <div class="content">
          <img src="Images/camps.png" height="80px" style="margin:auto" />
            <br /><br />
            
            
            
            <table cellpadding="0" cellspacing="0" width="1100px">
            
            <?php
$cn=makeconnection();
$s="select * from camp,state,city where camp.state=state.state_id and camp.city=city.city_id";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$n=0;
	while($data=mysqli_fetch_array($result))
	{
		if($n%2==0)
		{
		?>
    
    
            <tr>
            <?php
			
		}?>
            
            <td>
            
            
            
            
    <table cellpadding="0" cellspacing="0" class="tableborder" width="500" style="border:none">
    <tr><td style="font-size:24px; font-weight:bold; text-shadow:1px 1px 6px browm; padding-left:50px; padding-top:10px; padding-bottom:10px; color:#925959"><?php echo $data[1]; ?></td></tr>
      <tr><td align="center"> 
   <a href="Admin/pic/<?php echo $data[5] ?>"data-lightbox="image-1"> <img src="Admin/pic/<?php echo $data[5] ?>" height="250px" width="460px" style="margin:auto; padding-left:20px" /></a></td></tr>
   
                        <tr><td>&nbsp;</td></tr>
    <tr><td>&nbsp;</td></tr>
                        <tr><td class="title"><a href="campgallary.php?cid=<?php echo $data[0];  ?>">View Camp Gallary</td></tr>
  



        
          <tr><td class="title"  style="vertical-align:middle">Organised By:<?php echo $data[2]; ?></td><td align="left" width="50%"></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
          <tr><td class="title" style="vertical-align:middle">State:<?php echo $data[8]; ?></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
          <tr><td class="title" style="vertical-align:middle">City:<?php echo $data[10]; ?></td></tr>
         <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><td colspan="2"><p style="padding-left:30px; font-size:16px; font-weight:bold"><?php echo $data[2]; ?></p></td></tr>
		</table>
        
        
        </td>
        <?php
        if($n%2==1)
	 {
	 ?>
        </tr>
        <tr><td colspan="2">&nbsp;</td></tr>
         <tr><td colspan="2">&nbsp;</td></tr>
          <tr><td colspan="2">&nbsp;</td></tr>
        <?php
	}
	$n=$n+1;
		
	}?>
    </table>
        
        
	</div></div></div></div></div>
    


      <div class="clear"></div>
	<!-- ##### Footer Area Start ##### -->
<?php require('footer.php');?>
    <!-- ##### Footer Area End ##### -->
	
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