<?php
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Custom css link -->
    <link rel="stylesheet" href="css/details.css">
     <!-- font awesome cdn link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Details | FashionSHOP</title>
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
               <a href="login.php">My Account</a>
          </nav>
            <?php
                $select_row=$bdd->query("SELECT * FROM cart");
                $row=$select_row->rowCount();
            ?>
          <div id="menu-btn" class="fas fa-bars"></div>
          <a href="cart.php" class="btn">Cart <span><?php echo $row;?></span></a>
     </header>
     <!-- header section ends -->
</body>
</html>