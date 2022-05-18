
<!--//header-->
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="<?php echo base_url('home/index')?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Register</li>
			</ol>
		</div>
	</div>
<div class="container">
	<div class="register">
		<h2>Register</h2>
		  	  <!-- <form action="#" method="post"> -->
				<?php if(isset($success) && $success):?>
                <div class="row">
                    <div class="col-12">
                         <div class="alert alert-success ">
                             Registration completed sucessful..<br>
                             <a href="<?=base_url()?>">Home</a>
                         </div>                
                </div>
                </div>
                <?php else:?>
             <?=validation_errors()?>
            <?=form_open(base_url('home/register'))?> 
				 <div class="col-md-6  register-top-grid">
					
					<div class="mation">
						<span>First Name</span>
						<input type="text"  name="first_name" required value="<?=set_value('first_name')?>"> 
					
						<span>Last Name</span>
						<input type="text"  name="last_name" required value="<?=set_value('last_name')?>"> 
					 
						 <span>Email Address</span>
						 <input type="text"name="email"  required value="<?=set_value('email')?>"> 
					</div>
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up</label>
					   </a>
					 </div>
				     <div class=" col-md-6 register-bottom-grid">
						   
							<div class="mation">
								<span>Password</span>
								<input type="password"  name="password" required value="<?=set_value('password')?>">
								<span>Confirm Password</span>
								<input type="password"  name="passconfm" required value="<?=set_value('passconfm')?>" >
							</div>
					 </div>
					 <div class="clearfix"> </div>
				<!-- </form> -->
				
				<div class="register-but">
				  <form action="#" method="post">
				  <button type="submit" class="btn btn-warning">SUBMIT </button>
					   <div class="clearfix"> </div>
				   <!-- </form> -->
				   <?=form_close()?> 
				   <div class="row">
                <div class="col-12">
                    <a class="mt-4 text-success" href="<?=base_url('home/login')?>">back to login</a>
                </div>
            </div>
          <?php endif;?>
				</div>
		   </div>
</div>

