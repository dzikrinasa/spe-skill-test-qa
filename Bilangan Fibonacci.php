<!DOCTYPE html>
<html>
<body>

<?php
function isPerfectSquare($x)
{
	$s = (int)(sqrt($x));
	return ($s * $s == $x);
}
function isFibonacci($n)
{
	return isPerfectSquare(5 * $n * $n + 4) ||
		isPerfectSquare(5 * $n * $n - 4);
}
$fibonacci = 4;
if(isFibonacci($fibonacci))
echo "True";
else
echo "False";
?>

</body>
</html>
