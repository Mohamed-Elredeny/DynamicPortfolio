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
		.rightdiv{
			position: absolute;
			top:80px;
			right: 10px;
		
		}
		.rightdiv img{
			width: 400px;
		
		}
		.leftdiv h1{
			position: relative;
			left: 480px;
		}
		.leftdiv h2{
			margin-top: 30px;
			margin-bottom: 160px;
		}
	</style>
</head>
<body>
	<?php foreach($cert as $ce){ ?>
	<div class="mother">
		<div class="rightdiv">
			<img src="images/<?php echo $ce['image'] ?>">
		</div>
		<div class="leftdiv">
			<h1><?php echo $ce['name'] ." certification" ?></h1>
			<h2>About</h2>
			<h3>wewe</h3>
			<h2>Center</h2>
			<h3>dshsh</h3>
		</div>
	</div>
<?php } ?>
</body>
</html>

<?php } ?>