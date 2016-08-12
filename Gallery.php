<!DOCTYPE html>
<html lang="en">
<head>
<title>Gallery</title>
<meta charset="utf-8">

<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
<script type="text/javascript" src="webcam.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />


<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
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
					<li><a href="Gallery.php"><span>Gallery</span></a></li>
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
				<h2>Gallery</h2>
				<div class="pad_left1">
					<div class="wrapper pad_bot1">

 
<div id="gallery">
 <ul>
  <?php  
  include("conexion.php");
  $consulta="select * from fotos order by id_foto desc";
  $busca_fotos=mysql_query($consulta,$c);
  while($ro=mysql_fetch_array($busca_fotos)){
     $url=$ro['id_foto'];  
     $nombre=$ro['nombre']; 
     $des=$ro['des'];
       echo "<li>	 
            <a href=\"\">
               <img src=\"fotos/".$url.".jpg\" width=\"150\" height=\"120\" alt=\"\"   />
			</a>
			     <a href=\"reconocedor.php?id=$url\" class=\"link1\">VER</a>	 
        </li>";		
  }
?>    
 </ul> 
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
					<p class="cols"><strong>País: Perú<br>

Región: Apurimac<br>
Provincia: Andahuaylas<br>
Email</strong><a href="mailto:">andahuaylas@hotmail.com</a></p>
					<p>&nbsp;</p>
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
		<p><a href="index.html" class="footer_logo">andahuaylas<span>@HOTMAIL.</span>.com</a></p>
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