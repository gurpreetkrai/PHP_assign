<?php

/*$fname=$_POST["fname"];
$pass=$_POST["pwd"];
$gender=$_POST["gender"];

$hobby=implode(',',$_POST["hobby"]);
echo "Implode-".$hobby."<br>";

$hby=explode(',',$hobby);

foreach($hby as $h)
{
	echo $h."<br>";
}


//echo $hby;


die();



echo "Name is:-".$fname."<br>";
echo "Password is:-".$pass."<br>";
echo "Gender is:-".$gender."<br>";
echo "Hobby is:-".$hobby."<br>";*/


$file=$_FILES['document']['name'];

$filesize=$_FILES['document']['size'];
$filetype=pathinfo($file,PATHINFO_EXTENSION);

$tmp=$_FILES['document']['tmp_name'];
echo $tmp."<br>";

$actual_path="docs/".$file;
echo $actual_path;
move_uploaded_file($tmp, $actual_path);


die();
echo $file."<br>";
echo $filesize."<br>";
echo $filetype;










?>