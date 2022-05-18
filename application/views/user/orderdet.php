<!--//header-->
<style>
 .ad{
      width: 297px;
    }
  
</style>
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s"
            style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
            <li><a href="<?php echo base_url('home/index')?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">Account</li>
        </ol>
    </div>
</div>
<div class="account">
    <div class="container">
        <h2>My Orders</h2>
        <div class="account_grid">
            <div class="col-md-12">
                <form action="<?= base_url('user/orderdetalss');?> " method="post">
                    <!-- ///////////////////////////////////////////////////////// -->
                    <div class="row">
                        <form id="checkout-form" class="clearfix">
                            <div class="col-md-12">
                                <div class="order-summary clearfix">
                                    <!-- <div class="section-title">
								<h3 class="title">My Orders</h3>
							</div> -->
                                    <table class="shopping-cart-table table ">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Sl No</th>

                                                <!-- <th class="text-center"></th> -->
										        <th class="text-center">Track Id</th> 
                                                <th class="text-center">Order Date</th>
                                                <!-- <th class="text-center">Payment Method</th> -->
                                                <!-- <th class="text-center">Status</th> -->
                                                <th class="text-center ad">Shipping Address</th>
                                                <th class="text-center">Total</th>
                                                <th class="text-center"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                $sum=0;
								$i=1;
                                foreach($data as $rows)
                                {
                                   ?>
                                            <tr>
                                                <th class="text-center"><strong
                                                        class="primary-color"><?php echo $i++;?></strong></th>
                                                        <th class="text-center"><strong
                                                        class="primary-color"><?php echo $rows["order_id"];?></strong></th>
                                                <th class="text-center"><strong class="primary-color"><?php $mydate=$rows["order_date"];
										$mydate=date_parse($rows["order_date"]);
										echo $mydate["day"]."-".$mydate["month"]."-".$mydate["year"];?></strong></th>

                                                <!-- <th class="text-center"><strong class="primary-color">
                                                        <?php 
										
										if($rows["status"]==0){
											echo  "Cancelled";
										}
										else if($rows["status"]==1){
											echo "Ordered";
										}
										else if($rows["status"]==2){
											echo  "Shipped ";
										}
                                        else if($rows["status"]==3){
											echo  "Delivered";
                                        }
										 
										?></strong>
                                                </th> -->
                                                <th class="text-center"><strong
                                                        class="primary-color"><?php echo $rows["address"];?></strong>
                                                </th>
                                                <th class="text-center"><strong 
                                                        class="primary-color">$<?php echo $rows["amount"];?></strong>
                                                </th>

                                                <!-- <td class="total text-center">
									<a href="<?php echo base_url('User/view_order_details/').$rows["order_id"]?>">
                                    <button onclick="count_sub(<?php echo $rows['order_id'];?>);" id="subs" class="decrease arrow" type="button" title="View Order Details">
                                    <span class="lnr lnr-chevron-down"> Order Detail  </span></button></a>
									</td> -->
                                    <td class="total text-center">
									<a href="<?php echo base_url('User/orderdetail/').$rows["order_id"]?>">
                                    <button onclick="count_sub(<?php echo $rows['order_id'];?>);" id="subs" class="btn btn-warning decrease arrow" type="button" title="View Order Details">
                                    <span class="lnr lnr-chevron-down"> View Detail  </span></button></a>
									</td>
                                            </tr>

                                            <?php 
								}
                                    ?>
                                        </tbody>

                                    </table>

                                </div>
                            </div>

                        </form>
                    </div>
                    <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /section -->



        <!-- <script>

function count_add(id)
{
    
	console.log(id);
	$.ajax({
		method:"POST",
		url:"<?php echo base_url('User/add_to_cart_plus/').'/'.$rows['product_id']?>";
		<?php echo base_url('User/add_to_cart_plus')?>"
		data:{
			
			titem:titem,
			
		},
			success:function(response){
				console.log(response);
				
				document.getElementById("seldata").innerHTML=response;
				
			}        
	})
}

function count_sub(id)
{
	
	console.log(id);
	$.ajax({
		method:"POST",
		url:"add_to_cart_plus($id)",
		data:{
			
			titem:titem,
			
		},
			success:function(response){
				console.log(response);
				
				document.getElementById("seldata").innerHTML=response;
				
			}        
	})
}




</script> -->
        <!-- ///////////////////////////////////////////////////////////////// -->
    </div>
    <div class="clearfix"> </div>
</div>
</div>
</div>