<!DOCTYPE html>
<html>
	<head>
		<title>Web4Dev</title>
		<link rel="icon" href="./assets/img/4devLogoBlack.png" style="">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
		<link href="./assets/css/poverty.css" type="text/css" rel="stylesheet" media="screen,projection" async/>
		<link href="./assets/css/font-awesome.min.css" type="text/css" rel="stylesheet" media="screen,projection" defer/>
		<link href="./assets/css/prism.css" rel="stylesheet" defer/>

		<!--Google SHit-->
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<meta name="google-signin-client_id" content="413698421344-c39mjtvkgs6svj4nipudj61uflfsjr31.apps.googleusercontent.com">
		<style>
			input[type=text] {
				width: 130px;
				box-sizing: border-box;
				border: 2px solid #ccc;
				border-radius: 4px;
				font-size: 16px;
				background-color: white;
				background-image: url('./assets/img/searchicon.png');
				background-position: 10px 10px;
				background-repeat: no-repeat;
				padding: 12px 20px 12px 40px;
				-webkit-transition: width 0.4s ease-in-out;
				transition: width 0.4s ease-in-out;
			}

			input[type=text]:focus {
				width: 100%;
			}
			.dropdown-content {
				display: none;
				position: absolute;
				background-color: #f9f9f9;
				min-width: 245px;
				box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
				z-index: 1;
			}
			.show {display:block;}
		</style>
		<style>
			nav{
				overflow: hidden;
				width: 100%;
			}
			nav:before, nav:after{
				z-index: -1;
				position: absolute;
				content: '';
				height: 10px;
				width: 0%;
				top:64px;
				right: 100%;
				animation-name: loaderbefore;
				animation-duration: 4s;
				animation-iteration-count: infinite;
				animation-timing-function: linear;
				background-color: dodgerblue;
			}
			nav:after
			{
				animation-delay: 2s;
			}
			@keyframes loaderbefore {
				0%
				{
					right:100%;
					width: 25%;
				}
				50%
				{
					right:100%;
					width: 25%;
				}
				83.33%
				{
					right:0%;
					width: 50%;
				}
				100%
				{
					width:0%;
					right:0%;
				}
			}
		</style>

	</head>

	<body>

		<div class="sidebar fixed" id="side">
			<div class="sideHeader" style="text-align:center;">
				<div class="sideHeader" style="text-align:center;">
					<a href="#welcome"><img src="./assets/img/4devLogoBlack.png"></a>
				</div>
			</div>
			<div class="sideBody">
				<ul >
					<li>
						<a href="#welcome">About Us</a>
					</li>
					<li><a href="#setup">Getting Started</a></li>
					<li>
						<a>CSS</a>
						<ul>
							<li><a href="#css/button">Button</a></li>
							<li><a href="#css/color">Color</a></li>
							<li><a href="#css/form">Form</a></li>
							<li><a href="#css/table">Table</a></li>
							<li><a href="#css/text">Text</a></li>
							<li><a href="#css/template">Grid System</a></li>
						</ul>

					</li>
					<li>
						<a>Components</a>
						<ul>
							<li><a href="#components/banner">Banner</a></li>
							<li><a href="#components/card">Card</a></li>
							<li><a href="#components/carousel">carousel</a></li>
							<li><a href="#components/chip">Chip</a></li>
							<li><a href="#components/modal">modal</a></li>
							<li><a href="#components/navbar">Navbar</a></li>
						</ul>

					</li>
					<li>
						<a>Features</a>
						<ul>
							<li><a href="#features/ajax">Ajax</a></li>
							<li><a href="#features/editing">Editing</a></li>
						</ul>

					</li>
					<li><a href="#showcase">Showcase</a></li>
					<li><a href="#utility">Utility</a></li>
					<?php
					include("./php/config.php");
					if (isLogged()){
						echo '<li><a href="#" onclick="signOut();">Sign out</a></li>';
					}else{
						echo '<li><a href="#login">Login</a></li>';
					}
					?>
				</ul>
			</div>
		</div>

		<div class="site-content fixed" style="" >

			<nav>
				<div>
					<input class="hide-on-med-and-down" autocomplete="off" type="text" name="search" id="searchBar" placeholder="search">
				</div>
				<div class="nav-wrapper hide-on-large-only">
					<div class="left">
						<input autocomplete="off" type="text" name="search" id="searchBar2" placeholder="search">
					</div>
					<a href="#welcome" class="logo"><img src="./assets/img/4devLogoBlack.png"></a>
					<ul class="right ">
						<li><a class="sideToggle"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</nav>

			<div id="replace" style="min-height:calc(100vh - 64px)"></div>
			<footer class="page-footer">
				<div class="container">
					<div class="row">
						<div class="col l8 s12">
							<h5 class="white-text">4Dev</h5>
							<p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						© 2017 Copyright 4Dev All Rights Reserved
						<a class="grey-text text-lighten-4 right" href="https://www.linkedin.com/in/estebanmagallonperez/">Please Hire Us</a>
					</div>
				</div>
			</footer>

		</div>


	</body>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="crossorigin="anonymous"></script>
	<script async src="./assets/js/poverty.js"></script>
	<script async src="./assets/js/prism.js"></script>
	<script>
		function updatePage(data)
		{
			var $target = $('html,body');
			$target.animate({scrollTop: 0}, 0);
			$("#replace").html(data);
			Prism.highlightAll();
			var editables = $("ul.editable,ol.editable,h1.editable,h2.editable,h3.editable,h4.editable,h5.editable,h6.editable,p.editable,div.editable");
			editables.each(function(){
				getContent($(this));
			});
			boxed();
			initModal();
		}
		function updateContent(bttnClick)
		{
			console.log("updating with: "+window.location.hash);
			var hash = window.location.hash;
			if(bttnClick){
				if(hash =='#'||hash=="#!")
				{
					return 0;
				}
			}else
			{
				if(hash == "#!")
				{
					history.go(-1);
					updateContent(true);
				}
			}
			if(hash =='')
			{
				hash = 'welcome';
			}else{
				hash = hash.substr(1);
			}
			$.ajax(
				{url:'./pages/'+hash+'.html',
				 success:function(data){
					 $("#replace").html("");
					 $('html,body').animate({scrollTop: 0}, 0);
					 setTimeout(function(){updatePage(data);},800);
				 },
				 error:function(){
					 $.ajax(
						 {url:'./pages/error.html',
						  success:function(data){
							  setTimeout(function(){updatePage(data);},400);
						  }
						 })}
				});
		}
		window.onhashchange = function(){
			updateContent(true);
		};
		window.onload = function() {
			console.log("loaded");
			$(".sideToggle").click(function(){
				$(".sidebar").toggleClass("active");
			});
		};
		updateContent(false);
	</script>
	<script>
		/*SEARCH BAR 1*/
		$( "#searchBar" ).parent().focusin(function() {
			$( this ).parent().append("<div class=\"card\"style=\"margin:0px;width:80vw;overflow-y:scroll;position:absolute;max-height:60vh;z-index:10000;\" id=\"results\"></div>");
			updateSearch()
		});
		$("#searchBar").parent().focusout(function(){
			setTimeout(function(){$("#results").remove();},250)
		});
		$( "#searchBar" ).keyup(function() {
			updateSearch()
		});
		function updateSearch(){
			var url = window.location.pathname;
			url = url.substring(url.lastIndexOf('/')+1);
			console.log(document.getElementById('searchBar').value );
			$.ajax({
				url: './php/tools/search.php',
				type: 'POST',
				data: {
					"search": ''+document.getElementById('searchBar').value,
					"page": '"'+ url+window.location.hash+ '"'
				},
				success: function(data) {
					console.log($("#results"));
					$("#results").html(data);
					console.log(data);
				},
				error: function(e) {
					console.log("oops");
				}
			});}
	</script>
	<script>
		/*SEARCH BAR 2*/
		$( "#searchBar2" ).parent().focusin(function() {
			$( this ).parent().append("<div class=\"card\"style=\"margin:0px;margin-top:64px;width:90vw;overflow-y:scroll;position:absolute;max-height:60vh;z-index:10000;\" id=\"results\"></div>");
			updateSearch2()
		});
		$("#searchBar2").parent().focusout(function(){
			setTimeout(function(){$("#results").remove();},250)
		});
		$( "#searchBar2" ).keyup(function() {
			updateSearch2()
		});
		function updateSearch2(){
			var url = window.location.pathname;
			url = url.substring(url.lastIndexOf('/')+1);
			console.log(document.getElementById('searchBar2').value );
			$.ajax({
				url: './php/tools/search.php',
				type: 'POST',
				data: {
					"search": ''+document.getElementById('searchBar2').value,
					"page": '"'+ url+window.location.hash+ '"'
				},
				success: function(data) {
					console.log($("#results"));
					$("#results").html(data);
					console.log(data);
				},
				error: function(e) {
					console.log("oops");
				}
			});}
	</script>
	<script src="./assets/js/loadContent.js"></script>
</html>

<script>

	/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
	function myFunction() {
		document.getElementById("myDropdown").classList.toggle("show");
	}

	// Close the dropdown menu if the user clicks outside of it
	window.onclick = function(event) {
		if (!event.target.matches('.dropbtn')) {

			var dropdowns = document.getElementsByClassName("dropdown-content");
			var i;
			for (i = 0; i < dropdowns.length; i++) {
				var openDropdown = dropdowns[i];
				if (openDropdown.classList.contains('show')) {
					openDropdown.classList.remove('show');
				}
			}
		}
	}
	function myFunction2() {
		document.getElementById("myDropdown2").classList.toggle("show");
	}

	// Close the dropdown menu if the user clicks outside of it
	window.onclick = function(event) {
		if (!event.target.matches('.dropbtn')) {

			var dropdowns = document.getElementsByClassName("dropdown-content");
			var i;
			for (i = 0; i < dropdowns.length; i++) {
				var openDropdown = dropdowns[i];
				if (openDropdown.classList.contains('show')) {
					openDropdown.classList.remove('show');
				}
			}
		}
	}
	function myFunction3() {
		document.getElementById("myDropdown3").classList.toggle("show");
	}

	// Close the dropdown menu if the user clicks outside of it
	window.onclick = function(event) {
		if (!event.target.matches('.dropbtn')) {

			var dropdowns = document.getElementsByClassName("dropdown-content");
			var i;
			for (i = 0; i < dropdowns.length; i++) {
				var openDropdown = dropdowns[i];
				if (openDropdown.classList.contains('show')) {
					openDropdown.classList.remove('show');
				}
			}
		}
	}

	function signOut() {
		gapi.load('auth2', function() {
			gapi.auth2.init();
			var auth2 = gapi.auth2.getAuthInstance();
			auth2.signOut().then(function () {
				console.log('User signed out.');
				window.location = "./php/tools/logout.php";
			});
		});
	}
</script>
