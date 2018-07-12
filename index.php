
<?php
	include "php/functions.php";
	echo resetBets();
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="icon" href="../../../../favicon.ico"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>BET6COIN</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/chat.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/cover.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <style type="text/css">
	.bg-color{ background: #696969 !important; }
	.text-color { color: #BEBEBE !important; }
	.bg-sec { background: #1874CD !important; }
	.text-sec { color: #1874CD !important; }
  </style>
  <body class=" all">
    <nav class="site-header bg-dark py-1">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="index.php">
         <img src="assets/images/text4144.png" height="40" width="120" alt="6bet">
        </a>
        <a class="py-2 d-none d-md-inline-block text-color" href="#">Tour</a>
        <a class="py-2 d-none d-md-inline-block text-color" href="#">Product</a>
        <a class="py-2 d-none d-md-inline-block text-color" href="#">Features</a>
        <a class="py-2 d-none d-md-inline-block text-color" href="#">Enterprise</a>
        <a class="py-2 d-none d-md-inline-block text-color" href="#">Support</a>
        <a class="py-2 d-none d-md-inline-block text-color" href="#">Pricing</a>
        <a class="py-2 d-none d-md-inline-block text-color" href="#">Cart</a>
      </div>
    </nav>
    
    <div id="main" class="position-relative overflow-hidden text-center ">
      <div class="col-md-10 p-lg-5 mx-auto"> <!-- my-5 -->
        <h1 class="display-4 font-weight-normal ">Bet 6 Coin</h1><blockquote>Crypto coin GAME <i class="fas fa-dice-six"></i></blockquote>
        <p class="lead font-weight-normal text-color">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple's marketing pages.</p>
       	<div>
       	<div class="row" style=" z-index: 1000; margin: 5px 5px;">
	    	<button type='button' class='luzon btn bg-link text-light'><i class="far fa-lightbulb"></i></button>
	       	<button type='button' class='luzoff btn bg-dark text-color'><i class="fas fa-lightbulb"></i></button>
    	</div>
       		<a href="#" style="display: none;" class='amountu'><?php echo amountu(); ?></a>
       		<blockquote style="height: 110px;" class="bg-light text-color">
       			Amount: <div class="amount text-warning"> </div></blockquote>
       		 <p class="more-btc bg-light"></p>
       		<input type="text" name="bet" value="" class="bet form-control col-md-4 p-lg-1 mx-auto my-2" placeholder="0.00000001">
	       	<a class="btn btn-light text-sec" id="betm" href="#a">BET +</a>
	       	<a class="btn btn-light" id="betl" href="#a">BET -</a>
	       	<a class="btn btn-link" id="betall" href="#a">BET ALL</a>
	       	<hr>
	       	<a href="#" class="rate"></a>
	       	<div class="porcent-rate text-success"></div>
	       	 <a class="btn btn-success betnow" href="#bet">BET</a>
	        <a class="btn btn-danger stopnow" href="#stop" onclick="stopBet()">STOP</a>
	        <a class="btn bg-sec text-light betnow-autobet" href="#auto">AUTO BET</a>
	        <a class="btn bg-sec text-light bet-reload" href="#reload" style="margin-bottom: 3px;">RELOAD</a><br>
	       	<a class="btn btn-outline-dark" id="x1" href="#betx1">0.88x</a>
	        <a class="btn btn-outline-dark" id="x2" href="#betx2">1.24x</a>
	        <a class="btn btn-outline-dark" id="x3" href="#betx3">1.97x</a>
	        <a class="btn btn-outline-dark" id="x4" href="#betx4">0.7x</a>
	        <a class="btn btn-outline-dark" id="x5" href="#betx5">3.25x</a>
	        <a class="btn btn-outline-dark" id="x6" href="#betx6">3.80x</a>
       	</div><hr>
       
      </div>
       <div class="row cc">
    	<button type='button' class='chat btn bg-sec text-light'><i class="far fa-comment-alt"></i></button>
    </div>
      <div class="product-device box-shadow d-none d-md-block"></div>
      <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
    </div>
    <div class="row">
    	<div class="bg-sec card col-md-3 col-md chatbox" style="height: 300px; position: fixed; margin: -400px 18px;">
    		<ul>
    			<li>
    				<a href="#" class="text-light close-chat-box"><i class="fas fa-angle-down"></i></a>
    			</li>
    			<li>
    				<a href="#" class="text-light chat-tools"><i class="fas fa-cog"></i></a>
    			</li>
    		</ul>

    		<div class="">
    			<div class="bg-light col-md-12 chat1">
					Hi gays !
    			</div>
    			<div class="bg-dark col-md-12 text-light">
					Good day : > 
    			</div>
    			<div class="bg-light col-md-12 chat1">
					I need deposit for bets ??
    			</div>
    			<div class="bg-dark col-md-12 text-light">
					yeah dear ...
    			</div>
    		</div>
    	</div>
    </div>
    <footer class="container-fluid bg-sec">
      <div class="row">
        <div class="col-12 col-md">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
          <small class="d-block mb-3 text-primary ">&copy; 2017-2018</small>
        </div>
        <div class="col-6 col-md">
          <h5>Features</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-light" href="#">Cool stuff</a></li>
            <li><a class="text-light" href="#">Random feature</a></li>
            <li><a class="text-light" href="#">Team feature</a></li>
            <li><a class="text-light" href="#">Stuff for developers</a></li>
            <li><a class="text-light" href="#">Another one</a></li>
            <li><a class="text-light" href="#">Last time</a></li>
          </ul>
        </div>
       
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script type="text/javascript" src="assets/js/scripts.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/holder.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
