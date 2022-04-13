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
    <link rel="stylesheet" href="css/customers.css">
    <title>Customer | SuitSHOP</title>
</head>
<body>
<div id="mySidenav" class="sidenav">
	<p class="logo"><span>E-</span>SuitSHOP</p>
  <a href="dashboard.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="customer.php"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Customers</a>
  <a href="administration.php"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Administration</a>
  <a href="#"class="icon-a"><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;Orders</a>
  <a href="#"class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Cart</a>
  <a href="admin.php"class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;Home View</a>
  <!-- <a href="#"class="icon-a"><i class="fa fa-list-alt icons"></i> &nbsp;&nbsp;Tasks</a> -->
</div>
<?php
$select=$bdd->query("SELECT * FROM user ORDER BY id_user");
?>
<section class="section_table">
    <h1 class="h1title1">Customers</h1>
    <table class="table1">
        <thead class="thead1">
            <tr>
                <th class="th1">FirstName</th>
                <th class="th1">LastName</th>
                <th class="th1">Email</th>
                <th class="th1">Password</th>
            </tr>
        </thead>
        <?php
        while($data=$select->fetch()){
        ?>
        <tbody class="tbody1">
            <tr>
                <td class="td1"><?php echo $data['nom_user']?></td>
                <td class="td1"><?php echo $data['prenom_user']?></td>
                <td class="td1"><?php echo $data['email_user']?></td>
                <td class="td1"><?php echo $data['password']?></td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
</section>
</body>
</html>