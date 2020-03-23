<?php 
 if(isset($_GET['proid'])){
  $id= $_GET['proid'];
  
  $con = mysqli_connect('localhost','root','','portfolio');
  $q3 =mysqli_query($con,"SELECT * FROM projects where id ='".$id."' ");
  $cert = mysqli_fetch_all($q3,MYSQLI_ASSOC);

  $imgs = explode(',', $cert[0]['iamge']);
 
 ?>
<!DOCTYPE html>
<html>
<head>
 <title>Portfolio Project</title>
 <style>
  *{
   margin-right: 30px;
   margin-left: 20px;
   margin-top: 0;
   margin-bottom: 0;
  }
  .mother{
   border: 20px;
   background: #212931;
   width: 100%;
   height: 656px;
  }
  .cert{
   background: white;
   width: 80%;
   height: 520px;
   position: relative;
   left: 8%;
   top:11%;
   border-radius: 20px;
  }
  .cert-img{
   height: 300px;
   position: relative;
   left:60%;
   top:95px;
   border-radius: 20px;
  }
  .cert-font{
   font-size: 25px;
   position: relative;
   display: block;
   bottom: 47%;
   margin-bottom: 6%; 

  }
  .cert-font1{
   font-size: 25px;
   position: relative;
   display: block;
   bottom: 32%;
   margin-bottom: 2%; 

  }
  .cer-name{
   position: absolute;
   top: 19%;
   left: 26%;
   border: 2px solid #212931;
   font-size: 20px;
   text-align: center;
  }
   .cer-link{
   position: absolute;
   top: 72%;
   left: 24%;
   border: 2px solid #212931;
   font-size: 20px;
   text-align: center;
   width: 60%;
   cursor: pointer;
  }
  .cer-textarea{
   position: absolute;
   top:32%;
   left: 26%;
   height: 150px;
   border: 2px solid #212931;
   font-size: 20px;
   text-align: center;
  }
  .cert-center{
   position: absolute;
   top:70%;
   left: 26%;
   border: 2px solid #212931;
   font-size: 20px;
   display: block;
   text-align: center;

  }
  .cert-hours{
   position: absolute;
   top:80%;
   left: 26%;
   border: 2px solid #212931;
   font-size: 20px;
   display: block;
   text-align: center;
  }
  .mySlides {display:none;
  	transition-duration: 500ms;
  	width: 300px;
  	position: relative;
  	left: 60%;
  	top:20px;
  	height: 300px;
  	border-radius: 20px;
  }

 </style>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body>
 <div class="mother">
  <div class="cert">

   <!-- slider -->

<div class="w3-content w3-display-container">
	
		 <?php foreach($imgs as $r){ 
           echo "<img src='images/". $r .  "'  class='mySlides' />";  }?>
           

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)" style="position: relative;left: 55%;bottom:130px;">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>

 
</div>
   <!-- slider -->

   <?php foreach($cert as $ce){ ?>
  
   <label class="cert-font">Project Name</label>
   <label class="cert-font">Project Details </label>
   
   <label class="cert-font1">Project Link</label>
   <input type="" name="" class="cer-name" value="<?php echo $ce['name'] ?>">
   <textarea  class="cer-textarea" ><?php echo $ce['Details'] ?></textarea>
  	<label class="cer-link"><a href="<?php echo $ce['link']  ; ?>">Project Link</a></label>
  <?php } ?>
  </div>
 </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 

  }
  x[slideIndex-1].style.display = "block";  

}
</script>

<?php } ?>