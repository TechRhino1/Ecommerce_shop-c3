
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="<?php echo base_url('home/index')?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Checkout</li>
			</ol>
		</div>
	</div>
<!---->
<div class="container">
	<div class="check-out">
		<h2>Checkout</h2>
    	    <table >
		  <tr>
			<th>Item</th>
			
			<th>+</th>	
			<th>Qty</th>	
			<th>-</th>
			<th>Prices</th>
			<th>Delivery details</th>
			<th>Total</th>
			<th> </th>
		  </tr>
		  <?php
		  $sum=0;
		  foreach ($cart as $row) {
			  $pt=$row-> price*$row->nos;
			 $sum =$sum + $pt;?>
		  <tr>
			<td class="ring-in"><a href="#" class="at-in"><img src="<?=base_url('uploads/'.$row->image)?>" class="img-responsive" alt=""></a>
			<div class="sed">
				<h5><?=$row->title?></h5>
				<p><?=$row->discription?> </p>
			
			</div>
			<div class="clearfix"> </div></td>
			<td><button  onclick='plus(<?=$row->cart_id?>);'>+</button></td>
			<td class="check"><input type="text" value="<?=$row->nos?>" id='q<?=$row->cart_id?>' onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}"></td>
			<td> <button onclick='min(<?=$row->cart_id?>);'>-</button></td>		
			<td>$<div id="pr<?=$row->cart_id?>"><?= $row->price?></div></td>
			<td>FREE SHIPPING</td>
			<td>$<div id="div<?=$row->cart_id?>"><?= $row->price*$row->nos?></div></td>
			<td> <a href="<?= base_url().'User/remove_cart/'.$row->cart_id; ?>">
          <button class="btn btn-primary btn-sm"><i class="fa fa-times" aria-hidden="true">REMOVE</i></button></a></td> 
		  </tr>
		  <?php } ?>
		  <!-- <div class="container"> -->
          <!-- <div class="account_grid"> -->
		  <div> 
			  <tr><td colspan="5"> </td><td>
				       GRAND TOTAL = $ <?php echo $sum; ?></td></tr>
		<!-- </div> -->
		<!-- </div> -->
		</div>
		 
		  <!-- <tr>
		  <td class="ring-in"><a href="single.html" class="at-in"><img src="<?php echo base_url('res/user/images/ce1.jpg')?>" class="img-responsive" alt=""></a>
			<div class="sed">
				<h5>Sed ut perspiciatis unde</h5>
				<p>(At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium ) </p>
			</div>
			<div class="clearfix"> </div></td>
			<td class="check"><input type="text" value="1" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}"></td>		
			<td>$200.00</td>
			<td>FREE SHIPPING</td>
			<td>$200.00</td>
		  </tr>
		  <tr>
		  <td class="ring-in"><a href="single.html" class="at-in"><img src="<?php echo base_url('res/user/images/ce2.jpg')?>" class="img-responsive" alt=""></a>
			<div class="sed">
				<h5>Sed ut perspiciatis unde</h5>
				<p>(At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium) </p>
			</div>
			<div class="clearfix"> </div></td>
			<td class="check"><input type="text" value="1" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}"></td>		
			<td>$150.00</td>
			<td>FREE SHIPPING</td>
			<td>$150.00</td>
		  </tr> -->
	</table>
	
	
	<a href="<?= base_url().'User/orderdet'?>" class=" to-buy">PROCEED TO BUY</a>
	<div class="clearfix"> </div>
	<!-- <1?php echo $sum; ?> -->
    </div>
</div>
<!--footer-->
<script>

function plus(id)
{

    var a="q"+id;
	var b="div"+id;
	var c=document.getElementById("pr"+id).innerHTML;

	$.ajax({ type:'POST',
				url:'<?=base_url("User/plus")?>',
				data:{'id':id,
						
					            },
				
				success:function(response){
				
					document.getElementById(a).value=response;

					document.getElementById(b).innerHTML=response*c;
							
					},
				
			});
}
function min(id)
{
    var a="q"+id;
	var b="div"+id;
	var c=document.getElementById("pr"+id).innerHTML;
	$.ajax({ type:'POST',
				url:'<?=base_url("User/min")?>',
				data:{'id':id,
						
					            },
				
				success:function(response){
				
					document.getElementById(a).value=response;
					document.getElementById(b).innerHTML=response*c;
							
							
					},
				
			});
}

</script>
