
   <!DOCTYPE html>
<html>
<head>
<title>about</title>
    <link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
  border-radius: 50%;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(20, 20, 20, 20);
  margin: 20px;
  background-color: #EFFD5F;
  border-radius: 50%;
}

.intro img {
  border-radius: 35%;
}

.box{
  width: 1520px;
  height: 450px;
  border: 0px solid black;
  padding-left: 20px;
  padding-right: 20px;
  letter-spacing: 2px;
  font-family: sans-serif;
}

.div2 :hover{
  color: blue;
}

.about-section {
  padding: 15px;
  text-align: center;
  background-color:  #ff1a1a;
  color: white;
  font-family: ink free;
  font-size: 16px;
}

.container {
  padding: 0 8px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: blue;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: cyan;
  background-color: #88d8c0;
  text-align: center;
  cursor: pointer;
  width: 35%;
}

.button:hover {
  background-color: #88d8c0;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

</style>


</head>
<body>
   <!-- ##### Header Area Start ##### -->
 <?php include "header.php"; ?>
    <!-- ##### Header Area End ##### -->

<div class="about-section">
  <h1><font size="8" style="color: #ffffff"><u>About Us Page</u></font></h1>
  <p></p>
  <p><font style="color: #ffffff"><b>we are describe about the blood </b></font></p>
</div>

<div class="img">
<img src="img/blood1.jpg" alt="blood1.jpg" style="width:1520px; height:310px; margin-right :10px; border:5px; ">
</div>
<br>
<div class="container">
       <script src="https://kit.fontawesome.com/a076d05399.js"></script>    
  
         <div class="div2">
            <H3><center><u>BLOOD DONATION RECIPIENT SERVICE</u></center></H3><br>
            <h5 align="justify"> 1 "BLOOD DONATION RECIPIENT SERVICE" is an organization that brings voluntary blood donors and those in need of blood on to a common platform.  Through this website, we seek donors who are willing to donate blood, as well as provide the timeliest support to those in frantic need of it.<br><br>
     2. Have you at anytime witnessed a relative of yours or a close friend searching frantically for a blood donor, when blood banks say out of stock, the donors in mind are out of reach and the time keeps ticking? Have you witnessed loss of life for the only reason that a donor was not available at the most needed hour? Is it something that we as a society can do nothing to prevent? This thought laid our foundation.<br><br>
     3. Our mission is to fulfill every blood request in the city with a promising web portal and motivated individuals who are willing to donate blood.</br><br>
     4. Our vision is to be " The hope of every Indian in search of a voluntary blood donate " <br><br>
     5. Our motto - " Donate blood to save the most precious human life " </h5>
        </div>
       </div>
<br><br>
<h1 style="text-align:center">MEET OUR TEAM</h1>
<div class="row">
  <div class="column">
    <div class="card" align="center">
      <div class="intro">
      <img src="img/team/tejesh.png" alt="tejesh" style="width:43%">
      <div class="container">
        <h2>tejesh chouhan</h2>
        <p class="title">coder</p>
        <p>chchouhan672@gmail.com</p>
        <p><button class="button"><a href="file:///C:/Users/Vivek%20Baghel/Desktop/project/contact.html">Contact</a></button></p>
      </div>
    </div>
  </div>
</div>

  <div class="column">
    <div class="card" align="center">
      <div class="intro">
      <img src="img/team/Vivek.png" alt="vivek" style="width:30%">
      <div class="container">
        <h2>vivek thakur</h2>
        <p class="title">anayliser nad maintainer</p>
        <p>viveksinght782@gmail.com</p>
        <p><button class="button"><a href="file:///C:/Users/Vivek%20Baghel/Desktop/project/contact.html">Contact</a></button></p>
      </div>
    </div>
  </div>
</div>

  <div class="column">
    <div class="card" align="center">
      <div class="intro">
      <img src="img/team/reeta.png" alt="reeta" style="width:31.5%">
      <div class="container">
        <h2>reeta nagpure</h2>
        <p class="title">coder</p>
        <p>reetangp678@gmail.com</p>
        <p><button class="button"><a href="file:///C:/Users/Vivek%20Baghel/Desktop/project/contact.html">Contact</a></button></p>
      </div>
    </div>
  </div>
</div>

  <div class="column">
    <div class="card" align="center">
      <div class="intro">
      <img src="img/team/reeta.png" alt="deepika" style="width:31.5%">
      <div class="container">
        <h2>deepika nagpure</h2>
        <p class="title">coder</p>
        <p>reetangp678@gmail.com</p>
        <p><button class="button"><a href="file:///C:/Users/Vivek%20Baghel/Desktop/project/contact.html">Contact</a></button></p>
      </div>
    </div>
  </div>
</div>

  <div class="column">
    <div class="card" align="center">
      <div class="intro">
      <img src="img/team/ashish.png" alt="ashish" style="width:34%">
      <div class="container">
        <h2>ashish thakre</h2>
        <p class="title">coder</p>
        <p>reetangp678@gmail.com</p>
        <p><button class="button"><a href="file:///C:/Users/Vivek%20Baghel/Desktop/project/contact.html">Contact</a></button></p>
      </div>
    </div>
  </div>
</div>

  <div class="column">
    <div class="card" align="center">
      <div class="intro">
      <img src="img/team/jitesh.png" alt="jitesh" style="width:33%">
      <div class="container">
        <h2>jitesh patle</h2>
        <p class="title">coder</p>
        <p>reetangp678@gmail.com</p>
        <p><button class="button"><a href="file:///C:/Users/Vivek%20Baghel/Desktop/project/contact.html">Contact</a></button></p>
      </div>
    </div>
  </div>
</div>

  <div class="column">
    <div class="card" align="center">
      <div class="intro">
      <img src="img/team/jitesh.png" alt="NATRAJ" style="width:33%">
      <div class="container">
        <h2>NATRAJ</h2>
        <p class="title">coder</p>
        <p>reetangp678@gmail.com</p>
        <p><button class="button"><a href="file:///C:/Users/Vivek%20Baghel/Desktop/project/contact.html">Contact</a></button></p>
      </div>
    </div>
  </div>
</div>

</div>
</body>
</html>

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