<div class="container">
	<div class="row">
	<div class="col-12">
        <h1>product</h1>

	  </div>
    </div>
   <!-- <div class="row">
	   <!?php foreach ($items as $item): ?> 
		<div class="card" style="width: 18rem;">
  <img src="<!?=base_url('uploads/'.$item['image'])?>" class="card-img-top" alt="<!?=$item['title']?>">
  <div class="card-body">
    <h5 class="card-title"><!?=$item['title']?></h5>
    <p class="card-text"><!?=$item['price']?> $ </p>
    <a href="#" class="btn btn-primary">ADD TO CART</a>
  </div>
</div>
	    <!?php endforeach;?>
   </div> -->
   <!-- //////////////////////////////// -->
   <!-- </div> -->
   <div class="row">
	   <?php foreach ($items as $row): ?> 
		<div class="col-4">
		<div class="card">
  <img src="<?=base_url('uploads/'.$row->image)?>" class="card-img-top" alt="<?=$row->title?>">
  <div class="card-body">
    <h5 class="card-title"><?= $row->title?></h5>
    <p class="card-text"><?= $row->price?> $ </p>
    <a href="#" class="btn btn-primary">ADD TO CART</a>
  </div>
</div>
</div>
	    <?php endforeach;?>
   </div>
   <!-- //////////////////// -->

</div>