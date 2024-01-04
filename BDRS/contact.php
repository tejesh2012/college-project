<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>contact</title>
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
<?php include('admin/function.php'); ?>

<!--------------Header area start-------------------------->
		 <?php require('header.php');?>
<!-----------------header area end-------------------------->

    <div>
<div style="height:500px; width:100%; margin:auto; margin-top:10px; margin-bottom:10px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
     <form method="post" enctype="multipart/form-data">


  <div   class="col span_2_of_3"> <div class="contact-form" style="padding-left:100px;">
				  	<img src="cpics/contact.png" align="center" />
  
    <table  cellspacing="0" cellpadding="0"  width="500px" height="300px">               

<tr><td class="lefttd"  style="vertical-align:middle"> Name:</td><td><input type="text" name="t1"  required="required" pattern="[a-zA-Z _]{2,15}" title="please enter only character  between 2 to 15 for donor name" /></td></tr>



<tr><td class="lefttd"  style="vertical-align:middle">E-Mail</td><td><input type="email" name="t2" required="required" /></td></tr>
<tr><td class="lefttd"  style="vertical-align:middle">Mobile No</td><td><input type="number" name="t3"   pattern="[0-9]{10,12}" title="please enter only numbers between 10 to 12 for mobile no." /></td></tr>

<tr><td class="lefttd"  style="vertical-align:middle">Subject</td><td><textarea name="t4"></textarea></td></tr>

<tr><td>&nbsp;</td><td><input type="submit" value="Send Us" name="sbmt"></td></tr></table>

</div>
</div>
		
		  </div>
</form>
        </div>
         </div> 
         </div>
        <div class="clear"></div>
<	<!-- ##### Footer Area Start ##### -->
<?php require('footer.php');?>
    <!-- ##### Footer Area End ##### -->

<?php
if(isset($_POST["sbmt"])) 
{
	
	$cn=makeconnection();			

			$s="insert into contacts(name,email,mobile,subj) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"]   ."')";
			
			
	$q=mysqli_query($cn,$s);
	mysqli_close($cn);
	if($q>0)
	{
	echo "<script>alert('Record Save');</script>";
	}
	else
	{echo "<script>alert('Saving Record Failed');</script>";
	}
		
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