<!--//header-->
<div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="<?php echo base_url('home/index')?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Account</li>
            </ol>
        </div>
    </div>
<div class="account">
    <div class="container">
        <h2>Billing Details</h2>
        <div class="account_grid">
		<div class="col-md-6  register-top-grid">
                <!-- <form action="#" method="post"> -->
                    
                <?=validation_errors()?>
            
            <form action="<?= base_url('User/orderdet');?> " method="post">

            <!-- <div class="col-md-6"> -->
						<div class="billing-details">
							
							<!-- <div class="section-title">
								<h3 class="title">Billing Details</h3>
							</div> -->
							<div class="form-group">
								<input class="input" type="text" name="first_name" placeholder="First Name" required  >
							</div>
							<div class="form-group">
								<input class="input" type="text" name="last_name" placeholder="Last Name" required  >
							</div>
							<div class="form-group">
								<input class="input" type="text" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$"  required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Address" required  >
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" placeholder="City" required >
							</div>
							<div class="form-group">
								<input class="input" type="text" name="landmark" placeholder="Landmark" required >
							</div>
							<div class="form-group">
								<input class="input" type="text" name="pincode" placeholder="PIN Code" required pattern=[0-9]{6} title="enter valid pin code">
							</div>
							<div class="mation">
								<input class="input" type="text" name="phone" placeholder="Phone Number" required pattern=[0-9]{10} title="enter valid phone number">
							</div>
							<div class="register-but">
				 
				  <button type="submit" class="btn btn-success">PROCEED TO BUY </button>
					   <div class="clearfix"> </div>
						
						</div>
					<!-- </div> -->
                <!-- </form> -->
                </form>
               </div>   
                <!-- <div class="col-md-6 login-left">
                 <h4>NEW CUSTOMERS</h4>
                 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                 <a class="acount-btn" href="<?=base_url('home/register')?>">Create an Account</a>
               </div> -->
               <div class="clearfix"> </div>
             </div>
    </div>
</div>
<!-- /////////////////////////////////////////////////////// -->
