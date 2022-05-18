<!--//header-->
<div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Account</li>
            </ol>
        </div>
    </div>
<div class="account">
    <div class="container">
        <h2>Login</h2>
        <div class="account_grid">
               <div class="col-md-6 login-right">
                <!-- <form action="#" method="post"> -->
                    
                <?=validation_errors()?>
            
            <form action="<?= base_url('Home/loginn');?> " method="post">

                    <span>Email Address</span>
                    <input type="text" id="email" placeholder="Email" name="email" required value="<?=set_value('email')?>"> 
                
                    <span>Password</span>
                    <input type="password" id="password" placeholder="PASSWORD" name="password" required value="<?=set_value('password')?>" > 
                    <div class="word-in">
                        <a class="forgot" href="#">Forgot Your Password?</a>
                         <input type="submit" value="Login">
                    </div>
                <!-- </form> -->
                </form>
               </div>   
                <div class="col-md-6 login-left">
                 <h4>NEW CUSTOMERS</h4>
                 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                 <a class="acount-btn" href="<?=base_url('home/register')?>">Create an Account</a>
               </div>
               <div class="clearfix"> </div>
             </div>
    </div>
</div>