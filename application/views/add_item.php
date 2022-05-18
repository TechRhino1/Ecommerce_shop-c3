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
            <div class="col-12">
            <h1>Add item</h1>
             <!-- <form> -->
             <?=isset($error) ? $error : '' ?>
             <?=validation_errors()?>
            <?=form_open_multipart(current_url())?> 
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?=set_value('title')?>" >
              </div>
              <div class="form-group">
                <label for="price">price</label>
                <input type="number" class="form-control" min="0" step="0.01" id="price" name="price" value="<?=set_value('price')?>"  >
              </div>
              <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
              </div>
              <div class="form-group">
                <label for="quantity">quantity</label>
                <input type="number" class="form-control" min="0" step="1" id="quantity" name="quantity" value="<?=set_value('quantity')?>"  >
              </div>
              <div class="form-group">
                <label for="description">description</label>
                <textarea class="form-control" id="description" name="description" value="<?=set_value('description')?>" ></textarea>
                <!-- <input type="password" class="form-control" id="exampleInputPassword1"> -->
              </div>
              
              <button type="submit" class="btn btn-success">Add new product</button>
            <!-- </form> --> <?=form_close()?> 
          
        </div>    
    </div>
 </div>
 </div>    
    </div>
 </div></div>
 </div>
 </div>
  