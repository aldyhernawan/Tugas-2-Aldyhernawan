<?php
	$items= array();
	if(Yii::app()->user->isAdmin())
	{
		
	}
	elseif(Yii::app()->user->isMember())
	{
	
	}
	
	$items [] = array('label'=>'Home', 'url'=>array('/site/index'));
	$items [] =	array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about'));
	$items [] = array('label'=>'Contact', 'url'=>array('/site/contact'));
	$items [] = array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest);
	$items [] = array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest);
?>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Bangjeko Bakery</title>
		<?php
	  $baseUrl = Yii::app()->theme->baseUrl; 
	  $cs = Yii::app()->getClientScript();
	  Yii::app()->clientScript->registerCoreScript('jquery');
	?>
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/js/nivo-slider/themes/default/default.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/js/nivo-slider/nivo-slider.css" >
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl ?>/css/styles.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="print.css" media="print" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<div id="wrapper"><!-- #wrapper -->

	<header><!-- header -->
		<h1><a href="#">Bangjeko Bakery</a></h1>
		<h2>"Fresh Cake Here"</h2>
		<img src="<?php echo Yii::app()->theme->baseUrl ?>/images/headerimg.png" width="940" height="200" alt=""><!-- header image -->
	</header><!-- end of header -->
	
	<nav><!-- top nav -->
		<div class="menu">
				<?php $this->widget('zii.widgets.CMenu',array(
					'items'=>$items
				)); ?>
		</div>
	</nav><!-- end of top nav -->

<section id="main">
		<section id="container">
		<section id="content">
		<article>
		  <?php echo $content ?>
		</article>
			
		</section>
		</section>
		<aside id="sidebar">
		<h3>Data Master</h3>
		<ul>
		<li><a href="index.php?r=masterroti/index">Master Roti</a></li>
		<li><a href="index.php?r=masterpegawai/index">Master Pegawai</a></li>
		<li><a href="index.php?r=masterbahan/index">Master Bahan</a></li>
		<li><a href="index.php?r=masterpembelian/index">Master Pembelian</a></li>
		<li><a href="index.php?r=masterpenjualan/index">Master Penjualan</a></li>
		<li><a href="index.php?r=gudang/index">Master Gudang</a></li>
		</ul>			
		<a href="#"><img src="<?php echo Yii::app()->theme->baseUrl ?>/images/weathericons.png" alt="" /></a>
		<br>
					
		<h3>Sponsors</h3>
		<img src="<?php echo Yii::app()->theme->baseUrl ?>/images/ad180.png" alt="" /><br /><br />

		</aside>
</section>
		
	
	<footer>
		<section id="footer-area">

			<section id="footer-outer-block">
							<center >Bangjeko's Bakery Shop</center>
								<center>Jl Gombel Lama No 13 Semarang</center>
								<center>Copyright © Bangjeko Bakery & Cake 2012. All rights reserved</center>
					

			</section><!-- end of #footer-outer-block -->

		</section><!-- end of #footer-area -->
	</footer>

</div><!-- #wrapper -->
<!-- Free template created by http://freehtml5templates.com -->
</body>
</html>
