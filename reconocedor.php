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



<div id="container">
	<div id="content">
		<a href="#" id="try">Capturar</a>
 <?php  
  include("conexion.php");
  $id=$_GET['id'];
  $consulta="select * from fotos where id_foto='$id'";
  $busca_fotos=mysql_query($consulta,$c);
  while($ro=mysql_fetch_array($busca_fotos)){
      $url=$ro['id_foto'];  
      $nombre=$ro['nombre']; 
      $des=$ro['des'];
  }
?>		
        <img src="fotos/<?php echo $url?>.jpg" id="myPicture"/>
	</div>
</div>    


</div>
					</div>
				</div>
	   		</article>
			<article class="col2">
				<h3>Latest Works</h3>
				<ul class="ul_works">
					<li><a href="#"><img src="images/page1_img1.png" alt=""></a></li>
					<li><a href="#"><img src="images/page1_img2.png" alt=""></a></li>
				</ul>
				<h4>Información:</h4>
				<div class="tweets">
					<p><span class="cols"><strong>País: Perú<br>
Región: Apurimac<br>
Provincia: Andahuaylas<br>
Email:<a href="mailto:">andahuaylas@hotmail.com</a></strong></span></p>
				</div>
	   		</article>
		</div>
	</section>
<!-- / content -->
<!-- footer -->
	<footer>
		<div class="wrapper"></div>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p><a href="index.html" class="footer_logo">andahuaylas<span>@HOTMAIL</span>.com</a></p>
    </footer>
<!-- / footer -->
</div>
<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript">
	$(document).ready(function(){
			if ($("a[rel^='prettyPhoto']").length) {
			$(document).ready(function() {
				// prettyPhoto
				$("a[rel^='prettyPhoto']").prettyPhoto({theme:'facebook'});
				///// codegrabber ////////////
				$(".code a.code-icon").toggle(function(){$(this).addClass("minus").next("p").slideDown();}, function(){$(this).removeClass("minus").next("p").slideUp();})
			});
		}
	});
</script>
</body>
</html>