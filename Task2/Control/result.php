<?php
$ff="";
$ll="";
$ag="";
$D="";
$P="";

if(isset($_POST["submit"])){
$fname= $_REQUEST["fname"];

if(strlen($fname)<6)
{
    $ff= "Please enter at least 5 character name" ;
}
else
{
    $ff= "Your first name is ".$fname;
} echo"<br>";
$lname=$_REQUEST["lname"];
if(strlen($lname)<6)
{
    $ll= "Please enter at least 5 character name" ;
}
else
{
    $ll= "Your first name is "."".$lname;
} echo"<br>";

$Age= $_REQUEST["num"];
if(empty($Age))
{
    $ag= "Enter Your Age";
}
else
{
    $ag= "Your age is".$Age;
}
echo"<br>";

if(isset($_POST["des"]))
{
    $D= "You have selected ".$_POST["des"];
}
else{
    $D= "You havn't selected anything. You must be select at least one";
}echo"<br>";

if (isset($_POST["pre1"]) || isset($_POST["pre2"]) || isset($_POST["pre3"]))
{
    echo "you have selected language";echo"<br>";
    if(isset($_POST["pre1"])){$P= "The language is"." ".$_POST["pre1"];}
    if(isset($_POST["pre2"])){$P= "The language is"." ".$_POST["pre2"];}
    if(isset($_POST["pre3"])){$P= "The language is"." ".$_POST["pre3"];}
}
else
{ 
    $P= "You haven't selected anthing. You must be select at least one language";
}
}
?>