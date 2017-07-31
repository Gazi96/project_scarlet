<!doctype html>
<html>
    <head>
        <title><?php echo $this->title; ?></title>
        <link rel="stylesheet" href='<?php echo URL; ?>public/css/default.css'/>
        <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Dancing+Script|Grand+Hotel|Italianno|Lato|Mr+Dafoe|Pacifico|Petit+Formal+Script" rel="stylesheet"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href='<?php echo URL; ?>public/fonts/fontello/css/fontello.css' type="text/css" />
        
    </head>
    <body>
        <div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.8";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
                </script>
                
         <script src="public/js/jquery-1.11.1.min.js"></script>
	<script>
	$(document).ready(function(){
	$(".menu-trigger").click(function(){
	$('.menu1').slideToggle();
	});
	});
	</script>
        
        <script src="public/js/jquery-1.11.1.min.js"></script>
	<script>
	$(document).ready(function(){
	$(".menu-trigger3").click(function(){
	$('.menu3').slideToggle();
	});
	});
	</script>
        
         <script src="public/js/jquery-1.11.1.min.js"></script>
	<script>
	$(document).ready(function(){
	$(".menu-trigger4").click(function(){
	$('.menu4').slideToggle();
	});
	});
	</script>
        
         <script src="public/js/jquery-1.11.1.min.js"></script>
	<script>
	$(document).ready(function(){
	$(".menu-trigger5").click(function(){
	$('.menu5').slideToggle();
	});
	});
	</script>
        
        
                
        <header class='header'>
            
            
            <div class='logo'>
                <h1>Skarlet</h1>
            </div>
            <nav>
            <div class='menu2'>
                <div class="menu-trigger">
                    <i class="icon-menu"></i>        
                </div>
            </div>
                
            <div class='menu1'>
            <ul id='menu'>
                <li><a href="<?php echo URL; ?>index">Home</a></li>
                <li><a href="<?php echo URL; ?>about">O nas</a></li>
                <li><a href="<?php echo URL; ?>timetable">Grafik</a></li>
                <li><a href="<?php echo URL; ?>pricelist">Cennik</a></li>
                <li><a href="<?php echo URL; ?>courses">Kursy</a></li>
                <li><a href="<?php echo URL; ?>faq">FAQ</a></li>
                <li><a href="<?php echo URL; ?>contact">Kontakt</a></li>
            </ul>
            </div>
            <div style="clear:both;"></div>
            </nav>
            
        </header>
        
