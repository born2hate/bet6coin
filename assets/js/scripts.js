$(document).ready(function(){

	$(".rate").hide();
	$("#x1").click(function(){
		$(".porcent-rate").html("<small class='text-success'>90 % Win -> 0.88x</small>");
		$(".rate").text("25");
	});
	$("#x2").click(function(){
		$(".porcent-rate").html("<small class='text-success'>75 % Win -> 1.24x</small>");
		$(".rate").text("35");
	});
	$("#x3").click(function(){
		$(".porcent-rate").html("<small class='text-success'>50 % Win -> 1.97x</small>");
		$(".rate").text("50");
	});
	$("#x4").click(function(){
		$(".porcent-rate").html("<small class='text-success'>33 % Win -> 0.7x</small>");
		$(".rate").text("60");
	});
	$("#x5").click(function(){
		$(".porcent-rate").html("<small class='text-success'>25 % Win -> 3.85x</small>");
		$(".rate").text("70");
	});
	$("#x6").click(function(){
		$(".porcent-rate").html("<small class='text-success'>10 % Win -> 1x</small>");
		$(".rate").text("90");
	});

	setInterval(function(){
		$.post('attamount.php',{},function(data){
				$(".amount").html(data);
			});
	}, 123);

	$(".bet").val("0.00000001");

	$("#betm").click(function(){
		
		if($(".bet").val() ==""){
			var base = "0.000000001";
			var soma = base * 2;		
		}else{
			soma = $(".bet").val() * 2;
		}
		
		$(".bet").val(soma.toFixed(8));
	});

	$("#betl").click(function(){
		var soma_l = $(".bet").val() / 2;
		$(".bet").val(soma_l.toFixed(8));
	});
	var all = $(".amountu").text();
	$("#betall").click(function(){
		
		$(".bet").val(all);
	});
	$(".betnow").click(function(){

		var porcent_rate = $(".rate").text();
		var amount_bet = $(".bet").val();

		if(porcent_rate == "90"){
			porcent_rate2 = "1";
			porcent_rate1 = "95";
		}
		if(porcent_rate == "70"){
			porcent_rate2 = "1.85";
			porcent_rate1 = "80";
		}
		if(porcent_rate == "60"){
			porcent_rate2 = "1";
			porcent_rate1 = "70";
		}
		if(porcent_rate == "50"){
			porcent_rate2 = "1.55";
			porcent_rate1 = "55";
		}
		if(porcent_rate == "35"){
			porcent_rate2 = "1.24";
			porcent_rate1 = "25";
		}
		if(porcent_rate == "25"){
			porcent_rate2 = "0.88";
			porcent_rate1 = "10";
		}

		//
		var trueBET = "1";
		var falseBET  = "0";

		setTimeout(function(){

			if(porcent_rate1 == "10"){
				porcent_rate1 = "10";
				//var max = "90";
			}

			if(porcent_rate1 == "25"){
				porcent_rate1 = "25";
				//var max = "75";
			}

			if(porcent_rate1 == "35"){
				porcent_rate1 = "35";
				//var max = "65";
			}

			if(porcent_rate1 == "50"){
				porcent_rate1 = "55";
				//var max = "50";
			}

			if(porcent_rate1 == "60"){
				porcent_rate1 = "30";
				//var max = "60";
			}

			if(porcent_rate1 == "80"){
				porcent_rate1 = "20";
			
			}
			var ex = Math.floor(Math.random() * 100);
			//var max = porcent_rate1 / 4;
			
			if(porcent_rate1 == "20"){
				var max = "80";
			}
			if(porcent_rate1 == "30"){
				var max = "60";
			}
			if(porcent_rate1 == "55"){
				var max = "50";
			}
			if(porcent_rate1 == "35"){
				var max = "65";
			}
			if(porcent_rate1 == "25"){
				var max = "25";
			}
			if(porcent_rate1 == "10"){
				var max = "10";
			}
			//win
			//2 method earn max and min or (min) / (max)
			if (ex >= max) {
				var status = "1";
				
				var returnBet = parseFloat(amount_bet) * 1; 
				var total_account = $(".amount").text();
				var total_att = parseFloat(total_account)+parseFloat(returnBet);
				var total_new = total_att.toFixed(8);
				
				console.log("Win > "+ex);
				$.post('att.php', {"status":status, "amount":returnBet.toFixed(8), "rate": porcent_rate2}, function(data){

                	$(".more-btc").show();
					$(".amount").text(total_new+" ");
					$(".more-btc").html("<p class='text-success'>+ "+ data + " BTC</p> " + ex + " <br>>= "+ max);
				});
			
			}else{
				var status = "2";
				//lose
				
			    var returnBet1 = parseFloat(amount_bet) * parseFloat(porcent_rate2);
				var total_account = $(".amount").text();
				var total_att = parseFloat(total_account) - parseFloat(returnBet1);
				var total_new = total_att.toFixed(8);
				
				console.log("Lose > "+ex);
				$.post('att.php', {"status":status, "amount":returnBet1.toFixed(8), "rate": porcent_rate2}, function(data){
                	
					$(".more-btc").show();
					$(".amount").text(total_new+" ");
					$(".more-btc").html("<p class='text-danger'>- "+ data + " BTC</p> "+ ex+ "<br>>= "+ max);
				});

			}
			
		
			setTimeout(function(){
				$(".more-btc").show();	
			}, 100);

			
		}, 1000);
	});

	$(".bet-reload").hide();
	$(".stopnow").hide();
	$(".betnow-autobet").click(function(){

		var porcent_rate = $(".rate").text();
		var amount_bet = $(".bet").val();

		$(".stopnow").show();
		$(".bet-reload").show();
		$(this).hide();

		if(porcent_rate == "90"){
			porcent_rate2 = "1";
			porcent_rate1 = "95";
		}
		if(porcent_rate == "70"){
			porcent_rate2 = "1.85";
			porcent_rate1 = "80";
		}
		if(porcent_rate == "60"){
			porcent_rate2 = "1";
			porcent_rate1 = "70";
		}
		if(porcent_rate == "50"){
			porcent_rate2 = "1.55";
			porcent_rate1 = "55";
		}
		if(porcent_rate == "35"){
			porcent_rate2 = "1.24";
			porcent_rate1 = "25";
		}
		if(porcent_rate == "25"){
			porcent_rate2 = "0.88";
			porcent_rate1 = "10";
		}

		//
		var trueBET = "1";
		var falseBET  = "0";
		pause = false;
		setInterval(function autoBet(){
			if(!pause){
				if(porcent_rate1 == "10"){
					porcent_rate1 = "10";
					//var max = "90";
				}

				if(porcent_rate1 == "25"){
					porcent_rate1 = "25";
					//var max = "75";
				}

				if(porcent_rate1 == "35"){
					porcent_rate1 = "35";
					//var max = "65";
				}

				if(porcent_rate1 == "55"){
					porcent_rate1 = "50";
					//var max = "50";
				}

				if(porcent_rate1 == "60"){
					porcent_rate1 = "30";
					//var max = "60";
				}

				if(porcent_rate1 == "80"){
					porcent_rate1 = "20";
				
				}
				var ex = Math.floor(Math.random() * 100);
				//var max = porcent_rate1 / 4;
				
				if(porcent_rate1 == "20"){
					var max = "80";
				}
				if(porcent_rate1 == "30"){
					var max = "60";
				}
				if(porcent_rate1 == "50"){
					var max = "50";
				}
				if(porcent_rate1 == "35"){
					var max = "35";
				}
				if(porcent_rate1 == "25"){
					var max = "25";
				}
				if(porcent_rate1 == "10"){
					var max = "10";
				}
				//win
				//2 method earn max and min or (min) / (max)
				if (ex >= max) {
					var status = "1";
					
					var returnBet = parseFloat(amount_bet) * 1; 
					var total_account = $(".amount").text();
					var total_att = parseFloat(total_account)+parseFloat(returnBet);
					var total_new = total_att.toFixed(8);
					
					console.log("Win > "+ex);
					$.post('att.php', {"status":status, "amount":returnBet.toFixed(8), "rate": porcent_rate2}, function(data){

	                	$(".more-btc").show();
						$(".amount").text(total_new+" ");
						$(".more-btc").html("<p class='text-success'>+ "+ data + " BTC</p> " + ex + " <br>>= "+ max);
					});
				
				}else{
					var status = "2";
					//lose
					
				    var returnBet1 = parseFloat(amount_bet) * parseFloat(porcent_rate2);
					var total_account = $(".amount").text();
					var total_att = parseFloat(total_account) - parseFloat(returnBet1);
					var total_new = total_att.toFixed(8);
					
					console.log("Lose > "+ex);
					$.post('att.php', {"status":status, "amount":returnBet1.toFixed(8), "rate": porcent_rate2}, function(data){
	                	
						$(".more-btc").show();
						$(".amount").text(total_new+" ");
						$(".more-btc").html("<p class='text-danger'>- "+ data + " BTC</p> "+ ex+ "<br>>= "+ max);
					});

				}
				
			
				setTimeout(function(){
					$(".more-btc").show();	
				}, 100);

			}	
			}, 1000);
	
	});

	$(".luzon").hide();
	$(".luzon").click(function(){
		$(this).hide();
		$('.luzoff').show();
		$("#main").removeClass("bg-color");
		$("h1").addClass("text-sec");
		$("blockquote").removeClass("text-sec");
	});
	$(".luzoff").click(function(){
		$(this).hide();
		$('.luzon').show();
		$("#main").addClass("bg-color");
		$("h1").addClass("text-light");
		$("h1").removeClass("text-sec");
		$("blockquote").addClass("text-sec");
	});

	$(".bet-reload").click(function(){

		setTimeout(function(){
			pause = true;
			location.reload();
		}, 1000);
	});

	$(".chatbox").hide();
	stopshow = false;
	$(".chat").click(function(){
		stopshow = true;
		$(this).hide();
		$(".chatbox").show();
	})

	$(".close-chat-box").click(function(){
		stopshow = false;
		$(".chatbox").hide();
	})

});

function stopBet(){
	
	setTimeout(function(){

		if(pause == false){
			pause = true;	
			console.log("Stoped autoBet");
			$(".stopnow").removeClass("btn-danger");
			$(".stopnow").addClass("btn-warning");
			$(".stopnow").text("RESTART");

		}else{
			pause = false;	
			console.log("Restart autoBet");
			$(".stopnow").removeClass("btn-warning");
			$(".stopnow").addClass("btn-danger");
			$(".stopnow").text("STOP");

		}
	}, 1000);
	
}

setInterval(function btnchat(){

	if(!stopshow){
		$(".chat").removeClass("bg-sec");
		$(".chat").addClass("text-sec");
		$(".chat").fadeIn("slow");
		setTimeout(function(){
			$(".chat").addClass("bg-sec");
			$(".chat").removeClass("text-sec");	
			//$(".chat").fadeIn("slow");
		}, 500);
	}
}, 1000);




