
<!--banner-->
<div class="banner">
	<div class="matter-banner">
	 	<div class="slider">
	    	<div class="callbacks_container">
	      		<ul class="rslides" id="slider">
	        		<li>
	          			<img src="<?php echo base_url('res/user/images/1.jpg')?>" alt="">
						<div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
							<h2>MEN & WOMEN</h2>
							<h3>Trousers & Chinos</h3>
							<h4>UPTO 50%</h4>
							<p>OFFER</p>
						</div>
	       			 </li>
			 		 <li>
	          			<img src="<?php echo base_url('res/user/images/3.jpg')?>" alt=""> 
						<div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
							<h2>MEN & WOMEN</h2>
							<h3>Trousers & Chinos</h3>
							<h4>UPTO 50%</h4>
							<p>OFFER</p>
						</div>					
	       			 </li>
					 <li>
	          			<img src="<?php echo base_url('res/user/images/2.jpg')?>" alt="">
						<div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
							<h2>MEN & WOMEN</h2>
							<h3>Trousers & Chinos</h3>
							<h4>UPTO 50%</h4>
							<p>OFFER</p>
						</div>
	        		</li>	
	      		</ul>
	 	 	</div>
		</div>
	</div>
	<div class="clearfix"> </div>
</div>
<!--//banner-->
<!--content-->
<div class="content">
	<div class="container">
		<div class="content-top">
			<div class="content-top1">
				<?php foreach ($items as $row): ?> 
				<div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="<?php echo base_url('user/single/').$row->id;?>">
							<img class="img-responsive" src="<?=base_url('uploads/'.$row->image)?>" alt="<?=$row->title?>" />
						</a>
						<!-- /////////////////////////////////////// -->
						<h3><a href="<?php echo base_url('User/single/').$row->id;?>"><?= $row->title?></a></h3>
						<div class="price">
								<h5 class="item_price">$<?= $row->price?></h5>
								<!-- <a href="<?php echo base_url('User/addtocart/').$row->id?>" class="item_add">Add To Cart</a> -->
								<a href="<?php echo base_url('User/single/').$row->id;?>" class="item_add">View details</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
				<?php endforeach;?>
				<div class="col-md-6 animated wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
					<div class="col-md3">
						<div class="up-t">
							<h3>Flat 50% Offer</h3>
						</div>
					</div>
				</div>
			<!-- <div class="col-md-3 col-md2 animated wow fadeInRight" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="<?php echo base_url('res/user/js/jquery.min.js')?>single.html">
							<img class="img-responsive" src="<?php echo base_url('res/user/images/pi4.png')?>" alt="" />
						</a>
						<h3><a href="<?php echo base_url('single.php')?>">Pant</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	 -->
			<div class="clearfix"> </div>
			</div>	
			<!-- <div class="content-top1">
				<div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="images/pi3.png" alt="" />
						</a>
						<h3><a href="single.html">Palazoo</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
			<div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="images/pi2.png" alt="" />
						</a>
						<h3><a href="single.html">Trouser</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
			<div class="col-md-3 col-md2 animated wow fadeInRight" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="images/pi6.png" alt="" />
						</a>
						<h3><a href="single.html">Trouser</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
			<div class="col-md-3 col-md2 cmn animated wow fadeInRight" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="images/pi8.png" alt="" />
						</a>
						<h3><a href="single.html">Palazoo</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	 -->
			<div class="clearfix"> </div>
			</div>			
		</div>
	</div>
</div>
<!--//content-->
	<div class="con-tp">
		<div class="container">
			<div class="col-md-4 con-tp-lft animated wow fadeInLeft" data-wow-delay=".5s">
				<a href="#">
					<div class="content-grid-effect slow-zoom vertical">
						<div class="img-box"><img src="<?php echo base_url('res/user/images/6.jpg')?>" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content simpleCart_shelfItem">
										<h4>30%offer</h4>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 con-tp-lft animated wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
				<a href="#">			
					<div class="content-grid-effect slow-zoom vertical">
						<div class="img-box"><img src="<?php echo base_url('res/user/images/10.jpg')?>" alt="image" class="img-responsive zoom-img"></div>
							<div class="info-box">
								<div class="info-content simpleCart_shelfItem">
										<h4>45%offer</h4>	
								</div>
							</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 con-tp-lft animated wow fadeInRight" data-wow-delay=".5s">
				<a href="#">
					<div class="content-grid-effect slow-zoom vertical">
						<div class="img-box"><img src="<?php echo base_url('res/user/images/9.jpg')?>" alt="image" class="img-responsive zoom-img"></div>
							<div class="info-box">
								<div class="info-content simpleCart_shelfItem">
										<h4>50%offer</h4>	
								</div>
							</div>
					</div>
				</a>
			</div>
			<div class="clearfix"></div>
		<div class="col-md-4 con-tp-lft animated wow fadeInLeft" data-wow-delay=".5s">
			<a href="#">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="<?php echo base_url('res/user/images/12.jpg')?>" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content simpleCart_shelfItem">
									<h4>25%offer</h4>	
							</div>
						</div>
				</div>
			</a>
		</div>
		<div class="col-md-4 con-tp-lft animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
			<a href="#">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="<?php echo base_url('res/user/images/13.jpg')?>" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content simpleCart_shelfItem">
									<h4>50%offer</h4>	
							</div>
						</div>
				</div>
			</a>
		</div>
		<div class="col-md-4 con-tp-lft animated wow fadeInRight" data-wow-delay=".5s">
			<a href="#">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="<?php echo base_url('res/user/images/14.jpg')?>" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content simpleCart_shelfItem">
									<h4>35%offer</h4>	
							</div>
						</div>
				</div>
			</a>
		</div>
		<div class="clearfix"></div>
		</div>
	</div>
	<div class="c-btm">
		<div class="content-top1">
			<div class="container">
				<div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="#">
							<img class="img-responsive" src="<?php echo base_url('res/user/images/pi9.png')?>" alt="" />
						</a>
						<h3><a href="#">Trousers</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<!-- <a href="#" class="item_add">Add To Cart</a> -->
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="#">
							<img class="img-responsive" src="<?php echo base_url('res/user/images/pi10.png')?>" alt="" />
						</a>
						<h3><a href="#">Formal</a></h3>
						<div class="price">
								<h5 class="item_price">$450</h5>
								<!-- <a href="#" class="item_add">Add To Cart</a> -->
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="col-md-3 col-md2 animated wow fadeInRight" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="#">
							<img class="img-responsive" src="<?php echo base_url('res/user/images/pi11.png')?>" alt="" />
						</a>
						<h3><a href="#">Trousers</a></h3>
						<div class="price">
								<h5 class="item_price">$350</h5>
								<!-- <a href="#" class="item_add">Add To Cart</a> -->
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="col-md-3 col-md2 animated wow fadeInRight" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="#">
							<img class="img-responsive" src="<?php echo base_url('res/user/images/pi12.png')?>" alt="" />
						</a>
						<h3><a href="#">Formal</a></h3>
						<div class="price">
								<h5 class="item_price">$400</h5>
								<!-- <a href="#" class="item_add">Add To Cart</a> -->
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="clearfix"> </div>
			</div>	
		</div>
	</div>

