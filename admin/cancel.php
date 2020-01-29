		<?php
		include('../includes/config.php');
		
		$t_id = $_GET['id'];
		
		mysqli_query($conn, "UPDATE transactions SET order_stat = 'Cancelled' WHERE transaction_id = '$t_id'") or die(mysqli_error());
								
		header("location: manage-orders.php");	
		
		?>