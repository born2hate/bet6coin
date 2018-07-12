<?php

	function resetBets(){

		$con = new mysqli("localhost","root","","betcoin");
		//update 0 bets win and lose 
		$select = mysqli_query($con, "UPDATE bets SET bets_l='0', bets_w='0', roll_w='0', roll_l='0', status='0', amount_init='0' WHERE id='1'");
	}

	function profit(){

		$con = new mysqli("localhost","root","","betcoin");
		//update 0 bets win and lose 
		$select = mysqli_query($con, "UPDATE bets SET bets_l='0', bets_w='0' WHERE id='1'");
	}

	function amountu(){

		$con = new mysqli("localhost","root","","betcoin");
		 
		$select_amount = mysqli_query($con, "SELECT sum(amount) AS total FROM bets WHERE id='1' AND amount > '0'");
		
		if($r = mysqli_affected_rows($con) >= 1){
			while($total = mysqli_fetch_array($select_amount)){
				echo number_format($total['total'], 8, '.', '');
			}
		}
	}
?>