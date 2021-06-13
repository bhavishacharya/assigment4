<!DOCTYPE html>
<html>
<head>
	<title>reverse</title>
</head>
<body>

<form method="POST">
<p>Enter a number:</p><input type="text" name="num"/>
<p><button type="submit"> check</button></p>
</form>

<?php
	if($_POST)
	{
		$num = $_POST['num'];
		$on_num = $num;
		$rev_num = 0;
		$sum = 0;
		$rem = 0;
		while ($num > 1) 
		{
			$rem = $num % 10;
			$sum += $rem;
			$rev_num = $rev_num * 10 + $rem;
			$num = (int)$num / 10; 
		}
		echo "The sum of thr digits of $on_num is: $sum";
		echo "<br>";
		if($on_num == $rev_num)
		{
			echo "The number $on_num is palindrome";
		}
		else
		{
			echo "The number $on_num is not a palindrome";
		}
	}
	?>
</body>
</html>