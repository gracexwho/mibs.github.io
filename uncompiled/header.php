<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<link rel="icon" href="./favicon.ico" type="image/x-icon">
	<title>McGill Integrative Bioscience Society</title>
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <!-- FONTAWESOME -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,700italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="./style.css">
	
	<script>
		$(function() {
		  $('a[href*=#]:not([href=#])').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        $('html,body').animate({
		          scrollTop: target.offset().top
		        }, 1000);
		        return false;
		      }
		    }
		  });
		});

	</script>

	<script>
	  // (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  // (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  // m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  // })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  // ga('create', 'UA-66651449-1', 'auto');
	  // ga('send', 'pageview');

	</script>


</head>
<body id="top">

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">MIBS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="./index.html#more">About</a></li>
        <li><a href="./team.php">Team</a></li>
        <li><a href="./faculty.php">Faculty</a></li>
        <li><a href="./links.php">Links</a></li>
        <li><a href="./studentguide.html">Student Guide</a></li>
        <li><a href="./symposium.html">Symposium</a></li>

      </ul>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="main-content">