<?php
		$dataArray[];
		$query = "SELECT * FROM products";
		echo $query;
		$res_users = $mysqli->query($query);

		while ($some_users = $res_users->fetch_assoc()) {
			echo $some_users['id'];
		}
 ?>
