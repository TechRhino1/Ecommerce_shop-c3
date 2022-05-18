<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <div class="container">
        
        <div class="row">
            <div class="col-6 offset-md-3 text-center">
            <h1 class="mb-3">REGISTER</h1>
             <!-- <form> -->
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
              <div class="form-group">
                <input type="email" class="form-control"  name="email" placeholder="Email" required value="<?=set_value('email')?>" >
              </div>
              <div class="form-group">
                
                <input type="text" class="form-control"  placeholder="first_name" name="first_name" required value="<?=set_value('first_name')?>" >
              </div>
              <div class="form-group">
                
                <input type="text" class="form-control"  placeholder="last_name" name="last_name" required value="<?=set_value('last_name')?>" >
              </div>
              <div class="form-group">
                
                <input type="password" class="form-control"  placeholder="PASSWORD" name="password" required value="<?=set_value('password')?>" >
              </div>
              <div class="form-group">
                
                <input type="password" class="form-control"  placeholder="Conform PASSWORD " name="passconfm" required value="<?=set_value('passconfm')?>" >
              </div>
              
              <button type="submit" class="btn btn-block btn-primary">SUBMIT </button>
            <!-- </form> --> <?=form_close()?> 
            <div class="row">
                <div class="col-12">
                    <a class="mt-4 text-success" href="<?=base_url('home/login')?>">back to login</a>
                </div>
            </div>
          <?php endif;?>
        </div>    
    </div>
 </div>
  