<!DOCTYPE html>
<html>
<head>
	<title>armstrong</title>
</head>
<body>
	<form method="POST">
	<P>Enter a number:</P>
	<p><input type="text" name="num"></p>
	<p><button type="submit">check</button></p>
	</form>
<?php  
if($_POST)
{
	$num = $_POST['num'];
	$total=0;  
	$x=$num;  
	while($x!=0)  
	{  
		$rem=$x%10;  
		$total=$total+$rem*$rem*$rem;  
		$x=$x/10;  
	}  
	echo "The given number is : $num<br>";
	echo "The sum of digits : $total<br>";
	if($num==$total)  
	{  
		echo "<br>Yes it is an Armstrong number"; 
	}  
	else  
	{  
		echo "<br>No it is not an armstrong number";  
	}  
}

?> 
</body>
</html>