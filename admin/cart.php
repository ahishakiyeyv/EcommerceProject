<?php
include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/carts.css">
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

        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="#" class="btn">Cart <span>0</span></a>
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
                
                $grandTotal=0;
                While($data=$select->fetch()){
               ?>
                    <tr>
                        <td><img src="image/<?php echo $data['photoprod']?>" alt="Image non disponible" class="img-cart"></td>
                        <td><?php echo $data['nomprod']?></td>
                        <td>
                        <form method="post">
                        <input type="hidden" name="update_quantity_id" min="1" value="<?php echo $data['id_cart']?>">
                            <input type="number" name="update_quantity" min="1" value="<?php echo $data['Quantite']?>">
                            <input type="submit" value="Update" name="btn_update">
                        </form>    
                        </td>
                        <td><?php echo $data['prixprod']?></td>
                        <td><?php echo $tot = number_format($data['prixprod'] * $data['Quantite']);?></td>
                        <td><a href="#">Delete</a></td>
                    </tr>
                        <?php $grandTotal += $tot;?>
               <?php
               
                }
               ?>
               <tr>
                   <td>Total:</td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td><?php echo $grandTotal?></td>
                   <td></td>
               </tr>
           </tbody>
       </table>
   </section>
</body>
</html>