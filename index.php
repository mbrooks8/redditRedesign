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

	</head>

	<body>

		<div class="sidebar fixed" id="side" style="background: white;">
			<div class="sideHeader" style="text-align:center; padding-bottom:0px; padding-top:0px;">
				<div class="sideHeader" style="text-align:center; background-color:transparent !important;padding-bottom: 0px; padding-top:0px;">
					<h5>Reddit</h5>
					<p style="font-size:90%; padding-bottom:5px;">Your Front Page Of The Internet</p>
					<a>PanickedStudent</a><br>
					<a>messages <span style="color:orange;">(new)</span></a><br>
					<a>logout</a><br>
					<a class="accent">reddit gold</a><br>
					<div class="row valign" style="margin-bottom:0;">
						<div class="col s1"></div>
						<div class="col s9" style="padding:0;">
							<div class="card flat">
								<div class="card-content z-depth-3" style="padding:0; background-color:white;">
									<h5>YOUR SUBS</h5>
								</div>
							</div>
						</div>
						<div class="col s1" style="padding:0; width:30px; transform:translate(10px);">
							<p style="background-color:#C6C6C6">CY</p>

						</div>
					</div>


				</div>
			</div>
			<style>
				.sideBody li a {

					padding: 0;
				}
				hr{
					margin-top:2px;
					margin-bottom:2px;
				}
				.short{
					max-width:150px !important;
				}
			</style>
			<div style="width:90%; padding-left:10%;">
				<div class="sideBody center z-depth-3" style="border:1px solid grey; padding-top:5px; padding-bottom:5px;">
					<ul >
						<li><a href="#showcase">COGS</a></li>
						<hr class="short">
						<li><a href="#utility">GETAGOODGRADE</a></li><hr class="short">

						<li><a href="#utility">ASKREDDIT</a></li><hr class="short">

						<li><a href="#utility">WORLDNEWS</a></li><hr class="short">

						<li><a href="#utility">PREQUELMEMES</a></li><hr class="short">

						<li><a href="#utility">GAMING</a></li><hr class="short">

						<li><a href="#utility">MEMEECONOMY</a></li><hr class="short">

						<li><a href="#utility">LEAGUEOFLEGENDS</a></li><hr class="short">

						<li><a href="#utility">TODAYILEARNED</a></li><hr class="short">

						<li><a href="#utility">WOWSERVERS</a></li><hr class="short">

						<li><a href="#utility">SPIKES</a></li><hr class="short">

						<li><a href="#utility">MAGICTHEGATHERING</a></li><hr class="short">

						<li><a href="#utility">MOVIES</a></li><hr class="short">

						<li><a href="#utility">MSLGAME</a></li>

					</ul>
				</div>
			</div>
			<div style="width:90%; padding-left:10%; padding-top:10px;">
				<div class="sideHeader" style="padding-bottom:0px; border:1px solid grey;">
					<div class="row">
						<div class="col s12 center"><p style="font-size:90%;">about // help</p></div>
						<div class="col s6" style="padding:0; padding-left:15px;">
							<a style="font-size:80%;">blog</a><br>
							<a style="font-size:80%;">about</a><br>
							<a style="font-size:80%;">reddiquitte</a><br>
							<a style="font-size:80%;">site rules</a><br>
							<a style="font-size:80%;">FAQ</a>
						</div>
						<div class="col s6" style="padding:0; padding-left:5px;">
							<a style="font-size:80%;">careers</a><br>
							<a style="font-size:80%;" class="accent">reddit gold</a><br>
							<a style="font-size:80%;">mod guidelines</a><br>
							<a style="font-size:80%;">contact us</a><br>
							<a style="font-size:80%;">wiki</a>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="site-content fixed" style="" >

			<div id="replace" style="min-height:calc(100vh - 64px)"></div>


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
