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
    <link rel="stylesheet" href="css/cartlosse.css">
    <title>Cart Loss  | FashionSHOP</title>
</head>
<body>
    <!-- header section starts -->
 <header class="header">
          <a href="#" class="logo"><i class="fas fa-splotch"></i> FashionSHOP</a>
          <nav class="navbar">
              <a href="dashboard.php">Dashboard</a>
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
     <?php
     if(isset($_GET['restore'])){
         $idtorestore=$_GET['restore'];
         $restore=$bdd->query("INSERT INTO cart(nomprod,prixprod,photoprod,Quantite,user)SELECT nomprod,prixprod,photoprod,Quantite,user FROM cartloss WHERE id_cart='$idtorestore'");
         $delete=$bdd->query("DELETE FROM cartloss WHERE id_cart=$idtorestore");
     }
     if(isset($_GET['sup'])){
         $idtodelete=$_GET['sup'];
         $delet=$bdd->query("DELETE FROM cartloss WHERE id_cart=$idtodelete");
     }
     ?>
     <section class="section12">
         <h1 class="title0">Cart Loss</h1>
         <table>
             <thead class="thead">
                 <tr>
                     <th class="th">Images</th>
                     <th class="th">Name Product</th>
                     <th class="th">Price</th>
                     <th class="th">Quantity</th>
                     <th class="th" colspan="2">Action</th>
                 </tr>
             </thead>
             <tbody class="tbody">
                 <?php
                 $select=$bdd->query("SELECT * FROM cartloss ORDER BY id_cart");
                 while($data=$select->fetch()){
                 ?>
                 <tr>
                     <td class="td"><img src="image/<?php echo $data['photoprod']?>" alt="image non disponible"></td>
                     <td class="td"><?php echo $data['nomprod']?></td>
                     <td class="td"><?php echo $data['prixprod']?></td>
                     <td class="td"><?php echo $data['Quantite']?></td>
                     <td class="td"><a href="cartloss.php?restore=<?php echo $data['id_cart']?>">Restore</a></td>
                     <td class="td"><a href="cartloss.php?sup=<?php echo $data['id_cart']?>">Delete</a></td>
                 </tr>
                 <?php
                 }
                 ?>
             </tbody>
         </table>
     </section>
     <footer>
     <div class="footer-container">
          <div class="footer-box1">
               <h3 class="h3-ttle">SuitSHOP</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque quos quas, dolore architecto iure illo voluptatum sequi suscipit facere quod soluta .</p>
          </div>
          <div class="footer-box2">
               <h3 class="h3-ttle">Shopping</h3>
               <ul>
                    <li>clothing store</li>
                    <li>Treding suit</li>
                    <li>accessories</li>
                    <li>Sale</li>
               </ul>
          </div>
          <div class="footer-box3">
               <h3 class="h3-ttle">Quick Links</h3>
               <ul>
                    <li>Contact Us</li>
                    <li>Payment Method</li>
                    <li>Delivery</li>
                    <li>Return & Exchange</li>
               </ul>
          </div>
          <div class="footer-box4">
               <h3 class="h3-ttle">NewsLetter</h3>
               <p class="p-form">Be the first to know about new arrivals, look books, sales & promos!</p>
               <form action="" method="post">
                    <input type="text" name="text" placeholder="Enter your email..." id="inpt-txt">
                    <input type="submit" value="Send" name="submit" id="submit-btn">
               </form>
          </div>
     </div>
     <p class="copy">&copy 2022 All Right Reserved | </p>
</footer>
    
</body>
</html>