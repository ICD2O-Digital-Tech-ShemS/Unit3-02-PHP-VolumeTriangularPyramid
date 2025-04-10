<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="user input">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Shem Irekpita">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Volume of a Right Triangular Pyramid</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h3>Volume of a Right Triangular Pyramid in PHP</h3>";
		?>
		<!-- form to get the base and height from the user -->
    <form action="./result.php" method="post" target="results">
        <label for="sideA">Side A</label>
        <input type="text" id="sideA" placeholder="Enter the sideA" name="sideA"><br><br>
        <label for="sideB">Side B</label>
        <input type="text" id="sideB" placeholder="Enter the sideB" name="sideB"><br><br>
        <label for="height">Height</label>
        <input type="text" id="height" placeholder="Enter the height" name="height"><br><br>
        <input type="submit" value="Calculate Volume">
		</form>
<!-- iframe for the results to show on the web page. -->
			<iframe id="results" name="results">			
   <div id="user-info">
      <div id="$Volume"></div>
</div>
	    </iframe>
	</body>
	</body>
</html>