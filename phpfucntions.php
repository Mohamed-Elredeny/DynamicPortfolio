<?php 

$con = mysqli_connect('localhost','root','','portfolio');

$q1 =mysqli_query($con, "SELECT * FROM skills");
$skills = mysqli_fetch_all($q1,MYSQLI_ASSOC);

$q2 =mysqli_query($con , "SELECT * FROM certifications");
$certifications = mysqli_fetch_all($q2,MYSQLI_ASSOC);


$q3 = mysqli_query($con,"SELECT * FROM projects");
$projects = mysqli_fetch_all($q3,MYSQLI_ASSOC);