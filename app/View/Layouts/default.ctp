<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Focus Automação -
		<?php echo $this->fetch('title'); ?>
	</title>



	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('theme');
		echo $this->Html->css('bootstrap-reset');
		echo $this->Html->css('font-awesome/font-awesome');
		
		//pages
		if($page_active == 'home'){

			echo $this->Html->css('flexslider');
			echo $this->Html->css('bxslider/jquery.bxslider');
			echo $this->Html->css('fancybox/jquery.fancybox');
			echo $this->Html->css('revolution_slider/rs-style');
			echo $this->Html->css('revolution_slider/settings');

		} elseif($page_active == 'cases'){

			echo $this->Html->css('fancybox/jquery.fancybox');
			echo $this->Html->css('superfish');
			echo $this->Html->css('superfish-vertical');

		} elseif($page_active == 'contact'){

			echo $this->Html->css('flexslider');
			echo $this->Html->css('bxslider/jquery.bxslider');

		} elseif($page_active == 'about'){
			echo $this->Html->css('flexslider');
			echo $this->Html->css('bxslider/jquery.bxslider');

		} elseif($page_active == 'about'){

			echo $this->Html->css('flexslider');
			echo $this->Html->css('bxslider/jquery.bxslider');
		
		}

		echo $this->Html->css('style');
		echo $this->Html->css('style-responsive');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <?php 
		echo $this->Html->script('html5shiv.js');
		echo $this->Html->script('respond.min.js');
     ?>
    <![endif]-->


</head>
<body>
<!--header start-->
	<header class="header-frontend">
	    <div class="navbar navbar-default navbar-static-top">
	        <div class="container">
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <?php $logo = $this->Html->tag('span', $this->Html->image('logo-focus.png', array('alt' => 'Focus Automa&ccedil;&atilde;o')), array('class' => 'logo')); ?>
	                <?php echo $this->Html->link(__($logo), '/', array('class' => 'navbar-brand', 'escape' => false)); ?>
	                <!-- <a class="navbar-brand" href=""><span class="logo"><?php //echo $this->Html->image('logo-focus.png', array('alt' => 'Focus Automa&ccedil;&atilde;o')); ?></span></a> -->
	            </div>
	            
	            <div class="navbar-collapse collapse ">
	                <ul class="nav navbar-nav">

	                    <li <?= ($page_active == 'home' ? "class=active" : ""); ?> > <?php echo $this->Html->link('Home', '/pages/home'); ?> </li>
	                    <li <?= ($page_active == 'about' ? "class=active" : ""); ?> > <?php echo $this->Html->link('A Focus', '/pages/about'); ?></li>
	                    <li <?= ($page_active == 'services' ? "class=active" : ""); ?> ><?php echo $this->Html->link('Serviços', '/pages/services'); ?></li>
	                  <!--   <li class="dropdown ">
	                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Cases <b class=" icon-angle-down"></b></a>
	                        <ul class="dropdown-menu">
	                            <li><a href="typography.html">Automação Industrial</a></li>
	                            <li><a href="button.html">Automação Predial</a></li>
	                        </ul>
	                    </li> -->
	                    <li <?= ($page_active == 'clients' ? "class=active" : "" ); ?> ><?php echo $this->Html->link( "Clientes", '/pages/clients' ); ?></li>
	                    <li <?= ($page_active == 'cases' ? "class=active" : "" ); ?> ><?php echo $this->Html->link( "Cases",  '/pages/cases'  ); ?></li>
	                    <li <?= ($page_active == 'downloads' ? "class=active" : "" ); ?> ><?php echo $this->Html->link( "Downloads",  '/pages/downloads'  ); ?></li>
	                    <li <?= ($page_active == 'contact' ? "class=active" : "" ); ?> ><?php echo $this->Html->link( "Contato",  '/pages/contact'); ?> </li>
	                    <li <?= ($page_active == 'work' ? "class=active" : "" ); ?> ><?php echo $this->Html->link( "Trabalhe Conosco",  '/pages/work'); ?></li>
	                    
	                    <!-- <li><input type="text" placeholder=" Search" class="form-control search"></li> -->
	                </ul>
	            </div>
	        </div>
	    </div>
	</header>
	<!--header end-->

	<?php echo $this->Session->flash(); ?>

	<?php echo $this->fetch('content'); ?>
	<!--footer start-->
		<footer class="footer">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-3 col-sm-3">
		                <h1>contact info</h1>
		                <address>
		                    <p>Endereço: R. Espanha 287 - Sala 8</p>
		                    <p>Campinas, SP</p>

		                    <p>Telefone : (19) 2317-2222</p>
		                    <p>Email : <a href="javascript:;">contato@focusautomation.com.br</a></p>
		                </address>
		            </div>
		            <div class="col-lg-5 col-sm-5">
		                <h1>latest tweet</h1>
		                <div class="tweet-box">
		                    <i class="icon-twitter"></i>
		                    <em>Please follow <a href="javascript:;">@nettus</a> for all future updates of us! <a href="javascript:;">twitter.com/vectorlab</a></em>
		                </div>
		            </div>
		            <div class="col-lg-3 col-sm-3 col-lg-offset-1">
		                <h1>stay connected</h1>
		                <ul class="social-link-footer list-unstyled">
		                    <li><a target="_blank" href="#"><i class="icon-facebook"></i></a></li>
		                    <li><a target="_blank" href="#"><i class="icon-google-plus"></i></a></li>
		                    <li><a target="_blank" href="#"><i class="icon-dribbble"></i></a></li>
		                    <li><a target="_blank" href="#"><i class="icon-linkedin"></i></a></li>
		                    <li><a target="_blank" href="https://twitter.com/FocusAutomacao"><i class="icon-twitter"></i></a></li>
		                    <li><a target="_blank" href="#"><i class="icon-skype"></i></a></li>
		                    <li><a target="_blank" href="#"><i class="icon-github"></i></a></li>
		                    <li><a target="_blank" href="#"><i class="icon-youtube"></i></a></li>
		                </ul>
		            </div>
		        </div>
		    </div>
		</footer>
    <!--footer end-->

	<!-- all pages -->
		<?php echo $this->Html->script('jquery'); ?>
		<?php echo $this->Html->script('bootstrap.min'); ?>
		<?php echo $this->Html->script('hover-dropdown'); ?>

	    <!-- resources pages -->
		<?php if($page_active == 'home'){ ?>
		    <?php echo $this->Html->script('jquery-1.8.3.min'); ?>
		    <?php echo $this->Html->script('jquery.flexslider'); ?>
		    <?php echo $this->Html->script('bxslider/jquery.bxslider'); ?>
		    <?php echo $this->Html->script('jquery.parallax-1.1.3'); ?>
		    <?php echo $this->Html->script('jquery.easing.min'); ?>
		    <?php echo $this->Html->script('link-hover'); ?>
		    <?php echo $this->Html->script('fancybox/jquery.fancybox.pack'); ?>
		    <?php echo $this->Html->script('revolution_slider/jquery.themepunch.plugins.min'); ?>
		    <?php echo $this->Html->script('revolution_slider/jquery.themepunch.revolution.min'); ?>
		    <?php echo $this->Html->script('revulation-slide'); ?>

		    <script>
		    	RevSlide.initRevolutionSlider();
				
				//    fancybox
		      	jQuery(".fancybox").fancybox();

		      	$(window).load(function() {
		          $('.flexslider').flexslider({
		              animation: "slide",
		              start: function(slider) {
		                  $('body').removeClass('loading');
		              }
		          });
		      	});
			</script>

			<?php echo $this->Html->script('pages/home'); ?>
	
		<?php } elseif($page_active == 'about'){ ?>
			<?php echo $this->Html->script('bxslider/jquery.bxslider'); ?>
			<?php echo $this->Html->script('jquery.flexslider'); ?>
			<?php echo $this->Html->script('jquery.easing.min'); ?>
			<?php echo $this->Html->script('link-hover'); ?>
	
			<script>
				$(window).load(function() {
		          $('.flexslider').flexslider({
		              animation: "slide",
		              start: function(slider) {
		                  $('body').removeClass('loading');
		              }
		          });
		      	});
			</script>

		<?php } elseif($page_active == 'contact'){ ?>
			<?php echo $this->Html->script('bxslider/jquery.bxslider'); ?>
			<?php echo $this->Html->script('//maps.googleapis.com/maps/api/js?v=3.exp&AMP;sensor=false'); ?>

			<?php echo $this->Html->script('pages/contact'); ?>
	
		<?php } elseif($page_active == 'cases'){ ?>
			<?php echo $this->Html->script('jquery-1.8.3.min'); ?>
			<?php echo $this->Html->script('jquery.flexslider'); ?>
			<?php echo $this->Html->script('bxslider/jquery.bxslider'); ?>
			<?php echo $this->Html->script('superfish'); ?>
			<?php echo $this->Html->script('jquery.isotope'); ?>
			<?php echo $this->Html->script('jquery.easing.min'); ?>
			<?php echo $this->Html->script('link-hover'); ?>
			<?php echo $this->Html->script('fancybox/jquery.fancybox.pack'); ?>
			<script>
				//    fancybox
		      	jQuery(".fancybox").fancybox();

		      	$(window).load(function() {
		          $('.flexslider').flexslider({
		              animation: "slide",
		              start: function(slider) {
		                  $('body').removeClass('loading');
		              }
		          });
		      	});
			</script>

			<?php echo $this->Html->script('pages/cases'); ?>
		
		<?php } elseif($page_active == 'services'){ ?>
			<?php echo $this->Html->script('jquery.flexslider'); ?>
			<?php echo $this->Html->script('bxslider/jquery.bxslider'); ?>
			<?php echo $this->Html->script('jquery.easing.min'); ?>
			<?php echo $this->Html->script('link-hover'); ?>

			<script>
				$(window).load(function() {
		          $('.flexslider').flexslider({
		              animation: "slide",
		              start: function(slider) {
		                  $('body').removeClass('loading');
		              }
		          });
		      	});
			</script>

		<?php } ?>
		<!-- end resources pages -->	    

		<?php echo $this->Html->script('common-scripts'); ?>
		
		<?php if($page_active != 'contact' && $page_active != 'clients'){ ?>
		
		<script>

		      $(window).load(function() {
		          $('[data-zlname = reverse-effect]').mateHover({
		              position: 'y-reverse',
		              overlayStyle: 'rolling',
		              overlayBg: '#fff',
		              overlayOpacity: 0.7,
		              overlayEasing: 'easeOutCirc',
		              rollingPosition: 'top',
		              popupEasing: 'easeOutBack',
		              popup2Easing: 'easeOutBack'
		          });
		      });
		     
  		</script>
  		<?php } ?>

	</body>
</html>
