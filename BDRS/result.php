<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search Result</title>
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
   
<div style=" height:auto">

     <form method="post" enctype="multipart/form-data">
      <table cellpadding="0" cellspacing="0" width="1100px" style="margin:auto">
  <tr>            
            <td>
            
            
            
  <table cellpadding="0" cellspacing="0" width="800px" height="100px" style="margin:auto; border:0px" class="tableborder">
        <tr><td  align="center"><img src="Images/results.png" height="80px" style="padding-top:20px" /></td></tr>
        <tr><td >&nbsp;</td></tr> 
          
            <?php
$cn=makeconnection();
$s="select * from donarregistration,bloodgroup where donarregistration.b_id='". $_REQUEST["bg"]."' and donarregistration.b_id=bloodgroup.bg_id";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$n=0;
	while($data=mysqli_fetch_array($result))
	{
?>
  <tr><td  >

            <table cellpadding="0" cellspacing="0" width="700px" height="150px" style="margin:auto; border:none;" class="tableborder">


                <tr><td width="100px"  align="center" style="vertical-align:middle">

 <a href="doner_pic<?php echo $data[8] ?>"data-lightbox="image-1"> <img src="doner_pic/<?php echo $data[8] ?>" height="100px" width="100px" style="margin:auto; padding-left:70px; padding-right:50px; float:left" /></a></td>


                    <td width="500px" height="50px" style="vertical-align:top">
                        

                        <table cellpadding="0" width="500px" height="150px" style="border:none">
           <tr><td colspan="2">&nbsp;</td></tr>
                <tr><td><span class="title">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td><td><?php echo $data[1]; ?></td><td align="left" width="50%"></td></tr>
                 <tr><td><span class="title">Gender</span></td><td><?php echo $data[2]; ?></td></tr>
                  <tr><td style="width:24px"><span class="title">Mobile No:</span></td><td><?php echo $data[4]; ?></td></tr>
                  <tr><td><span class="title">Email</span></td><td><?php echo $data[6]; ?></td></tr>
                   <tr><td><span class="title">Blood Group</span></td><td><?php echo $data[10]; ?></td></tr>

                     <tr><td colspan="2">&nbsp;</td></tr>
                     
                     
                      </table>

                    </td></tr></table></td></tr>
               
   <?php }
   ?>
           </table></td></tr></table></form>


		
</form>
</div>

       
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