<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
    <div class="container">
        
        <div class="row">
            <div class="col-6">
            <h1>Add category</h1>
             <!-- <form> -->
            
             <?=validation_errors()?>
            <?=form_open(base_url('home/add_category'))?> 
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?=set_value('title')?>" >
              </div>
              
              <button type="submit" class="btn btn-success">Add new </button>
            <!-- </form> --> <?=form_close()?> 
          
        </div>    
    </div>
 </div>
 </div>    
    </div>
 </div>
 </div>    
    </div>
 </div>
  