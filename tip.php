<! DOCTYPE html>
<html>
<head>
	
	<title> Tip Calculator </title>
	

    
</head>
<body>
<div>
	<div>
		<div>
		<h1> Tip Calculator </h1>
		<form action="utsab.php" method="post">

			<p > <span>Bill subtotal: $</span><input type="text" name="total" value="<?php echo isset($_POST['total']) ? $_POST['total'] : NULL; ?>" /> </p>
			<p> Tip Percentage </p>

		<?php
			$tips  = [10, 15, 20];
			for ($i = 0; $i < 3; $i++) {
		?>
		<input type="radio" name="tip" value="<?php echo $tips [$i]; ?>" > <?php echo $tips [$i]."% <br />"; ?>
		<?php
			}
		?>
		<input type="submit" name="submit" value="Submit"/>
		  </form>
	  </div>			
	</div>
	<div>
			<div>

			<?php
				//checking if there the value for tip has been submitted
				if (isset($_POST["submit"])) {

					if (!is_numeric($_POST["total"])) {
						echo "Please submit numeric value for subtotal <br/ >"; 
					}
					
					if (!isset($_POST["tip"])) {
						echo "Please submit the tip. <br/ > ";
						} 

					if ($_POST["total"] <= 0) {
							echo "Please submit positive value for subtotal <br />"; 
						}
					
					
					if (isset($_POST["tip"]) && is_numeric($_POST["total"]) ) {



						if ($_POST["total"] > 0) {
							$subtotal = floatval($_POST["total"]);
							$tip_percentage = floatval($_POST['tip']); // tip percentage
							$tip = ($subtotal) * ($tip_percentage/100);
							$total = $tip + $subtotal;
							echo "Sub Total: $";
							echo  number_format($subtotal, 2). "<br />";
							echo "Tip: $";
							echo number_format($tip, 2) . "<br />";
							echo "Total: $" ;
							echo number_format($total, 2) . "<br />";
							echo "Your input value is in correct format <br />"; 
						}
						
					}
				}
			?>
	</div>
</div>	

</pre>
</body>
</html>