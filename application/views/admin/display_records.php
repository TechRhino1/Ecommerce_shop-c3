
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
                                                    <th>Sr No</th>
                                                    <th>Title </th>
                                                    <th>image</th>
                                                    <th>discription</th>
                                                    <th>price</th>
                                                    <th>quantity</th>
                                                    
                                                 <th>Action</th>
                                                </tr>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i=1;
                                            foreach ($data as $row) {
                                                
                                           ?>
                                                <tr class="odd gradeX">
                                                <td><?php echo $i; ?></td>
                                                    <td><?php echo $row->title; ?></td>
                                                    <td><img class="img circle"
                                                            src="<?=base_url('uploads/'.$row->image)?>"
                                                            style="width: 50px; height: 50px;border-radius:50%;"></td>
                                                    <td><?php echo $row->discription; ?></td>
                                                    <td><?php echo $row->price; ?></td>
                                                    <td><?php echo $row->quantity; ?></td>
                                                    <!-- <td>
                                                        <a href="<1?='updatedata?id=".$row->id."'?>Update"><!?php echo $row['id']?-->
                                                        <!-- <input id="edit" type="submit" name="edit" value="Edit" -->
                                                                <!-- class="btn btn-success" /></a> -->
                                                        <!-- <a href="<1?=base_url('admin/deleteproduct[id]')?>"
                                                        
                                                            onclick="return confirm('Are you sure to delete this record?')">
                                                            <input id="delete" type="submit" name="delete"
                                                                value="Delete" class="btn btn-danger" /></a> -->
                                                    <!-- </td>  -->
                                                <!-- </tr> -->
                                                   <?php
                                                   echo" <td>
                                                        <a href='updatedata?id=".$row->id."'>
                                                        <input id='edit' type='submit' name='edit' value='Edit'
                                                                class='btn btn-success' /></a>
                                                         <a href='deletedata?id=".$row->id."'>
                                                        <input id='delete' type='submit' name='delete' value='delete'
                                                                        class='btn btn-danger' /></a>       
                                                        </td> ";
                                                      
                                                   
                                             echo   "</tr>";
                                               $i++;
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
