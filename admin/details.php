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

     <section class="section-details">
         <h1 class="titleDetails">Details</h1>
         <div class="container-details">
             <div class="img-details">
                <img src="image/<?php echo $data['photo'];?>" alt="image non disponible" class="img1">
             </div>
             <div class="desc-details">
                    <h2 class="titledesc">T-shirt</h2>
                    <h3 class="stitle">New Arrival</h3>
                    <div class="rating">
                        <span class="fa fa-star fa-2x checked"></span>
                        <span class="fa fa-star fa-2x checked"></span>
                        <span class="fa fa-star fa-2x checked"></span>
                        <span class="fa fa-star fa-2x"></span>
                        <span class="fa fa-star fa-2x"></span>
                    </div>
                    <p class="para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem assumenda doloremque illo reiciendis rem aperiam dolores quis, asperiores obcaecati, commodi et iure distinctio voluptas laudantium laboriosam deleniti minima totam eveniet.</p>
                    <h2 class="prix">105000 fbu</h2>
                    <div class="icon">
                        <a href="#" class="btn-add">Add to Cart</a>
                        <a href="#" class="like">Like</a>
                    </div>
                    <div class="avis">
                        <form  method="post">
                            <textarea name="" id="" cols="60" rows="3"></textarea><br>
                            <input type="submit" value="Commenter" class="btn-submit">
                        </form>
                    </div>
             </div>
         </div>
     </section>
</body>
</html>