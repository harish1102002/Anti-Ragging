<!doctype html>
<html> 
<head><title> Google </title></head>
<h1 style="font-size:80px"><font color="blue"> G<font color="red">o<font color="yellow">o<font color="green">
g<font color="purple">l<font color="blue">e </h1>
<body><br>
<?php 
$s1="hi ";
$s2=" harish";
$s2=trim($s2);
echo $s1.$s2."<br>";
#define('a',"shanu");
#$a =array("a","b","c","d","e");
#echo a[0]."<br>";
#echo count($a)."<br>";
#echo print_r($a)."<br>";
#echo var_dump($a)."<br>";
#$s=array('a'=>1,'b'=>2,'c'=>3);
#echo print_r($s)."<br>";
#foreach($s as $a=>$d)
#echo "$a $d <br>";
#if(1==1 AND 2==2)
#echo "hi<br>";
#echo date("d/m/y")."<br>";
#$a=strtotime('tomorrow');
#echo date('d-m-y',$a);
if(isset($_GET['name']) and isset($_GET['email']))
echo $_GET['name']."  ".$_GET['email']."<br>";
#if(isset($_POST['name']))
#echo $_POST['name']."  ".$_POST['email'];
#if(filter_input(INPUT_GET,'email',FILTER_VALIDATE_EMAIL))
#echo "valid";
#else
#echo "invalid";
#$s=$_GET['email'];
#echo filter_var($s,FILTER_SANITIZE_EMAIL);
#mail("harishpranesh983@gmail.com","hi","Hi I am here to help you");
$p='C:\Users\R P Pranesh Harish\Desktop\HTML\h.html';
#echo basename($p);
#echo basename($p,'.html');
#echo dirname($p);
#echo realpath($p);
#echo filesize($p);
$s1='s';
$s=mysqli_connect('localhost','root','','student');
$s1="INSERT INTO data VALUES('Bhath','".$s1."','2021012')";
$a=mysqli_query($s,$s1);
if($a){
$s=mysqli_query($s,"SELECT * FROM data");
while($a=mysqli_fetch_row($s))
printf("%s %s %s<br>",$a[0],$a[1],$a[2]);}
$s="name=shanu&email=harish";
parse_str($s,$ar1);
#echo $ar1["name"];
#phpinfo();
?>
<form method="GET" action="p1.php">
<input name="name"></input>
<input name="email"></input>
<input type="submit"></input>
</form>
<!--form method="POST" action="p1.php">
<input name="name"></input>
<input name="email"></input>
<input type="submit"></input>
</form-->
<a href="p1.php?name=shanu&email=harish">home</a>
</body>
</html>