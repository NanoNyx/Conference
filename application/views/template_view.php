<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 3.0 License

Name       : Accumen
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120712

Modified by VitalySwipe
-->
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Конференція</title>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		<script src="/js/jquery-1.6.2.js" type="text/javascript"></script>
		<script type="text/javascript">
		// return a random integer between 0 and number
		function random(number) {
			
			return Math.floor( Math.random()*(number+1) );
		};
		
		// show random quote
		$(document).ready(function() { 

			var quotes = $('.quote');
			quotes.hide();
			
			var qlen = quotes.length; //document.write( random(qlen-1) );
			$( '.quote:eq(' + random(qlen-1) + ')' ).show(); //tag:eq(1)
		});
		</script>
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="menu">
					<ul>
						<li class="first active"><a href="/">Крок 1</a></li>
						<li><a href="/portfolio">Крок 2</a></li>
					</ul>
					<br class="clearfix" />
				</div>
			</div>
			<div id="page">
			
			
				<div id="sidebar">										
					<div class="side-box">
						<h1>Згідно інструкції</h1>
						<h4>1) Крок 1:</h4>
						<h4>Заповніть форму справа. Всі поля обов'язкові (*).</h4>
                        <h4>2) Крок 2:</h4>
						<h4>Перевірте дані в таблиці.</h4>
					</div>
				</div>
				
				
				<div id="content">
					<div class="box">
						<?php include 'application/views/'.$content_view; ?>
						<!--
						<h2>Welcome to Accumen</h2>
						<img class="alignleft" src="images/pic01.jpg" width="200" height="180" alt="" />
						<p>
							This is <strong>Accumen</strong>, a free, fully standards-compliant CSS template by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>. The images used in this template are from <a href="http://fotogrph.com/">Fotogrph</a>. This free template is released under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attributions 3.0</a> license, so you are pretty much free to do whatever you want with it (even use it commercially) provided you keep the footer credits intact. Aside from that, have fun with it :)
						</p>
						-->
					</div>
					<br class="clearfix" />
				</div>
				<br class="clearfix" />
			</div>
			<div id="page-bottom">
				<div id="page-bottom-sidebar">
					<h3>Наші контакти</h3>
					<ul class="list">
						<li class="first">icq: 199199538</li>
						<li>skypeid: ghdfgjh</li>
						<li class="last">email: ghdfgjh@gmail.com</li>
					</ul>
				</div>
				<div id="page-bottom-content">
					<h3>Про Компанію</h3>
					<p>
					Наша команда володіє глибоким розумінням сучасних веб-технологій,
					трендів дизайну та стратегій маркетингу. Ми ставимо собі за мету
					не тільки створити ефективний веб-сайт, але й забезпечити його 
					успіх у конкурентному цифровому середовищі.
					</p>
				</div>
				<br class="clearfix" />
			</div>
		</div>
		<div id="footer">
			<a href="/">ЕКСПРЕСІЯ TEAM</a> &copy; 2023'		'</a>
		</div>
	</body>
</html>