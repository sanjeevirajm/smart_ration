<?php
$card_no= $_POST['cardno'];
$phone_no= $_POST['phoneno'];

$con=mysqli_connect("mysql7.000webhost.com","a5944071_rcarddb","sanjeevi@rcarddb","a5944071_admin");

if (mysqli_connect_errno($con))
{
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT id,ward_no,shop_no,name FROM public_data where card_no='$card_no'");

if($result!=null)
{
$row = mysqli_fetch_array($result);
$id=$row[0];
$ward_no=$row[1];
$shop_no=$row[2];
$name=$row[3];

mysqli_query($con,"INSERT INTO public(card_no,id,ward_no,shop_no,phone_no,name) VALUES ('$card_no',$id,$ward_no,$shop_no,$phone_no,'$name')");
echo "Successfully registered";

?><br><br>
<form action="http://rationcard.netau.net//public_login.html">
<input type=submit value="Food items available today">
</form>
<?
}

else
{
echo "Enter card no without mistakes (Do not leave spaces, enter backslash at correct location)";
}
mysqli_close($con);
?>