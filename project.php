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
    .mySlides{
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
      padding: 200px;

    }

    .ImpDet{
      font-size: 20px;
      font-weight: bolder;

    }
    .ImpDet1{
      font-size: 15px;
      

    }
    table td{
      padding: 20px;
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

  <div class="row">
    <?php foreach($cert as $cer){ ?>
  <div class="col-md-8">
          <div style="overflow-x:auto;">
         
            <table class="res-table">
              <tr>
                <td >
                  <label class="ImpDet">
                    Project 
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
                    Details
                  </label>
                </td>
                <td>
                  <label class="ImpDet1">
                    <?php echo $cer['Details']; ?>

                  </label>
                </td>
           
              </tr>
               <tr>
                <td>
                  <label class="ImpDet">
                    Link
                  </label>
                </td>
                <td>
                  <label class="ImpDet1">
                   <a href="<?php echo $cer['link'] ?>" ><button class="btn btn-danger">Project Link</button></a>
                  </label>
                </td>
              
              </tr>
               
            </table>

          </div>
  </div>
<?php } ?>
  <div class="col-md-4">
  
    <!-- slider -->
  <div class="w3-content w3-display-container">
  		 <?php foreach($imgs as $r){ 
             echo "<img src='images/". $r .  "'  class='mySlides' />"; 
           }?>
      <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)" style="position: relative;right: 10%;top:30px;">&#10094;</button>
      <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)" style="position: relative;left: 35%;top:30px;">&#10095;</button> 
  </div>
     <!-- slider -->
   </div>
  </div>
   
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