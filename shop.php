<?php
session_start();
include("db.php");
if(isset($_POST['search'])){
     $value=$_POST['categorie'];
     $query="SELECT * FROM produit WHERE id_Cat=".$value."";
     $search_result=filter($query);
}
else{
     $query="SELECT * FROM produit";
     $search_result=filter($query);
}
function filter($query){
     include("db.php");
     $filter_result=$bdd->query($query);
     return $filter_result;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/shops.css">
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
               <?php
               if(isset($_SESSION['name']) && !empty($_SESSION['name'])){
               ?>
               <a href="#" class="session"><?php echo $_SESSION['name'];?></a>
               <a href="logout.php"><img src="images/shutdown_20px.png" alt="image non disponible"></a>
              <?php
               }else{
                   ?>
                   <a href="login.php">My Account</a>
                   <?php
               }
               ?>
          </nav>
          <?php
            if(isset($_SESSION['name']) && !empty($_SESSION['name'])){
                $select_row=$bdd->query("SELECT * FROM cart");
                $row=$select_row->rowCount();?>
            <div id="menu-btn" class="fas fa-bars"></div>
          <a href="cart.php" class="btn"><img src="images/cart.png" alt="image non disponible" id="cart"> <span><?php echo $row;?></span></a>
          <?php
            }else{?>
            <div id="menu-btn" class="fas fa-bars"></div>
          <a href="cart.php" class="btn"><img src="images/cart.png" alt="image non disponible" id="cart"> <span>0</span></a>
        <?php
            }
                
            ?>
             </header>
   <aside>
    <div class="quick-links">
        <h3 class="title">Categories</h3>
        <form  action="shop.php" method="POST">
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
//$select=$bdd->query("SELECT * FROM produit ORDER BY id_pro");

?>
    <div class="parent">
    <?php
    while($dataselect=$search_result->fetch()){?>

     <!-- //  echo "  <div class='div1'>";
        
     //    echo "<img src='image/".$dataselect['photo']."' class='img-div1' alt='image non disponible'>";
     //            echo "<h3 class='h3-div1'>".$dataselect['nom_pro']."</h3>";
     //            echo "<h2 class='h2-div1'>".$dataselect['prix']."/piece</h2>";
     //          echo"  <a href='#' class='comment'>Commentaire</a>
     //            <a href='#' class='a-div1'>Add Cart</a>";
                
     //    echo "</div>";  -->
     <div class="div1">
          <img src="admin/image/<?php echo $dataselect['photo']?>" alt="image non disponible" class="img-div1">
          <h3 class='h3-div1'><?php echo $dataselect['nom_pro']?></h3>
          <h2 class='h2-div1'><?php echo $dataselect['prix']?>/piece</h2>
          <?php
               if(isset($_SESSION['name']) && !empty($_SESSION['name'])){
               ?>
                <input type="hidden" name="nomprod" value="<?php echo $dataselect['nom_pro'];?>">
               <input type="hidden" name="prixpro" value="<?php echo $dataselect['prix'];?>">
               <input type="hidden" name="imagepro" value="<?php echo $dataselect['photo'];?>">
               <input type="submit" value="Add to Cart" name="add_to_cart" class="add-btn">
               <?php
               }else{
                   ?>
                   <a href="login.php" class="comment">Add to Cart</a>
                   <?php
               }
               ?>
          <!-- <a href="#" class="comment">Add To Cart</a> -->
          <a href="details.php?det=<?php echo $dataselect['id_pro'];?>" class="a-div1">Details</a>
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
<script src="js/main.js"></script>
<?php
include("livechat.php");
?>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $mail=$_POST['text'];
    $insert=$bdd->prepare("INSERT INTO subscribers(mail_sub)VALUES(?)");
    $insert->execute(array($mail));
}
?>