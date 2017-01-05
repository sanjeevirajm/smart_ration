<?php
$phone_no= $_POST['phone_no'];

$con=mysqli_connect("mysql7.000webhost.com","a5944071_rcarddb","sanjeevi@rcarddb","a5944071_admin");

if (mysqli_connect_errno($con))
{
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT name,date,rice,sugar,wheat,maida,rava,atta,kerosene,oil,message FROM public where phone_no=$phone_no");

if($result!=null)
{
$row = mysqli_fetch_array($result);
$name=$row[0];
$date=$row[1];
$rice=$row[2];
$sugar=$row[3];
$wheat=$row[4];
$maida=$row[5];
$rava=$row[6];
$atta=$row[7];
$kerosene=$row[8];
$oil=$row[9];
$message=$row[10];

$result = mysqli_query($con,"SELECT curdate() FROM dual");
$row = mysqli_fetch_array($result);
$cdate=$row[0];

if($cdate==$date)
{
?>Name : <? echo "$name"; ?> <br>
Date : <? echo "$date"; ?> <br>

<?
if($rice==1)
 ?><ol><li>Rice <br>

<?
if($sugar==1)
 ?><li>Sugar<br>

<?
if($wheat==1)
 ?><li>Wheat<br>

<?
if($maida==1)
 ?><li>Maida<br>

<?
if($rava==1)
 ?><li>Rava<br>

<?
if($atta==1)
 ?><li>Atta<br>

<?
if($kerosene==1)
 ?><ol><li>Kerosene<br>

<?
if($oil==1)
 ?><li>Oil<br>

<?
if($message!=null)
{ 
echo "Message : ";echo $message;
}
?>

<?
echo "National consumer helpline : 1800114000";
}

else
{
?>
<h3>Today, food items are not available</h3>
<?
}

}

else
{
echo "Entered phone no is not registered";
?>
<br><br><b>
Click the button to register</b><br><br>
<form action="http://rationcard.netau.net/register.html">
<br><input type=submit value="Register"><br>
</form>
<?
}
mysqli_close($con);
?>