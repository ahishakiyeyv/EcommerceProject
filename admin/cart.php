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
    $remove=$bdd->exec("DELETE FROM cart WHERE id_cart='$idtodelete'");
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
                
                $tot=0;
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
                        <td><?php echo $tot1 = number_format($data['prixprod'] * $data['Quantite']);?>Fbu</td>
                        <td><a href="cart.php?sup=<?php echo $data['id_cart'];?>" onclick="return confirm('Delete item from the cart')" class="remove_btn">Remove</a></td>
                    </tr>
                        <?php $grandTotal = $tot += $tot1;?>
               <?php
               
                }
               ?>
               <tr>
                   <td>Total:</td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td><?php echo $grandTotal?></td>
                   <td><a href="cart.php?delete" onclick="return confirm('Are you sure you want to delete all ?');" class="deleteAll_btn">Delete All</a></td>
               </tr>
           </tbody>
       </table>
       <div class="order_btn">
           <a href="order.php" class="btn <?= ($grandTotal > 1)?'':'disabled'?>">Order Now</a>
       </div>
   </section>
</body>
</html>