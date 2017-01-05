<?php
$id= $_POST['id'];
$pwd=$_POST['pwd'];
$con=mysqli_connect("mysql7.000webhost.com","a5944071_rcarddb","sanjeevi@rcarddb","a5944071_admin");

if (mysqli_connect_errno($con))
{
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT password FROM shopkeeper where id=$id");

if($result!=null)
{
$row = mysqli_fetch_array($result);
$password=$row[0];
if($password==$pwd)
 {
  ?>
  <form action="enter_data.html" method="POST">
     <input type="hidden" id="id" value="<? echo $id; ?>">
     <input type="submit" value="Enter data">
  </form> 
<?
$result = mysqli_query($con,"SELECT curdate() FROM dual");
$row = mysqli_fetch_array($result);
$cdate=$row[0];
}
 else
  echo "Enter correct password";
}
else
 echo "Enter correct ID";
?>