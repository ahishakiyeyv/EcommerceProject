<?php
include("db.php");
if(isset($_POST["btn_update"])){
    $update_value=$_POST["update_quantity"];
    $update_id=$_POST["update_quantity_id"];
    $updateQuery=$bdd->exec("UPDATE cart SET Quantite ='$update_value' WHERE id_cart ='$update_id'");
    if($updateQuery){
        header("location:cart.php");
    }
};
if(isset($_GET['sup'])){
    $idtodelete=$_GET['sup'];
    $remove=$bdd->query("INSERT INTO cartloss(nomprod,prixprod,photoprod,Quantite)SELECT nomprod,prixprod,photoprod,Quantite FROM cart WHERE id_cart='$idtodelete'");
    $deletecart=$bdd->exec("DELETE FROM cart WHERE id_cart=$idtodelete");
    header("location:cart.php");
};
if(isset($_GET['delete'])){
    $delete=$bdd->exec("DELETE FROM cart");
    header("location:cart.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cart.css">
    <title>Cart | SuitSHOP</title>
</head>
<body>
    <header class="header">
        <a href="#" class="logo"><i class="fas fa-splotch"></i> SuitSHOP</a>
        <nav class="navbar">
            <a href="dashboard.php">Dashboard</a>
             <a href="accueil.php">Home</a>
             <a href="shop.php">Shop</a>
             <a href="about.php">About</a>
             <a href="login.php">My Account</a>
        </nav>
        <?php
                $select_row=$bdd->query("SELECT * FROM cart");
                $row=$select_row->rowCount();
            ?>
          <div id="menu-btn" class="fas fa-bars"></div>
          <a href="#" class="btn">Cart <span><?php echo $row;?></span></a>
   </header>
   <section class="section_1">
       <h1 class="title1">Shopping Cart</h1>
       <table class="table01">
           <thead class="thead01">
               <tr>
                   <th>Images</th>
                   <th>Product Name</th>
                   <th>Quantity</th>
                   <th>Price</th>
                   <th>Total</th>
                   <th>Actions</th>
               </tr>
           </thead>
           <tbody class="tbody01">
               <?php
                $select=$bdd->query("SELECT * FROM cart");
                (int)$grandTotal=0;
               (int) $tot=0;
                While($data=$select->fetch()){
               ?>
                    <tr>
                        <td><img src="image/<?php echo $data['photoprod']?>" alt="Image non disponible" class="img-cart"></td>
                        <td><?php echo $data['nomprod']?></td>
                        <td>
                        <form method="post">
                        <input type="hidden" name="update_quantity_id" value="<?php echo $data['id_cart']?>">
                            <input type="number" name="update_quantity" min="1" value="<?php echo $data['Quantite']?>">
                            <input type="submit" value="Update" name="btn_update">
                        </form>    
                        </td>
                        <td><?php echo $data['prixprod']?> Fbu</td>
                        <td><?php echo $tot = $data['prixprod'] * $data['Quantite'];?>Fbu</td>
                        <td><a href="cart.php?sup=<?php echo $data['id_cart'];?>" onclick="return confirm('Delete item from the cart')" class="remove_btn">Remove</a></td>
                    </tr>
                        <?php (int)$grandTotal +=   (int) $tot;?>
               <?php
               
                }
               ?>
               <tr>
                   <td class="td-tot">Total:</td>
                   <td class="td-tot"></td>
                   <td class="td-tot"></td>
                   <td class="td-tot"></td>
                   <td class="td-tot"><?php echo $grandTotal?>  Fbu</td>
                   <td class="td-tot"><a href="cart.php?delete" onclick="return confirm('Are you sure you want to delete all ?');" class="deleteAll_btn">Delete All</a></td>
               </tr>
           </tbody>
       </table>
       <div class="order_btn">
           <a href="order.php" class="btn <?= ($grandTotal > 1)?'':'disabled'?>">CheckOut</a>
       </div>
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