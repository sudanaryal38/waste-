<html>
<head>
<link rel="Stylesheet" type="text/css" href="homemain.css" >
</head>
<body style="background-image:url('images/complaint.jpg');background-position: center;
			background-repeat: no-repeat;
			background-size: cover;">
<div class="container-fuild heading" >
<p class="letter">Waste Management System</p>
</div>
     <?php
 
 include "nav.php"
 
 ?>
<div class="container-fluid bg_img" style="margin-right:30%;height:70%;">

<div class="row">
<div class="col-sm">
    <center><p class="login_text">Register Complaints</p></center>
<form method="post" action="crp2.php" enctype="multipart/form-data">

     <input type="hidden" name="a" value="0">
     <input type="hidden" name="b" value="0">
     <input type="hidden" name="c" value="0">
    <input type="hidden" name="d" value="0">
     <input type="hidden" name="e" value="0">
     <input type="hidden" name="f" value="0">
    <input type="hidden" name="details" value="NA">
    <br>
    
    <label for="number" >Address : </label><br>
    <textarea name="address" class="detail" cols="50" rows="3" style="margin-left:50px" required></textarea>
    
    <br><br>
    <label for="type"> Select Type of Waste: </label><br><br>
    <input for="a" type="checkbox" name="a" value="1">
    <label for="a">Chemical </label>
    <br>
    <input for="b" type="checkbox" name="b" value="1">
    <label for="b">Medical </label>
    <br>
  
    <input for="c" type="checkbox" name="c" value="1">
    <label for="c">Metallic </label>
    <br>
    <input for="d" type="checkbox" name="d" value="1">
    <label for="d">Plastic </label>
    <br>
    <input for="e" type="checkbox" name="e" value="1">
    <label for="e">Biodegradable </label>
    <br>
    <input for="f" type="checkbox" name="f" value="1">
    <label for="f">Glass </label>
    <br> <br>
  
    <label for="details">Any other specifications : </label><br>
    <textarea class="detail" name="details" cols="50" rows="3" style="margin-left:50px" required></textarea>
    


    
    
   <center><button name="submit" type="submit" class="button_design">Add</button></center>
</form>
    
</div>  
</div>
</div> 
 <div class="footer">
  <p>Clean Nepal Better Nepal</p>
</div>     
</body>    
</html>
