<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s"
            style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
            <li><a href="<?php echo base_url('home/index')?>"><span class="glyphicon glyphicon-home"
                        aria-hidden="true"></span>Home</a></li>
            <li class="active">ORDER DETAIL</li>
        </ol>
    </div>
</div>
<!---->
<div class="container">
    <div class="check-out">
        <h2>Order Details</h2>
        <table>
			<form action="" method="post">
            <tr>
                <th>Sl No</th>
                <th>Item</th>


                <th>Qty</th>
				<th>Order Date</th>
                <th>Prices</th>
                <th>Delivery details</th>
                <th> </th>
                <th> </th>
            </tr>
            <?php
		  $i=1;
          //var_dump($data);
		  foreach($data as $rows) {
			  ?>
            <tr>
                <td class="total text-center"><strong class="primary-color"><?php echo $i++;?></strong></td>
                <td class="ring-in"><a href="#" class="at-in"><img src="<?=base_url('uploads/'.$rows->image)?>"
                            class="img-responsive" alt=""></a>
                    <div class="sed">
                        <h5><?=$rows->title?></h5>
                        <p><?=$rows->discription?> </p>
                        <?=$rows->nu?>
                    </div>
                    <div class="clearfix"> </div>
                </td>

                <td class="check"><input type="text" value="<?=$rows->nu?>" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}"></td>
				<td><?= $rows->order_date?></td>
                <td>$<?= $rows->price*$rows->nu?>
                </td>
                <td>FREE SHIPPING</td>
                <!-- <td>$<?= $rows->amount?> -->
                </td>


            </tr>
            <?php } ?>
            <div class="container">
            <div class="account_grid">
            <div>
                <tr>
                    <td colspan="3"> </td>
                    <td>
                        GRAND TOTAL = </td><td> $<?php echo $rows->amount ?></td>
                </tr>
                </div>
                </div>
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
		  </form>
        </table>


        <a href="<?php echo base_url('home/index')?>" class=" to-buy">Continue Shopping</a>
        <div class="clearfix"> </div>
        <!-- <1?php echo $sum; ?> -->
    </div>
</div>
<!--footer-->
<!-- <script>

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

</script> -->