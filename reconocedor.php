<!DOCTYPE html>
<html lang="en">
<head>
<title>Gallery</title>
<meta charset="utf-8">

<script src="http://code.jquery.com/jquery-1.5.1.min.js"></script> 
	<script src="js/facedetection/ccv.js"></script> 
	<script src="js/facedetection/face.js"></script>
	<script src="js/jquery.facedetection.js"></script> 


<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="all">

<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/CabinSketch_700.font.js"></script>
<script type="text/javascript" src="js/EB_Garamond_400.font.js"></script>
<script type="text/javascript" src="js/hover-image.js"></script>
<!-- [if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<style type="text/css">
.bg {behavior:url(js/PIE.htc)}
</style>
<![endif]-->
<!-- [if lt IE 7]>
<div style='clear:both;text-align:center;position:relative'>
	<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" alt="" /></a>
</div>
<![endif]-->
</head>
<body id="page3">
<div class="main">
<!-- header -->
	<header>
		<div class="wrapper">
			<nav>
				<ul id="menu">
					<li><a href="index.html"><span>Inicio</span></a></li>
					<li id="menu_active"><a href="Gallery.php"><span>Gallery</span></a></li>
					<li><a href="Contacto.php"><span>Contacto</span></a></li>
				</ul>
			</nav>
		</div>
		<h1><a href="index.html" >Reconocimiento de Rostro unajma</a></h1>
	</header>
<!-- / header -->
<!-- content -->
	<section id="content">
		<div class="wrapper">
			<article class="col1">
				<h2>Capturar el rostro</h2>
				<div class="pad_left1">
					<div class="wrapper pad_bot1">

 
<div id="gallery"> 

 <script>            
            	$(function() {
		$('#try').click(function() {
			var $this = $(this);
			
			var coords = $('img').faceDetection({
				complete:function() {
					$this.text('Done!');
				},
				error:function(img, code, message) {
					$this.text('error!');
					alert('Error: '+message);
				}
			});
			for (var i = 0; i < coords.length; i++) {
				$('<div>', {
					'class':'face',
					'css': {
						'position':	'absolute',
						'left':		coords[i].positionX +'px',
						'top':		coords[i].positionY +'px',
						'width': 	coords[i].width		+'px',
						'height': 	coords[i].height	+'px'
					}
				})
				.appendTo('#content');
			}
		});
		return false;
	});
	</script>

