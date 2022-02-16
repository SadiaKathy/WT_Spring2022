<?php
$fname= $_REQUEST["fname"];
$ff="";
$ll="";
$ag="";

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
{$ag= "Enter Your Age";}
else{$ag= "Your age is".$Age;}
echo"<br>";

if(isset($_POST["des"]))
{
    echo "You have selected ".$_POST["des"];
}
else{
    echo "You havn't selected anything. You must be select at least one";
}echo"<br>";

if (isset($_POST["pre1"]) || isset($_POST["pre2"]) || isset($_POST["pre3"]))
{
    echo "you have selected language";echo"<br>";
    if(isset($_POST["pre1"])){echo "The language is"." ".$_POST["pre1"];}
    if(isset($_POST["pre2"])){echo "The language is"." ".$_POST["pre2"];}
    if(isset($_POST["pre3"])){echo "The language is"." ".$_POST["pre3"];}
}
else
{ 
    echo "You haven't selected anthing. You must be select at least one language";
}
?>