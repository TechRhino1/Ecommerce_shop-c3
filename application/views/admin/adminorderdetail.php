<!-- <style>
.card-header {
    padding: 0.75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgb(0 0 0);
    border-bottom: 1px solid #ff0101;
}
.content-wrapper {
    background: #ffffff;
}
.table td img, .jsgrid .jsgrid-table td img {
    width: 144px;
    height: 89px;
    border-radius: 4%;
}
</style> -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">

                <div class="main-body">
                    <div class="page-wrapper">

                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <div class="d-inline">
                                            <h4 class="ff">Order Overview</h4>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="page-body">

                            <div class="card">
                                <div class="card-header">
                                    <div class="col-sm-10">
                                        
                                                <!-- <li><a
                                                        href="<?php echo base_url('Admin/delivered_pdt');?>">Delivered</a>
                                                </li> -->


                                            </ul>
                                        </li>
                                    </div>

                                </div>
                                <div class="card-block">

                                    <div class="table-responsive dt-responsive">
                                        <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Sl No</th>
                                                    <th>Item</th>


                                                    <th>Qty</th>
                                                    <th>Order Date</th>
                                                    <th>Prices</th>
                                                    <th>Delivery details</th>

                                                </tr>
                                                <?php
		  $i=1;
          //var_dump($data);
		  foreach($data as $rows) {
			  ?>
                                                <tr>
                                                    <td class="total text-center"><strong
                                                            class="primary-color"><?php echo $i++;?></strong></td>
                                                    <td class="ring-in"><a href="#" class="at-in"><img
                                                                src="<?=base_url('uploads/'.$rows->image)?>"
                                                                class="img-responsive" alt=""></a>
                                                        <div class="sed">
                                                            <!-- <h5><?=$rows->title?></h5> -->
                                                            <!-- <p><?=$rows->discription?> </p> -->

                                                        </div>
                                                        <div class="clearfix"> </div>
                                                    </td>

                                                    <td class="check">
                                                        <t5><?=$rows->nu?>
                                                        </t5>
                                                    </td>
                                                    <td><?= $rows->order_date?></td>
                                                    <td>$<?= $rows->price?>
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
                                                                    GRAND TOTAL = </td>
                                                                <td> $<?php echo $rows->amount ?></td>
                                                            </tr>
                                                        </div>
                                                    </div>
                                                </div>

                                                </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>

                <div id="#">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>