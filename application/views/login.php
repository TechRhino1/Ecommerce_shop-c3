<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <div class="container">
        
        <div class="row">
            <div class="col-6 offset-md-3 text-center">
            <h1 class="mb-3">LOGIN</h1>
             <!-- <form> -->
            
             <?=validation_errors()?>
            <?=form_open(base_url('home/login'))?> 
              <div class="form-group">
                
                <input type="email" class="form-control" id="email" placeholder="Email" name="email" required value="<?=set_value('email')?>" >
              </div>
              <div class="form-group">
              
                <input type="password" class="form-control" id="password" placeholder="PASSWORD" name="password" required value="<?=set_value('password')?>" >
              </div>
              
              <button type="submit" class="btn btn-block btn-primary">SUBMIT </button>
            <!-- </form> --> <?=form_close()?> 
            <div class="row">
                <div class="col-12">
                    <a class="mt-4 text-success" href="<?=base_url('home/register')?>">Register</a>
                </div>
            </div>
          
        </div>    
    </div>
 </div>
  