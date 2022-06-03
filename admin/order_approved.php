<?php
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/orderrecoverys.css">
    <title>Order Approved | FashionSHOP</title>
</head>
<body>
<div id="mySidenav" class="sidenav">
	<p class="logo"><span>Fashion</span>SHOP</p>
  <a href="dashboard.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="customer.php"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Customers</a>
  <a href="administration.php"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Administration</a>
  <a href="orderrecovery.php"class="icon-a"><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;Orders</a>
  <a href="cart.php"class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Cart</a>
  <a href="admin.php"class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;Home View</a>
  <!-- <a href="#"class="icon-a"><i class="fa fa-list-alt icons"></i> &nbsp;&nbsp;Tasks</a> -->
</div>
   <section class="recovery">
       <h1 class="title">Order Approved</h1>
       <div class="contain">
       <?php
    //    if(isset($_GET['approve'])){
    //     $idtoapprove=$_GET['restore'];
    //     $restore=$bdd->query("INSERT INTO orderapproved(name_order,email_order,phone_order,city,commune,street,total_product,total_price)SELECT name_order,email_order,phone_order,city,commune,street,total_product,total_price FROM orders WHERE id_order='$idtoapprove'");
    //     $delete=$bdd->query("DELETE FROM orders WHERE id_order=$idtoapprove");
    // }
    $select=$bdd->query("SELECT * FROM orderapproved ORDER BY id_order DESC");
           while($data=$select->fetch()){
           ?>
       <div class="recov-container">
           <p class="content">Name: <span><?php echo $data['name_order']?></span></p>
           <p class="content">Email: <span><?php echo $data['email_order']?></span></p>
           <p class="content">Phone: <span><?php echo $data['phone_order']?></span></p>
           <div class="addrese">
               <p class="p-addrese">City: <span><?php echo $data['city']?></span></p>
               <p class="p-addrese">Commune: <span><?php echo $data['commune']?></span></p>
               <p class="p-addrese">Street: <span><?php echo $data['street']?></span></p>
           </div>
           <div class="total">
               <p class="p-total">All product: <span><?php echo $data['total_product']?></span></p>
               <p class="p-total">Total Price: <span><?php echo $data['total_price']?></span></p>
             
           </div>
           <!-- <a href="#" class="btn-aprove">Approve</a> -->
       </div>
       
       <?php
           }
               ?>
               </div>
   </section>
<?php
include("livechat.php");
?>
</body>
</html>