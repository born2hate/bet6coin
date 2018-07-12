<?php

	$con = new mysqli("localhost","root","","betcoin");

	$status = addslashes($_POST['status']);
	$add = addslashes($_POST['amount']);
	$rate = addslashes($_POST['rate']);


	$select = mysqli_query($con, "SELECT * FROM bets WHERE id ='1'");
 
	while ($rr = mysqli_fetch_array($select)) {

		if($add <= $rr['amount']){
			
		}else{
			echo "<script>setTimeout(function(){
				pause=true;
			}, 100);</script>";
			exit();
		}

		$r_m_w = $rr['bets_l'] * $rr['bets_l'];
		$r_m_l = $rr['bets_w'];
		$amount = number_format($rr['amount'], 8, '.', '');

		
		$updateinit = mysqli_query($con, "UPDATE bets SET amount_init = '$amount', status='1' WHERE id='1' AND status ='0'");

		if ($rr['amount'] < "0.000000001" || $rr['amount'] < $add) {
			echo "Sem saldo para jogar...";
			/*echo "<script>setTimeout(function(){
				location.reload();
			}, 3000);</script>";*/
			$updatea = mysqli_query($con, "UPDATE bets SET bets_l = '0' WHERE id='1'");
			$updateb = mysqli_query($con, "UPDATE bets SET bets_w = '0' WHERE id='1'");
		    $up = mysqli_query($con, "UPDATE bets SET amount = '0.00000000' WHERE id='1'");
			exit();
		}
	}
	if($status == 1){
		
		if($rate == "0.88"){
        
        $porcent = "0.098";
		$add_add = $add * $porcent; 
		
		$add = $add_add;

		}

		if($rate == "1.24"){
        
        $porcent = "0.32";
		$add_add = $add * $porcent ; 
		
		$add = $add_add;

		}

		if($rate == "1.55"){
        
        $porcent = "0.96";
		$add_add = $add * $porcent ; 
		
		$add = $add_add;

		}

		if($rate == "1.1"){
        
        $porcent = "60";
		$add_add = $add * $porcent ; 
		
		$add = $add_add;

		}

		if($rate == "1.85"){
        
        $porcent = "3.25";
		$add_add = $add * $porcent ; 
		
		$add = $add_add;

		}

		if($rate == "2.2"){
        
        $porcent = "3.8";
		$add_add = $add * $porcent ; 
		
		$add = $add_add;

		}

		$get_low = mysqli_query($con, "SELECT * FROM bets WHERE id='1'");

		/*while ($low=mysqli_fetch_array($get_low)) {
			$amount_low = $low['bets_w'] * 2;
			$total = number_format($amount_low, 8, '.', '') + $add; 
		} */
		$update = mysqli_query($con, "UPDATE bets SET bets_w = bets_w+$add, roll_w=roll_w+1 WHERE id='1'");
		if ($c = mysqli_affected_rows($con) >= 1) {

			$a = mysqli_query($con, "SELECT * FROM bets WHERE id = '1'");
			while ($r = mysqli_fetch_array($a)) {
				$loseatt = $r['bets_w'];
			    
				$am_w = number_format($r['amount'], 8, '.', '');
				$rb = number_format($r['bets_w'], 8, '.', '');
				$add_w = $am_w + $rb;
				echo $rb;
			}

			$up = mysqli_query($con, "UPDATE bets SET bets_l = '0', bets_w='0' WHERE id='1'");
			$up = mysqli_query($con, "UPDATE bets SET amount = $add_w WHERE id='1'");
		}

	}else{

		if($rate == "0.88"){
        
        $porcent = "111";
		$add_add = ($add * $porcent) / 100; 
		
		$add = $add_add;

		}

		if($rate == "1.24"){
        
        $porcent = "80.7";
		$add_add = ($add * $porcent) / 100; 
		
		$add = $add_add;

		}

		if($rate == "1.55"){
        
        $porcent = "64";
		$add_add = ($add * $porcent) / 100; 
		
		$add = $add_add;

		}

		if($rate == "1.1"){
        
        $porcent = "50";
		$add_add = ($add * $porcent) / 100; 
		
		$add = $add_add;

		}

		if($rate == "1.85"){

		$porcent = "50";
		$add_add = ($add * $porcent) / 100; 
		
		$div_rate = $add_add / $porcent;
		$add = $add_add;
		
		}

		if($rate == "2.2"){
        
        $porcent = "10";
		$add_add = ($add * $porcent) / 100; 
		
		$add = $add_add;

		}

		$get_low = mysqli_query($con, "SELECT * FROM bets WHERE id='1' AND bets_l > '0'");

		if($r_getlow = mysqli_affected_rows($con) >= 1){

			$up = mysqli_query($con, "UPDATE bets SET bets_l ='0' WHERE id='1'");

			/*while ($low=mysqli_fetch_array($get_low)) {
				$amount_low = $low['bets_l'] * 2;
				$total = number_format($amount_low, 8, '.', ''); 
			}*/

		}/*else{
			$total = $add;
		}*/
		$up = mysqli_query($con, "UPDATE bets SET bets_l = bets_l+$add, roll_l=roll_l+1 WHERE id='1'");
		$select2 = mysqli_query($con, "SELECT * FROM bets WHERE id ='1'");

		while ($rr = mysqli_fetch_array($select2)) {

			echo number_format($rr['bets_l'], 8, '.', '');
			$am_l = number_format($rr['amount'], 8, '.', '');
			$lose = number_format($rr['bets_l'], 8, '.', '');
			$add_l = $am_l - $lose;
		}

		$update = mysqli_query($con, "UPDATE bets SET bets_w = '0' WHERE id='1'");
		$up = mysqli_query($con, "UPDATE bets SET amount = '$add_l' WHERE id='1'");
		
	}
?>