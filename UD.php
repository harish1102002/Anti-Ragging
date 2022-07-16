<html>
<body>
<?php
$s2=$_GET["a1"];
$s3=$_GET["a2"];
$s1='Victim Name  :  '.$s2.
'; Victim Regno  :  '.$s3.
'; Victim Deptm  :  '.$_GET["a3"].
'; Suspect Name : '.$_GET["a4"].
'; Suspect Dept : '.$_GET["a5"].
'; Incident Date : '.$_GET["a6"].
'; case Description : '.$_GET["a7"];
if(isset($_GET["a1"]))
{$s=mysqli_connect('localhost','root','','student');
$s1="INSERT INTO data VALUES('".$s2."','".$s1."','".$s3."')";
$a=mysqli_query($s,$s1);}
?>
<font size="6" color="blue">
<center>YOUR COMPLAINT HAS BEEN REGISTERED<br>THANK YOU<br>
VISIT AGAIN IF NEEDED</center>
</body>
</html>