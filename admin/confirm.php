<?php
		include('../includes/config.php');
		
		$t_id = $_GET['id'];
		
		mysqli_query($conn, "UPDATE transactions SET order_stat = 'Confirmed' WHERE transaction_id = '$t_id'") or die(mysqli_error());
		
		$query2 = mysqli_query($conn, "SELECT * FROM transaction_detail LEFT JOIN tblvehicles ON tblvehicles.id = transaction_detail.product_id WHERE transaction_detail.transaction_id = '$t_id'") or die (mysql_error());
		while($row = mysqli_fetch_array($query2)){
			$pid = $row['id'];
			$query = mysqli_query($conn, "UPDATE tblvehicles SET avail = 'Sold' WHERE id = '$pid'") or die(mysqli_error());
		}

		header("location: manage-orders.php");	
		
		?>