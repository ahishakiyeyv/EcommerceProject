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
    <link rel="stylesheet" href="css/administratione.css">
    <title>Administration | SuitSHOP</title>
</head>
<body>
<div id="mySidenav" class="sidenav">
	<p class="logo"><span>E-</span>SuitSHOP</p>
  <a href="#" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="#"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Customers</a>
  <a href="#"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Projects</a>
  <a href="#"class="icon-a"><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;Orders</a>
  <a href="#"class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Inventory</a>
  <a href="#"class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;Accounts</a>
  <!-- <a href="#"class="icon-a"><i class="fa fa-list-alt icons"></i> &nbsp;&nbsp;Tasks</a> -->
</div>
<section class="admin">
    <h1 class="title1">Administration Panel</h1>
    <div class="admin-link">
        <a href="#" class="a-link">Products</a>
        <a href="#" class="a-link">Category</a>
        <a href="#" class="a-link">Stock</a>
        <a href="administrator.php" class="a-link">Administrator</a>
    </div>
</section>
<section class="recup-admin">
    <h1 class="title2">NewsLetter Subscribers</h1>
    <table class="table2">
        <thead class="thead2">
            <tr>
                <th class="th2">Id</th>
                <th class="th2">Email</th>
                <th class="th2">Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
$select=$bdd->query("SELECT * FROM subscribers ORDER BY id_sub");
while($data=$select->fetch()){
?>
            <tr>
                <td class="td2"><?php echo $data["id_sub"]?></td>
                <td class="td2"><?php echo $data["mail_sub"]?></td>
                <td class="td2"><a href="#" class="td2-link">Activer</a></td>
            </tr>
           <?php
           }
           ?>
        </tbody>
    </table>
</section>
</body>
</html>