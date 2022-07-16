<html>
<form method="GET" action="rev2.php" >
<input name='Name'></input>
<button type="submit">submit</button> 
</form>
<?php
$a=array('a' => 1, 'b' => 2);
$a=array_reverse($a);                                                                                                                                                                                                                                                     
foreach($a as $a1=>$a2)
echo $a1.$a2." <br>";
$b=strtotime('tomorrow');
echo date('d/m/y',$b);
$k= $_GET['Name'];
echo $k;
?>
</html>

