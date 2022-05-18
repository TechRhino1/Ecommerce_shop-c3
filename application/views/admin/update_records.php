<!-- <1?php
defined('BASEPATH') OR exit('No direct script access allowed');
?> -->
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
    <div class="container">
        
        <div class="row">
            <div class="col-12">
            <h1>Update item</h1>
             <!-- <form> -->
          <?php
             $i=1;
             foreach ($data as $row) {
                
            
             ?>
                 <form method="post">
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?=$row->title?>" >
              </div>
              <div class="form-group">
                <label for="price">price</label>
                <input type="number" class="form-control" min="0" step="0.01" id="price" name="price" value="<?=$row->price?>"  >
              </div>
              <!-- <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image" name="image"  value="<?=$row->image?>">
              </div> -->
              <div class="form-group">
                <label for="quantity">quantity</label>
                <input type="number" class="form-control" min="0" step="1" id="quantity" name="quantity" value="<?=$row->quantity?>"  >
              </div>
              <div class="form-group">
                <!-- <label for="discription">discription</label>
                <textarea class="form-control" id="discription" name="discription" value="<?=$row->discription?>" ></textarea> -->
                <!-- <input type="password" class="form-control" id="exampleInputPassword1"> -->
              </div>
              <input type="submit" name="update" value="update_Records"/>
              <!-- <button type="submit" class="btn btn-success">update</button> -->
            </form>  
          <?php } ?>
        </div>    
    </div>
 </div>
 </div>    
    </div>
 </div></div>
 </div>
 </div>
  