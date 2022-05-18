

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
<h4 class="ff">User Data </h4>


</div>
</div>
</div>
</div>
</div>

<div class="page-body">

<div class="card">
<div class="card-header">
    <div class="col-sm-12">
        <!-- <a href="<?=base_url('home/add_item')?>"><button class="btn btn-primary pull-right">+ Add New</button></a> -->
    </div>

</div>

<div class="row">
  <!-- <div class="col-12"> -->
<div class="card-block col-sm-12">

<div class="table-responsive dt-responsive">
<table id="dom-jqry" class="table table-striped table-bordered nowrap">
<thead>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <!-- <th>Password</th> -->
                    <th>E-mail</th>
                    <!-- <th>Status</th> -->
                    <!-- <th>Last Login</th> -->
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

<?php
$i=1;

foreach ($data as $row) 
{
     
    ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $row->first_name; ?></td>
        <td><?php echo $row->last_name; ?></td>
        <!-- <td><?php echo $row->password; ?></td> -->
        <td><?php echo $row->email; ?></td>
        <!-- <td><1?php if($row['status']==1){
        echo "Active";  
        }else{ echo "Deactive"; }
        ?></td> -->
        <!-- <td><1?php echo  $row['last_login']; ?></td> -->
        <!-- <td>     -->
            <!-- <a href="edituser.php?id=<1?php echo $row['id']?>"><input id="edit" type="submit" name="edit" value="Edit" class="btn btn-success"/></a> -->
          <!-- <a href="deleteuser.php?id=<1?php echo $row['id']?>" onclick="return confirm('Are you sure to delete this record?')">  <input id="delete" type="submit" name="delete" value="Delete" class="btn btn-danger" /></a> -->
          <?php
         echo" <td>
              <a href='deleteuser?id=".$row->id."'>
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
<!-- </div> -->
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

