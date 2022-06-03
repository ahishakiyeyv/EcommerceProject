<?php
include("db.php");
session_start();
$select=$bdd->query("SELECT count(id_user) as Nombre FROM user");
$selectuser=$select->fetch();
$selectorder=$bdd->query("SELECT count(id_order)AS Nombre FROM orders");
$selectOrders=$selectorder->fetch();
$selectproduct=$bdd->query("SELECT count(id_pro)AS Nombre FROM produit");
$product=$selectproduct->fetch();
$selectCategory=$bdd->query("SELECT count(id_cat)AS Nombre FROM categorie");
$category=$selectCategory->fetch();
?>
<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/dashboards.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Dashboard | FashionSHOP</title>
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
<div id="main">

	<div class="head">
		<div class="col-div-6">
<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; Dashboard</span>
<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >&#9776; Dashboard</span>
</div>
	
	<div class="col-div-6">
	<div class="profile">

		<img src="images/200.jpg" class="pro-img" />
		<p><?php echo $_SESSION['username'];?><span>ADMIN</span></p>
		<p class="log"><a href="logout.php"><img src="images/shutdown_20px.png" alt="image non disponible"></a></p>
	</div>
</div>
	<div class="clearfix"></div>
</div>

	<div class="clearfix"></div>
	<br/>
	
	<div class="col-div-3">
		<div class="box">
			<p><?php echo $selectuser['Nombre'] ?><br/><span>Customers</span></p>
			<i class="fa fa-users box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p><?php echo $product['Nombre'];?><br/><span>Products</span></p>
			<i class="fa fa-list box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p><?php echo $selectOrders['Nombre'];?><br/><span>Orders</span></p>
			<i class="fa fa-shopping-bag box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p><?php echo $category['Nombre'];?><br/><span>Category</span></p>
			<i class="fa fa-tasks box-icon"></i>
		</div>
	</div>
	<div class="clearfix"></div>
	<br/><br/>
	<div class="col-div-8">
		<div class="box-8">
		<div class="content-box">
			<p>Administrator <span>See All</span></p>
			<br/>
			<table>
  <tr>
    <th>Id</th>
    <th>Username</th>
    <th>Email</th>
  </tr>
  <?php
      $selectAdmin=$bdd->query("SELECT * FROM administrator ORDER BY id_admin");
      while($dataAdmin=$selectAdmin->fetch()){
      ?>
  <tr>
    <td><?php echo $dataAdmin['id_admin'];?></td>
    <td><?php echo $dataAdmin['username'];?></td>
    <td><?php echo $dataAdmin['email_admin'];?></td>
  </tr>
  <?php
      }
  ?>

</table>
		</div>
	</div>
	</div>

	<div class="col-div-4">
		<div class="box-4">
		<div class="content-box">
			<p>Total Sale <span>See All</span></p>

			<div class="circle-wrap">
    <div class="circle">
      <div class="mask full">
        <div class="fill"></div>
      </div>
      <div class="mask half">
        <div class="fill"></div>
      </div>
      <div class="inside-circle"> 70% </div>
    </div>
  </div>
		</div>
	</div>
	</div>
		
	<div class="clearfix"></div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

  $(".nav").click(function(){
    $("#mySidenav").css('width','70px');
    $("#main").css('margin-left','70px');
    $(".logo").css('visibility', 'hidden');
    $(".logo span").css('visibility', 'visible');
     $(".logo span").css('margin-left', '-10px');
     $(".icon-a").css('visibility', 'hidden');
     $(".icons").css('visibility', 'visible');
     $(".icons").css('margin-left', '-8px');
      $(".nav").css('display','none');
      $(".nav2").css('display','block');
  });

$(".nav2").click(function(){
    $("#mySidenav").css('width','300px');
    $("#main").css('margin-left','300px');
    $(".logo").css('visibility', 'visible');
     $(".icon-a").css('visibility', 'visible');
     $(".icons").css('visibility', 'visible');
     $(".nav").css('display','block');
      $(".nav2").css('display','none');
 });

</script>

</body>


</html>
