<?php
include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/shop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Shop | FashionSHOP</title>
</head>
<body>
<header class="header">
          <a href="#" class="logo"><i class="fas fa-splotch"></i> FashionSHOP</a>
          <nav class="navbar">
               <a href="index.php">Home</a>
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
          <a href="cart.php" class="btn"><img src="images/cart.png" alt="image non disponible" id="cart"> <span><?php echo $row;?></span></a>
     </header>
   <aside>
    <div class="quick-links">
        <h3 class="title">Categories</h3>
        <form  method="post">
             <select name="categorie" class="cat-select">
                  <option value="">--Category--</option>
                  <?php 
                         
                         $reponse=$bdd->query("SELECT id_cat,nom_cat FROM categorie");
                         while($data=$reponse->fetch()){
                             ?>
                             
                             <option value="<?php echo $data["id_cat"]?>"><?php echo $data["nom_cat"]?></option>
                             <?php
                         }
                         ?>
             </select>
             <input type="submit" name="search" value="Search" class="search-btn">
        </form>
        <!-- <ul class="ule-links">

            <li class="li-links"><a href="#" class="links">Suit</a></li>
            <li class="li-links"><a href="#" class="links">Jacket</a></li>
            <li class="li-links"><a href="#" class="links">Trousers</a></li>
            <li class="li-links"><a href="#" class="links">T-Shirt</a></li>
            <li class="li-links"><a href="#" class="links">Bags</a></li>
            <li class="li-links"><a href="#" class="links">Shoes</a></li>
        </ul> -->
    </div>

   </aside>
   <section class="shop">
       <h1 class="title-shop">Our Shop</h1>
       <?php 
$select=$bdd->query("SELECT * FROM produit ORDER BY id_pro");

?>
    <div class="parent">
    <?php
    while($dataselect=$select->fetch()){?>

     <!-- //  echo "  <div class='div1'>";
        
     //    echo "<img src='image/".$dataselect['photo']."' class='img-div1' alt='image non disponible'>";
     //            echo "<h3 class='h3-div1'>".$dataselect['nom_pro']."</h3>";
     //            echo "<h2 class='h2-div1'>".$dataselect['prix']."/piece</h2>";
     //          echo"  <a href='#' class='comment'>Commentaire</a>
     //            <a href='#' class='a-div1'>Add Cart</a>";
                
     //    echo "</div>";  -->
     <div class="div1">
          <img src="image/<?php echo $dataselect['photo']?>" alt="image non disponible" class="img-div1">
          <h3 class='h3-div1'><?php echo $dataselect['nom_pro']?></h3>
          <h2 class='h2-div1'><?php echo $dataselect['prix']?>/piece</h2>
          <a href="#" class="comment">Add To Cart</a>
          <a href="#" class="a-div1">Details</a>
     </div>
       <?php 
}
         ?>
        </div>
   </section>
   <footer>
    <div class="footer-container">
         <div class="footer-box1">
              <h3 class="h3-ttle">FashionSHOP</h3>
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
                   <input type="submit" value="Send" id="submit-btn">
              </form>
         </div>
    </div>
    <p class="copy">&copy 2022 All Right Reserved | </p>
</footer>
<?php
include("livechat.php");
?>
</body>
</html>