<style>
   .imggg {
    width: 370px;
    margin-left: 104px;
    vertical-align: middle;
}
</style>

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
        <h2>Change Password</h2>
        <div class="account_grid">
               <div class="col-md-6 login-right">
                <!-- <form action="#" method="post"> -->
                    
                <?=validation_errors()?>
            
            <form action="<?= base_url('Home/change_pass');?> " method="post">

                    <!-- <span>Old Password :</span>
                    <input type="password" id="old_pass" placeholder="Old Password" name="old_pass" required value="<?=set_value('email')?>"> 
                 -->
                    <span>New Password</span>
                    <input type="password" id="new_pass" placeholder="New PASSWORD" name="new_pass" required value="<?=set_value('password')?>" > 
                    <span>Conform Password</span>
                    <input type="password" id="confirm_pass" placeholder="Conform PASSWORD" name="confirm_pass" required value="<?=set_value('confirm_pass')?>" > 
                   
                    <div class="word-in">
                         <input type="submit" value="update" name="change_pass">
                    </div>
                <!-- </form> -->
                </form>
               </div>   
               <div class="col-md-6 login-left">
                 <!-- <h4>NEW CUSTOMERS</h4> -->
                 <img src="<?php echo base_url('res/user/images/vv.png')?>" alt="" class="imggg"/><p><a href="javascript:;" class="simpleCart_empty" style="color: #fb0000;">
                 <!-- <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p> -->
                 <!-- <a class="acount-btn" href="<?=base_url('home/register')?>">Create an Account</a> -->
               </div>
               <div class="clearfix"> </div>
             </div>
    </div>
</div>