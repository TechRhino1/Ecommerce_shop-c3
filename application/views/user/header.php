<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
$n=0;
$sum=0;
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true && $_SESSION['role'] === '1' && $_SESSION['role_des'] === 'user'){
	
	
	foreach ($head as $row) {
		$pt=$row-> price*$row->nos;
	   $sum =$sum + $pt;
	   $n++;
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>HM-Fashion</title>
<link href="<?php echo base_url('res/user/css/bootstrap-3.1.1.min.css')?>" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url('res/user/js/jquery.min.js')?>"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="<?php echo base_url('res/user/css/style.css')?>" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Youth Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- start menu -->
<script src="<?php echo base_url('res/user/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('res/user/js/js/simpleCart.min.js')?>"> </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- slide -->
<script src="<?php echo base_url('res/user/js/responsiveslides.min.js')?>"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: false,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
  <!-- animation-effect -->
<link href="<?php echo base_url('res/user/css/animate.min.css')?>" rel="stylesheet"> 
<script src="<?php echo base_url('res/user/js/wow.min.js')?>"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
</head>
<style>
	.cartco{
		color: #fb0000;
	}
</style>
<body>
<!--header-->

<div class="header">
	<div class="header-top">
		<div class="container">
				<div class="col-sm-4 logo animated wow fadeInLeft" data-wow-delay=".5s">
					<h1><a href="<?php echo base_url('home/index')?>">HM<span>Fashion</span></a></h1>	
				</div>
			<div class="col-sm-4 world animated wow fadeInRight" data-wow-delay=".5s">
					 <!-- <div class="cart box_1"> -->
					<!--	<a href="<?php echo base_url('user/viewcart')?>">
						<h3> <div class="total">
							<span class="simpleCart_total"></span></div>
							<img src="<?php echo base_url('res/user/images/cart.png')?>" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty"><?php echo $n;?></a></p>-->
                              <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
					<!-- </div>  -->
			</div>
			<?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true)
						 {?>          
			<div class="col-sm-2 number animated wow fadeInRight" data-wow-delay=".5s">
					<!-- <span><i class="glyphicon glyphicon-phone">  -->
						
					<p>Welcome</p></i> <?php
                                           
                                              if(isset ($_SESSION['role_des']))
                                                {
                                                   echo $_SESSION['email'];
												//    echo $_SESSION['first_name'];
                                               }
                                                 ?>
												 <!-- </span> -->
					
				</div>
				<?php } ?>
			<div class="col-sm-2 world animated wow fadeInRight" data-wow-delay="1s">	
			<!-- <div class="col-sm-4 world animated wow fadeInRight" data-wow-delay=".5s">	 -->
			<div class="cart box_1">
						<a href="<?php echo base_url('user/viewcart')?>">
						<h3> <div class="total">
							<!-- <span class="simpleCart_total"></span></div> -->
							
							<img src="<?php echo base_url('res/user/images/cart.png')?>" alt=""/><p><a href="javascript:;" class="simpleCart_empty" style="color: #fb0000;"><?php
							
							if ($n==0) {
								echo 'Empty cart';
							}else{
								 ?> <a href="<?php echo base_url('user/viewcart')?>"><span class="badge badge-pill badge-info" style="color: #94ff05;"><?= $n; ?> <a href="<?php echo base_url('user/viewcart')?>"> </span> <?php 
								} ?></a></p></h3>
						</a>

					</div>
				<!-- <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a> -->
			</div>
			<!-- <div class="col-sm-2 search animated wow fadeInRight" data-wow-delay="1s">
			<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
			</div> -->
				<div class="clearfix"> </div>
		</div>
	</div>
		<div class="container">
			<div class="head-top">
			<div class="n-avigation">
			
				<nav class="navbar nav_bottom" role="navigation">
				
				 <!-- Brand and toggle get grouped for better mobile display -->
				  <div class="navbar-header nav_2">
					  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					  <a class="navbar-brand" href="#"></a>
				   </div> 
				   <!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav nav_1">
							<li><a href="<?php echo base_url('home/index')?>">Home</a></li>
							<li class="dropdown mega-dropdown active">
								<!-- <a href="Contact" class="dropdown-toggle" data-toggle="dropdown">Women<span class="caret"></span></a>-->
							<!-- <a href="<?php echo base_url('User/Contact')?>">Contact</span></a>	 -->
								<div class="dropdown-menu mega-dropdown-menu">
									<div class="container-fluid">
										<!-- Tab panes -->
										<!-- <div class="tab-content">
										  <div class="tab-pane active" id="men">
											<ul class="nav-list list-inline">
												<li><a href="<?php echo base_url('user/women')?>"><img src="<?php echo base_url('res/user/images/t7.jpg')?>" class="img-responsive" alt=""/></a></li>
												<li><a href="<?php echo base_url('user/women')?>"><img src="<?php echo base_url('res/user/images/t8.jpg')?>" class="img-responsive" alt=""/></a></li>
												<li><a href="<?php echo base_url('user/women')?>"><img src="<?php echo base_url('res/user/images/t9.jpg')?>" class="img-responsive" alt=""/></a></li>
												<li><a href="<?php echo base_url('user/women')?>"><img src="<?php echo base_url('res/user/images/t11.jpg')?>" class="img-responsive" alt=""/></a></li>
												<li><a href="<?php echo base_url('user/women')?>"><img src="<?php echo base_url('res/user/images/t1.jpgs')?>" class="img-responsive" alt=""/></a></li>
												<li><a href="<?php echo base_url('user/women')?>"><img src="<?php echo base_url('res/user/images/t12.jpg')?>" class="img-responsive" alt=""/></a></li>
											</ul>
										  </div>
									   </div>
									</div> -->
									<!-- Nav tabs -->
									                
								</div>				
							</li>
							<li class="dropdown mega-dropdown active">
								<!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men<span class="caret"></span></a>				 -->
								<div class="dropdown-menu mega-dropdown-menu">
									<div class="container-fluid">
										<!-- Tab panes -->
										<div class="tab-content">
										  <div class="tab-pane active" id="men">
											<ul class="nav-list list-inline">
												<li><a href="<?php echo base_url('user/men')?>"><img src="<?php echo base_url('res/user/images/t10.jpg')?>" class="img-responsive" alt=""/></a></li>
												<li><a href="<?php echo base_url('user/men')?>"><img src="<?php echo base_url('res/user/images/t2.jpg')?>" class="img-responsive" alt=""/></a></li>
												<li><a href="<?php echo base_url('user/men')?>"><img src="<?php echo base_url('res/user/images/t3.jpg')?>" class="img-responsive" alt=""/></a></li>
												<li><a href="<?php echo base_url('user/men')?>"><img src="<?php echo base_url('res/user/images/t4.jpg')?>" class="img-responsive" alt=""/></a></li>
												<li><a href="<?php echo base_url('user/men')?>"><img src="<?php echo base_url('res/user/images/t5.jpg')?>" class="img-responsive" alt=""/></a></li>
												<li><a href="<?php echo base_url('user/men')?>"><img src="<?php echo base_url('res/user/images/t6.jpg')?>" class="img-responsive" alt=""/></a></li>
											</ul>
										  </div>
										 
									   </div>
									</div> -->
									<!-- Nav tabs -->
									                   
								</div>				
							</li>
							<!-- <li><a href="<?php echo base_url('user/Products')?>">Products</a></li> -->
							<!-- <li><a href="<?php echo base_url('user/viewcart')?>">MY Cart</a></li> -->
							<?php if (!isset($_SESSION['logged_in']))
						 {?>
							<li><a href="<?php echo base_url('home/login')?>">Sign In</a></li> 
							<?php } ?>
							<!-- <li><a href="<1?php echo base_url('Admin/logout')?>">Sign out</a></li> -->
							<!-- //////logout//////// -->
							 <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true)
						 {?>          
                             <!-- ////////////////////////////////////////////////////////////////////////// -->
							 <li><a href="<?php echo base_url('user/orderdetalss')?>">My Orders</a></li>
							 <li><a href="<?php echo base_url('User/changepass')?>">Change password</a></li>
							 <li><a href="<?php echo base_url('Admin/logout')?>">Sign out</a></li>
							 <!-- <li class="dropdown mega-dropdown active">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign out<span class="caret"></span></a>				
								<div class="dropdown-menu">
									<div class="container-fluid">-->
										<!-- Tab panes 
										<div class="tab-content">
										  <div class="tab-pane active" id="men">
											<ul class="nav list-inline">
										
											
										
											</ul>
										  </div>
										 
									   </div>
									</div>
								Nav tabs 
									                   
								</div>				
							</li> -->






                              <!-- ////////////////////////////////////////////////////////////////////////// -->

								<!-- <li><a href="<?php echo base_url('Admin/logout')?>">Sign out</a></li> -->
							<?php } ?>
							<!-- /////////////////////////////// -->
							<!-- <li class="last"><a href="<?php echo base_url('user/contact')?>">Contact</a></li> -->
						</ul>
					 </div><!-- /.navbar-collapse -->
				  
				</nav>
			</div>
			
				
		<div class="clearfix"> </div>
			<!---pop-up-box---->   
					<link href="<?php echo base_url('res/user/css/popuo-box.css')?>" rel="stylesheet" type="text/css" media="all"/>
					<script src="<?php echo base_url('res/user/js/jquery.magnific-popup.js')?>" type="text/javascript"></script>
					<!---//pop-up-box---->
          
				<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
						<div class="login">
							<form action="<?php echo base_url('home/search')?>" method="post">
								<input type="submit"  value="">
								<input type="text" name="search" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">		
							
							</form>
						</div>
						<!-- <p>	Shopping</p> -->
					</div>				
				</div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>			
	<!---->	
	<!-- start menu -->
<!-- <script type="text/javascript" src="<?=base_url('res/user/js/memenu.js')?>"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script> -->
<!-- <script src="<?=base_url('res/user/js/simpleCart.min.js')?>"> </script> -->
	
		</div>
	</div>
</div>
<!--//header-->