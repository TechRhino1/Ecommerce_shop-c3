<!-- ?php
include("check.php");
?>
<!?php
include("connect.php");
include("header.php");
$sql= "SELECT * from  products where delete_status='0'
ORDER BY id DESC";
$result=$conn->query($sql);
?> -->
<style>
/* .page-body{
    margin-top: 69px;
    margin-left: 20px;
  }
  .ff{
      margin-top: 69px;
    margin-left: 50px;} */
.card-header {
    padding: 0.75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgb(47 42 42 / 41%);
    border-bottom: 1px solid #ff0000;
}
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
                                            <h4 class="ff">Products</h4>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="page-body">
                            <div class="card">
                                <div class="card-header">
                                    <div class="col-sm-10">
                                        <a href="<?=base_url('home/add_item')?>"><button class="btn btn-primary pull-right">+ Add
                                                New</button></a>
                                    </div>

                                    
                                </div>
                                <div class="card-block">

                                    <div class="table-responsive dt-responsive">
                                        <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Product Image </th>
                                                    <th>Product Name</th>
                                                    <th>Instock</th>
                                                    <th>Buying Prize</th>
                                                    
                                                 <th>Action</th>
                                                </tr>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                <tr class="odd gradeX">
                                                    <td><?php echo $row['id']; ?></td>
                                                    <td><img class="img circle"
                                                            src="<?php echo base_url('res/user/images/t7.jpg')?>"
                                                            style="width: 50px; height: 50px;border-radius:50%;"></td>
                                                    <td><?php echo $row['name']; ?></td>
                                                    <td><?php echo $row['quantity']; ?></td>
                                                    <td><?php echo $row['buy_price']; ?></td>
                                                   
                                                   
                                                    <td>
                                                        <a href="<?=base_url('admin/editproduct[id]')?>"><!--=?php echo $row['id']?--><input
                                                                id="edit" type="submit" name="edit" value="Edit"
                                                                class="btn btn-success" /></a>
                                                        <a href="<?=base_url('admin/deleteproduct[id]')?>"
                                                        <?php echo $row['id']?>
                                                            onclick="return confirm('Are you sure to delete this record?')">
                                                            <input id="delete" type="submit" name="delete"
                                                                value="Delete" class="btn btn-danger" /></a>
                                                    </td> 
                                                </tr>
                                               

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
