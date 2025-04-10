 <?php
	$sideA = $_POST['sideA'];
    $sideB = $_POST['sideB'];
    $height = $_POST['height'];

	$Volume = (1/6) * $sideA * $sideB * $height
?>
<h3>Results:</h3>
The area of the Trapezoid is <?php echo "$Volume" ?>cm<sup>2</sup>.

