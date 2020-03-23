<?php 
	if(isset($_GET['id'])){
		$id= $_GET['id'];
		
		$con = mysqli_connect('localhost','root','','portfolio');
		$q3 =mysqli_query($con,"SELECT * FROM certifications where id ='".$id."' ");
		$cert = mysqli_fetch_all($q3,MYSQLI_ASSOC);
	
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
			bottom: 40%;
			margin-bottom: 5%; 

		}
		.cert-font1{
			font-size: 25px;
			position: relative;
			display: block;
			bottom: 18%;
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
	</style>
</head>
<body>
	<div class="mother">
		<div class="cert">
			<?php foreach($cert as $ce){ ?>
			<img src="images/usama.jpg" class="cert-img"> 
			<label class="cert-font">Certification Name</label>
			<label class="cert-font">About Certification</label>
			<label class="cert-font1">Center</label>
			<label class="cert-font1">Hours</label>
			<input type="" name="" class="cer-name" value="<?php echo $ce['name'] ?>">
			<textarea  class="cer-textarea" ><?php echo $ce['about'] ?></textarea>
			<input type="" name="" class="cert-center" value="<?php echo $ce['center'] ?>">
			<input type="" name="" class="cert-hours" value="<?php echo $ce['numOfHours'] . " Hours"?>">
		<?php } ?>
		</div>
	</div>
</body>
</html>

<?php } ?>