<?php
include("check.php");
?>
<?php
include("header.php");

include("connect.php");



if(isset($_POST['btn']))
{

  $today = date("Y-m-d h:i:sa");
echo "Current date and time is ".$today;


  $sql="insert into products(name,quantity,buy_price,sale_price,categorie_id,media_id,date)values('".$_POST['name']."','".$_POST['quantity']."','".$_POST['buy_price']."','".$_POST['sale_price']."','".$_POST['categorie_id']."','".$_POST['media_id']."','". $today."')";
  if($conn->query($sql)==TRUE)
  {
    echo"Record Inserted Sucessfully ";?>
    
    <script>window.location='product.php';</script>
  <?php
  }else
  {
    echo "Something Wrong" . $conn->error;
  }
 
}
$details = array();
if(isset($_GET['id']) && !empty($_GET['id'])){
  $query = $conn->query("SELECT * FROM products where id = {$_GET['id']} ");
  foreach($query->fetch_array() as $k=>$v){
    $details[$k] = $v;
  }
}
?>

<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-header">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<div class="d-inline">
<h4>Products</h4>


</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href=""> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item"><a>Products</a>
</li>
<li class="breadcrumb-item"><a href="">Products</a>
</li>
</ul>
</div>
</div>
</div>
</div>

<div class="page-body">

<div class="card">
<div class="card-block">
<form  method="POST" action='editproduct2.php' enctype="multipart/form-data">

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                           <h1> Edit Product</h1> 
                        </div>
                  
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                          
                                            <form role="form">
                                              <div class="row">
                                                    <div class="col-lg-6">


                                                <div class="form-group">
                                                    <label>Product Name</label>
                                                    <input class="form-control"name="name" placeholder="Enter Product Name" value="<?php echo isset($details['name']) ? $details['name'] : '' ?>" required>
                                                    
                                                </div>
                                              </div>
                                             
                                                <div class="col-lg-6">
                                                <div class="form-group">
                                                <label for=" Products">Select Category</label>
    <select  name="categorie_id" required class="form-control" id="categorie_id">
<?php
     $sql = ("SELECT * FROM  categories  where delete_status=0 ");
     $result = mysqli_query($conn, $sql);
     echo "<option value=''>Select</option>";
 while ($row = mysqli_fetch_assoc($result)){ ?>
        <option value="<?php echo $row['id']; ?>" <?php echo isset($details['categorie_id']) && $details['categorie_id'] == $row['id'] ? "selected" : '' ?>><?php echo $row['name']; ?></option>";
      <?php } ?>

                        
?></select></div></div>
 <div class="col-lg-6">
                                                <div class="form-group">
                                                <label for="media">Select Product Photo </label>
    <select  name="media_id" required class="form-control" id="media_id">
<?php
     $sql = ("SELECT * FROM  media  where delete_status=0 ");
     $result = mysqli_query($conn, $sql);
     echo "<option value=''>Select</option>";
 while ($row = mysqli_fetch_assoc($result)){ ?>
        <option value="<?php echo $row['id']; ?>" <?php echo isset($details['media_id']) && $details['media_id'] == $row['id'] ? "selected" : '' ?>><?php echo $row['file_name']; ?></option>";
      <?php } ?>

                        
?></select></div></div>
                                                <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Quantity</label>
                                                    <input class="form-control"name="quantity" placeholder="Enter Quantity"  value="<?php echo isset($details['quantity']) ? $details['quantity'] : '' ?>" required>
                                                  </div>  
                                                </div>
                                                <div class="col-lg-6">
                                                 <div class="form-group">
                                                    <label>Buying Price</label>
                                                    <input class="form-control"  value="<?php echo isset($details['buy_price']) ? $details['buy_price'] : '' ?>"  name="buy_price">
                                                </div>
                                                </div>
                                                
                                              
                                                   <div class="col-lg-6">
                                                 <div class="form-group">
                                                    <label>Sale Price</label>
                                                    <input  class="form-control"  value="<?php echo isset($details['sale_price']) ? $details['sale_price'] : '' ?>"  name="sale_price">
                                                </div>
                                                </div>
                                                
                                               <div class="col-lg-12">
                                <div class="form-group">
                                       <center>  <button type="submit" class="btn btn-success" name="btn">Submit</button></center></div></div>
                                        </div> 
                                      </div>
                                              
                             </form>
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
<?php include("footer.php"); ?>

<!--  Author Name: Nikhil Bhalerao - www.nikhilbhalerao.com 
PHP, Laravel and Codeignitor Developer -->