<style>
/* .page-body{
    margin-top: 47px;
    margin-left: 60px;
  }
  .ff{
      margin-top: 47px;
    margin-left: 50px;} */
</style>
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
                                            <h4 class="ff">Sales Overview</h4>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="page-body">

                            <div class="card">
                                <div class="card-header">
                                    <div class="col-sm-10">
                                        <!-- <a href="addsales.php"><button class="btn btn-primary pull-right">+ Add
                                                New</button></a> -->
                                    </div>

                                </div>
                                <div class="card-block">

                                    <div class="table-responsive dt-responsive">
                                        <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Customer Name</th>
                                                    <th>Date of purchase</th>
                                                    <th>Order Id</th>
                                                    <th>Total</th>
                                                    <th>Phone no</th>
                                                    <!-- <th>Status</th> -->
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                           foreach ($data as $rows)
                                            {
                                             ?>
                                                <tr class="odd gradeX">
                                                    <td><?php echo $rows->id; ?></td>
                                                    <td><?php echo $rows->first_name ,$rows->last_name; ?></td>
                                                    <td><?php echo $rows->order_date; ?></td>
                                                    <td><?php echo $rows->order_id; ?></td>
                                                    <td><?php echo $rows->amount; ?></td>
                                                    <td><?php echo $rows->phone; ?></td>
                                                    <!-- <th class="text-center"><strong class="primary-color">
                                                            <?php 
										
                                                                    if($rows->status==0){
                                                                        echo  "Cancelled";
                                                                    }
                                                                    else if($rows->status==1){
                                                                        echo "Ordered";
                                                                    }
                                                                    else if($rows->status==2){
                                                                        echo  "Shipped ";
                                                                    }
                                                                    else if($rows->status==3){
                                                                        echo  "Delivered";
                                                                    }
                                                                    
                                                                    ?>
                                                                    </strong>
                                                                  </th> -->
                                                    <td class="total text-center">
                                                        <a
                                                            href="<?php echo base_url('User/adminorderdetail/').$rows->order_id;?>">
                                                            <button onclick="count_sub(<?php echo $rows->order_id;?>);"
                                                                id="subs" class="btn btn-warning decrease arrow"
                                                                type="button" title="View Order Details">
                                                                <span class="lnr lnr-chevron-down"> View Detail
                                                                </span></button></a>
                                                        <!-- ////////////////// -->
                                                        <!-- <a class="dropdown active" class="dropdown">
                                                            <a href="javascript:;"
                                                                class="dropdown-toggle btn btn-success"
                                                                data-toggle="dropdown"> <i
                                                                    class="icon-long-arrow-down active"></i><span>ORDER</span>
                                                                <b class="caret"></b></a>
                                                            <ul class="dropdown-menu ">
                                                                <a class='btn btn-success'
                                                                    href="<?php echo base_url('Admin/confirm_order/').$rows->order_id;?>">Confirmed</a>
                                                                <a class='btn btn-danger'
                                                                    href="<?php echo base_url('Admin/cancelled_order/').$rows->order_id;?>">Cancelled</a>
                                                                <a class='btn btn-primary'
                                                                    href="<?php echo base_url('Admin/shipped_order/').$rows->order_id;?>">Delivered
                                                                </a>
                                                        </a> -->

                                                        <!-- ////////////// -->
                                                    </td>

                                                </tr>
                                                <?php       
                                                 } 
                                              
                                                 ?>

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