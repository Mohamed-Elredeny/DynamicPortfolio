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
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<style>
		body{
				overflow: hidden;
		}
		.mother{

			position: absolute;
			border: 20px;
			background: #212931;
			width: 100%;
			height: 100%;

			
		}
		.cert{
			background: white;
			width: 80%;
			height:80%;
			position: relative;
			left: 10%;
			top:10%;
			border-radius: 20px;
			padding-top:8%;
		}
		.res-img{
			position: relative;
			right: 20%;
			width: 90%;
			border-radius: 20px;



		}
		.res-table{
			height: 80%;
			width: 70%;
			position: relative;
			left: 20%;

		}
		td{
			padding: 20px;
		}
		.ImpDet{
			font-size: 20px;
			font-weight: bolder;

		}
		.ImpDet1{
			font-size: 15px;
			

		}
		
	</style>
</head>
<body>
	<div class="mother">
		<div class="cert">
			<div class="row">
				<div class="col-md-8">
					<div style="overflow-x:auto;">
						<?php foreach($cert as $cer){ ?>
					  <table class="res-table">
					    <tr>
					    	<td>
					    		<label class="ImpDet">
					    			Certification 
					    		</label>
					    		
					    	</td>
					    	<td>
					    	 	<label class="ImpDet1">
					    			<?php echo $cer['name']; ?>
					    		</label>
					    	</td>
					    </tr>
					    <tr>
					    	<td>
					    		<label class="ImpDet">
					    			About
					    		</label>
					    	</td>
					    	<td>
					    		<label class="ImpDet1">
					    			<?php echo $cer['about']; ?>
					    		</label>
					    	</td>
					 
					    </tr>
					     <tr>
					    	<td>
					    		<label class="ImpDet">
					    			Center
					    		</label>
					    	</td>
					    	<td>
					    		<label class="ImpDet1">
					    			<?php echo $cer['center']; ?>
					    		</label>
					    	</td>
					    
					    </tr>
					     <tr>
					    	<td>
					    		<label class="ImpDet">
					    			Hours
					    		</label>
					    	</td>
					    	<td>
					    		<label class="ImpDet1">
					    			<?php echo $cer['about']; ?>
					    		</label>
					    	</td>
					    	
					    </tr>
					  </table>
					<?php } ?>
					</div>
				</div>
				<div class="col-md-4">
					<img src="images/usama.jpg" class="res-img">
				</div>
			</div>
			
		</div>
	</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>

<?php } ?>