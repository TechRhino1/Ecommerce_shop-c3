
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="<?php echo base_url('home/index')?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Single</li>
			</ol>
		</div>
	</div>
<div class="single">

<div class="container">
<div class="col-md-9">
	<div class="col-md-5 grid">
			<?php foreach ($items as $row) {?>	
		<div class="flexslider">
			  <ul class="slides">
			    <li data-thumb="<?=base_url('uploads/'.$row->image)?>">
			        <div class="thumb-image"> <img src="<?=base_url('uploads/'.$row->image)?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			      <li data-thumb="<?=base_url('uploads/'.$row->image)?>">
			         <div class="thumb-image"> <img src="<?=base_url('uploads/'.$row->image)?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <li data-thumb="<?=base_url('uploads/'.$row->image)?>">
			       <div class="thumb-image"> <img src="<?=base_url('uploads/'.$row->image)?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li> 
			  </ul>
		</div>
	</div>	
	              
                    <div class="col-md-7 single-top-in">
						<div class="single-para simpleCart_shelfItem">
							<h2><?=$row->title?></h2>
							<p><?=$row->discription?></p>
							<div class="star-on">
								<!-- <ul>
									<li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
									<li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
									<li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
									<li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
									<li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
								</ul> -->
								<!-- <div class="review">
									<a href="#"> 3 reviews </a>/
									<a href="#">  Write a review</a>
								</div> -->
							<div class="clearfix"> </div>
							</div>
							
								<label  class="add-to item_price">$<?= $row->price?></label>
								<?php } ?>
							<!-- <div class="available">
								<h6>Available Options :</h6>
								<ul>
									
								<li>Size:<select>
									<option>Large</option>
									<option>Medium</option>
									<option>small</option>
									<option>Large</option>
									<option>small</option>
								</select></li>
								<li>Cost:
										<select>
										<option>U.S.Dollar</option>
										<option>Euro</option>
									</select></li>
							</ul>
						</div> -->
								<!-- <a href="#" class="cart item_add">More details</a> -->
								<a href="<?php echo base_url('User/addcart/').$row->id;?>" class="cart item_add">Add to cart</a>
						</div>
					</div>
			<div class="clearfix"> </div>
			<div class="content-top1">
				<div class="col-md-4 col-md4">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="#">
							<img class="img-responsive" src="<?=base_url('res/user/images/pi6.png')?>" alt="" />
						</a>
						<h3><a href="#">Trouser</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<!-- <a href="#" class="item_add">Add To Cart</a> -->
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
			<div class="col-md-4 col-md4">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="#">
							<img class="img-responsive" src="<?=base_url('res/user/images/pi7.png')?>" alt="" />
						</a>
						<h3><a href="#">Jeans</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<!-- <a href="#" class="item_add">Add To Cart</a> -->
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="col-md-4 col-md4">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="#">
							<img class="img-responsive" src="<?=base_url('res/user/images/pi.png')?>" alt="" />
						</a>
						<h3><a href="#">Palazoo</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<!-- <a href="#" class="item_add">Add To Cart</a> -->
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			
			<div class="clearfix"> </div>
			</div>		
</div>
<!----->
<div class="col-md-3 product-bottom">
			<!--categories-->
				<div class=" rsidebar span_1_of_left">
						<h3 class="cate">Categories</h3>
							 <ul class="menu-drop">
							<li class="item1"><a href="#">Men </a>
								<ul class="cute">
									<li class="subitem1"><a href="#">Cute Kittens </a></li>
									<li class="subitem2"><a href="#">Strange Stuff </a></li>
									<li class="subitem3"><a href="#">Automatic Fails </a></li>
								</ul>
							</li>
							<li class="item2"><a href="#">Women </a>
								<ul class="cute">
									<li class="subitem1"><a href="#">Cute Kittens </a></li>
									<li class="subitem2"><a href="#">Strange Stuff </a></li>
									<li class="subitem3"><a href="#">Automatic Fails </a></li>
								</ul>
							</li>
							<li class="item3"><a href="#">Kids</a>
								<ul class="cute">
									<li class="subitem1"><a href="#">Cute Kittens </a></li>
									<li class="subitem2"><a href="#">Strange Stuff </a></li>
									<li class="subitem3"><a href="#">Automatic Fails</a></li>
								</ul>
							</li>
							<li class="item4"><a href="#">Accesories</a>
								<ul class="cute">
									<li class="subitem1"><a href="#">Cute Kittens </a></li>
									<li class="subitem2"><a href="#">Strange Stuff </a></li>
									<li class="subitem3"><a href="#">Automatic Fails</a></li>
								</ul>
							</li>
									
							<li class="item4"><a href="#">Shoes</a>
								<ul class="cute">
									<li class="subitem1"><a href="#">Cute Kittens </a></li>
									<li class="subitem2"><a href="#">Strange Stuff </a></li>
									<li class="subitem3"><a href="#">Automatic Fails </a></li>
								</ul>
							</li>
						</ul>
					</div>
				<!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>
<!--//menu-->
<!--seller-->
				<div class="product-bottom">
						<h3 class="cate">Best Sellers</h3>
						<?php foreach ($items as $rows): ?> 
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="#"><img class="img-responsive " src="<?=base_url('uploads/'.$rows->image)?>" alt="<?=$rows->title?>"></a>	
						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="#" ><?= $rows->title?> </a></h6>
							<span class=" price-in1">$<?= $rows->price?></span>
						</div>	
						<div class="clearfix"> </div>
					</div>
					<?php endforeach;?>
					<!-- <div class="product-go">
						<div class=" fashion-grid">
							<a href="single.html"><img class="img-responsive " src="images/pr1.jpg" alt=""></a>	
						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="single.html" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
							<span class=" price-in1"> $40.00</span>
						</div>	
						<div class="clearfix"> </div>
					</div>
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="single.html"><img class="img-responsive " src="images/pr2.jpg" alt=""></a>	
						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="single.html" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
							<span class=" price-in1"> $40.00</span>
						</div>	
						<div class="clearfix"> </div>
					</div>	
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="single.html"><img class="img-responsive " src="images/pr3.jpg" alt=""></a>	
						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="single.html" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
							<span class=" price-in1"> $40.00</span>
						</div>	
						<div class="clearfix"> </div>
					</div>		
				</div> -->

<!--//seller-->
<!--tag-->
				<div class="tag">	
						<h3 class="cate">Tags</h3>
					<div class="tags">
						<ul>
							<li><a href="#">design</a></li>
							<li><a href="#">fashion</a></li>
							<li><a href="#">lorem</a></li>
							<li><a href="#">dress</a></li>
							<li><a href="#">fashion</a></li>
							<li><a href="#">dress</a></li>
							<li><a href="#">design</a></li>
							<li><a href="#">dress</a></li>
							<li><a href="#">design</a></li>
							<li><a href="#">fashion</a></li>
							<li><a href="#">lorem</a></li>
							<li><a href="#">dress</a></li>
						<div class="clearfix"> </div>
						</ul>
				</div>					
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	</div>
<!-- slide -->
<script src="<?=base_url('res/user/js/jquery.min.js')?>"></script>
<script src="<?=base_url('res/user/js/imagezoom.js')?>"></script>
<!-- start menu -->
<script type="text/javascript" src="<?=base_url('res/user/js/memenu.js')?>"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<!-- <script src="<?=base_url('res/user/js/simpleCart.min.js')?>"> </script> -->
<!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>
						<!-- FlexSlider -->
  <script defer src="<?=base_url('res/user/js/jquery.flexslider.js')?>"></script>
<link rel="stylesheet" href="<?=base_url('res/user/css/flexslider.css')?>" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
<!---pop-up-box---->
					<link href="<?=base_url('res/user/css/popuo-box.css')?>" rel="stylesheet" type="text/css" media="all"/>
					<script src="<?=base_url('res/user/js/jquery.magnific-popup.js')?>" type="text/javascript"></script>
					<!---//pop-up-box---->
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
