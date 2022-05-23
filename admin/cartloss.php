<?php
session_start();
include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cartloss.css">
    <title>Cart Loss  | FashionSHOP</title>
</head>
<body>
    <!-- header section starts -->
 <header class="header">
          <a href="#" class="logo"><i class="fas fa-splotch"></i> FashionSHOP</a>
          <nav class="navbar">
               <a href="accueil.php">Home</a>
               <a href="shop.php">Shop</a>
               <a href="about.php">About</a>
               <a href="contact.php">Contact</a>
               <?php
               if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
               ?>
               <a href="#"><?php echo $_SESSION['username']?></a>
                <a href="logout.php"><img src="images/shutdown_20px.png" alt="image non disponible"> </a> 
               <?php
               }else{
                   ?>
                   <a href="login.php">My Account</a>
                   <?php
               }
               ?>
          </nav>
            <?php
                $select_row=$bdd->query("SELECT * FROM cart");
                $row=$select_row->rowCount();
            ?>
          <div id="menu-btn" class="fas fa-bars"></div>
          <a href="cart.php" class="btn"><img src="images/cart.png" alt="image non disponible" id="cart"> <span><?php echo $row;?></span></a>
     </header>
     <!-- header section ends -->
     <section class="section12">
         <h1 class="title0">Cart Loss</h1>
         <table>
             <thead>
                 <tr>
                     <th>Images</th>
                     <th>Name Product</th>
                     <th>Price</th>
                     <th>Quantity</th>
                     <th>Action</th>
                 </tr>
             </thead>
             <tbody>
                 <?php
                 $select=$bdd->query("SELECT * FROM cartloss ORDER BY id_cart");
                 while($data=$select->fetch()){
                 ?>
                 <tr>
                     <td><img src="image/<?php echo $data['photoprod']?>" alt="image non disponible"></td>
                     <td><?php echo $data['nomprod']?></td>
                     <td><?php echo $data['prixprod']?></td>
                     <td><?php echo $data['Quantite']?></td>
                     <td><a href="#">Recover</a></td>
                 </tr>
                 <?php
                 }
                 ?>
             </tbody>
         </table>
     </section>
    
</body>
</html>