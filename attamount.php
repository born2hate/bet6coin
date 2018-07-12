<?php

	$con = new mysqli("localhost","root","","betcoin");

	$select = mysqli_query($con, "SELECT * FROM bets WHERE id='1'");

	while ($totalacc=mysqli_fetch_array($select)) {
		$profit_init=$totalacc['amount_init'];

		echo "<a href='#' class='amountb'>".number_format($totalacc['amount'], 8, '.', '')."</a> BTC";

		$profit = number_format($totalacc['amount'] - $profit_init, 8, '.', '');

		if($profit_init == "0"){
			$profit_att = "<a href='#' class='text-success'> 0.00000000 BTC</a>";
			exit();
		}
		if($profit > "0"){

			$profit_att = "<a href='#' class='text-success'>+ ".$profit. " BTC</a>";
		}else{
			$profit_att = "<a href='#' class='text-danger'> ".$profit." BTC</a>";
		}
		echo "<div class='profit bg-light text-color' >profit: ".$profit_att."<br><br>
		<small>WIN <a href='#' text-success>".$totalacc['roll_w']."</a> Rolls - LOSE <a href='text-warning'>".$totalacc['roll_l']."</a> Rolls</small><br></div>";
	}

	

		

?>