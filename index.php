<?php
session_start();
include("db.php");
if(isset($_POST['add_to_cart'])){
    $prod_name=$_POST['nomprod'];
    $prod_prix=$_POST['prixpro'];
    $prod_photo=$_POST['imagepro'];
    $prod_quantite=1;

    $select=$bdd->query("SELECT * FROM cart WHERE nom_pro='$prod_name'");
    $data=$bdd->prepare($select);
    $data->execute(array($prod_name,$prod_prix,$prod_photo,$prod_quantite));
    $count=$data->rowCount();
    if($count > 0){
        echo "<script>alert('Product already existed')</script>";
    }else{
        $insert=$bdd->query("INSERT INTO cart(nomprod,prixprod,photoprod,Quantite)VALUES('$prod_name','$prod_prix','$prod_photo','$prod_quantite')");
        echo "<script>alert('Product added successfully')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Custom css link -->
     <link rel="stylesheet" href="css/style.css">
     <!-- font awesome cdn link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
     <title>Home | FashionSHOP</title>
</head>
<body> 
     <!-- header section starts -->
     <header class="header">
          <a href="#" class="logo"><i class="fas fa-splotch"></i> FashionSHOP</a>
          <nav class="navbar">
               <a href="index.php">Home</a>
               <a href="shop.php">Shop</a>
               <a href="about.php">About</a>
               <a href="contact.php">Contact</a>
               <?php
               if(isset($_SESSION['mail']) && !empty($_SESSION['mail'])){
               ?>
               <a href="#"><?php echo $_SESSION['mail']?></a>
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
                $select_row=$bdd->query("SELECT * FROM cart");
                $row=$select_row->rowCount();
            ?>
          <div id="menu-btn" class="fas fa-bars"></div>
          <a href="cart.php" class="btn"><img src="images/cart.png" alt="image non disponible" id="cart"> <span><?php echo $row;?></span></a>
     </header>
     <!-- header section ends -->

     <!-- home section starts -->
     <section class="home" id="home">
          <div class="image">
               <img src="images/3.jpg" alt="Image non disponible">
          </div>
          <div class="content">
               <h3><span class="line-down">Clothing</span> Collections 2022</h3>
               <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio ipsam eum aut sint dolorem quae. Quis reprehenderit dolore minus dolor quidem obcaecati in doloribus nam, inventore vero velit ducimus praesentium!</p>
               <a href="#" class="btn-index">Explore Now</a>
          </div>
     </section>

     <!-- home section ends -->

     <!-- section starts -->

     <section class="services" id="services">
          <h2 class="title-heading">Our Latest Product</h2>
          <span class="line"></span>
          <div class="container">
               <div class="row">
                   <div class="images">
                       <img src="images/24.jpg" alt="image non disponible">
                       <div class="details">
                           <h2>Red <span>Shoes</span></h2>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus tempora, debitis possimus voluptatum perspiciatis quaerat. Possimus vitae amet id ducimus, </p>
                           <div class="more">
                               <a href="#" class="read-more"><span>More</span></a>
                               <div class="icon-links">
                                   <a href="#"><i class="fa-solid fa-heart"></i></a>
                                   <a href="#"><i class="fa-solid fa-comment"></i></a>
                                   <a href="#"><i class="fa-solid fa-share-nodes"></i></a>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="images">
                       <img src="images/21.jpg" alt="image non disponible">
                       <div class="details">
                           <h2>New <span>Bag</span></h2>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus tempora, debitis possimus voluptatum perspiciatis quaerat. Possimus vitae amet id ducimus, </p>
                           <div class="more">
                               <a href="#" class="read-more"><span>More</span></a>
                               <div class="icon-links">
                                   <a href="#"><i class="fa-solid fa-heart"></i></a>
                                   <a href="#"><i class="fa-solid fa-comment"></i></a>
                                   <a href="#"><i class="fa-solid fa-share-nodes"></i></a>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="images">
                    <img src="images/17.jpg" alt="image non disponible">
                    <div class="details">
                        <h2>T-<span>Shirt</span></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus tempora, debitis possimus voluptatum perspiciatis quaerat. Possimus vitae amet id ducimus, </p>
                        <div class="more">
                            <a href="#" class="read-more"><span>More</span></a>
                            <div class="icon-links">
                                <a href="#"><i class="fa-solid fa-heart"></i></a>
                                <a href="#"><i class="fa-solid fa-comment"></i></a>
                                <a href="#"><i class="fa-solid fa-share-nodes"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                   <div class="images">
                       <img src="images/29.jpg" alt="image non disponible">
                       <div class="details">
                           <h2>Your <span>Title</span></h2>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus tempora, debitis possimus voluptatum perspiciatis quaerat. Possimus vitae amet id ducimus, </p>
                           <div class="more">
                               <a href="#" class="read-more"><span>More</span></a>
                               <div class="icon-links">
                                   <a href="#"><i class="fa-solid fa-heart"></i></a>
                                   <a href="#"><i class="fa-solid fa-comment"></i></a>
                                   <a href="#"><i class="fa-solid fa-share-nodes"></i></a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

       <div class="row">
                   <div class="images">
                       <img src="images/12.jpg" alt="image non disponible">
                       <div class="details">
                           <h2>Your <span>Title</span></h2>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus tempora, debitis possimus voluptatum perspiciatis quaerat. Possimus vitae amet id ducimus, </p>
                           <div class="more">
                               <a href="#" class="read-more"><span>More</span></a>
                               <div class="icon-links">
                                   <a href="#"><i class="fa-solid fa-heart"></i></a>
                                   <a href="#"><i class="fa-solid fa-comment"></i></a>
                                   <a href="#"><i class="fa-solid fa-share-nodes"></i></a>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="images">
                       <img src="images/25.jpg" alt="image non disponible">
                       <div class="details">
                           <h2>Your <span>Title</span></h2>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus tempora, debitis possimus voluptatum perspiciatis quaerat. Possimus vitae amet id ducimus, </p>
                           <div class="more">
                               <a href="#" class="read-more"><span>More</span></a>
                               <div class="icon-links">
                                   <a href="#"><i class="fa-solid fa-heart"></i></a>
                                   <a href="#"><i class="fa-solid fa-comment"></i></a>
                                   <a href="#"><i class="fa-solid fa-share-nodes"></i></a>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="images">
                    <img src="images/17.jpg" alt="image non disponible">
                    <div class="details">
                        <h2>Your <span>Title</span></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus tempora, debitis possimus voluptatum perspiciatis quaerat. Possimus vitae amet id ducimus, </p>
                        <div class="more">
                            <a href="#" class="read-more"><span>More</span></a>
                            <div class="icon-links">
                                <a href="#"><i class="fa-solid fa-heart"></i></a>
                                <a href="#"><i class="fa-solid fa-comment"></i></a>
                                <a href="#"><i class="fa-solid fa-share-nodes"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                   <div class="images">
                       <img src="images/23.jpg" alt="image non disponible">
                       <div class="details">
                           <h2>Your <span>Title</span></h2>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus tempora, debitis possimus voluptatum perspiciatis quaerat. Possimus vitae amet id ducimus, </p>
                           <div class="more">
                               <a href="#" class="read-more"><span>More</span></a>
                               <div class="icon-links">
                                   <a href="#"><i class="fa-solid fa-heart"></i></a>
                                   <a href="#"><i class="fa-solid fa-comment"></i></a>
                                   <a href="#"><i class="fa-solid fa-share-nodes"></i></a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

     </section>
     <section class="arrival">
          <h2 class="title-heading">New Arrivals</h2>
          <div class="flexcontainer">
              <?php
              if(isset($_GET["add"])){
                  $idtoadd=$_GET["add"];
                  $quantite=1;
                  $insert=$bdd->query("INSERT INTO cart(quantite,Id_user,Id_pro)SELECT nom_pro,prix,photo FROM produit WHERE id_pro=$idtoadd");  
              }
              ?>
              <?php
              $select=$bdd->query("SELECT * FROM produit ORDER BY id_pro");
              while($dataselect=$select->fetch()){
              ?>
              <form  method="post">
               <div class="box1">
                    <a href="#" class="pop">New</a>
                    <?php
                     echo "<img src='image/".$dataselect['photo']."' class='img-arrival' alt='image non disponible'>";
                    ?>
                    <!-- <img src="images/22.jpg" alt="image non disponible" class="img-arrival"> -->
                    <h3 class="desc"><?php echo $dataselect["nom_pro"]?></h3>
                    <h2 class="prix"><?php echo $dataselect["prix"]?></h2>
                    <p class="p-txtbox"></p>
                    <!-- <a href="accueil.php" class="add-btn">Add to Cart</a> -->
                    
               <!-- ===========add to cart============= -->
               <?php
               if(isset($_SESSION['mail']) && !empty($_SESSION['mail'])){
               ?>
                <input type="hidden" name="nomprod" value="<?php echo $dataselect['nom_pro'];?>">
               <input type="hidden" name="prixpro" value="<?php echo $dataselect['prix'];?>">
               <input type="hidden" name="imagepro" value="<?php echo $dataselect['photo'];?>">
               <input type="submit" value="Add to Cart" name="add_to_cart" class="add-btn">
               <?php
               }else{
                   ?>
                   <a href="login.php" class="add-btn">Add to Cart</a>
                   <?php
               }
               ?>
              
             <a href="details.php?det=<?php echo $dataselect['id_pro'];?>" id="details-btn">Details</a>

            </div>
            </form>
           
               <?php
              }
               ?>
          </div>
         
     </section>
     <section class="weekly">
          <h2 class="title-heading">Deal Of the week </h2>
          <div class="flex-container">
               <div class="img-deal">
                    <div class="perc">
                        <h5 class="per">-30%</h5>
                    </div>
                    <img src="images/1.jpg" alt="image non disponible" class="img-week-deal">
               </div>
               <div class="deal-txt">
                    <h3 class="ttle">Get up to 30% Off New Arrivals</h3>
                    <p class="txt1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci dicta at corrupti hic veritatis, laudantium odio aliquid dolorum a libero, perspiciatis repellendus error sit fuga non ipsam reprehenderit ipsa aut. <br> <br><a href="#" class="shop">Shop Now</a>
                    </p>
                    
               </div>
          </div>
     </section>
     <section class="payment">
          <h2 class="title-heading">Payment Methods </h2>
          <div class="payment-container">
               <div class="pay">
                   <a href="#"><img src="images/visa.png" alt="images non disponible" class="pay-img"></a> 
               </div>
               <div class="pay">
                   <a href="#"><img src="images/lumicash.png" alt="images non disponible" class="pay-img"></a> 
               </div>
               <div class="pay">
                   <a href="#"><img src="images/paypal.png" alt="images non disponible" class="pay-img"></a> 
               </div>
               <div class="pay">
                   <a href="#"><img src="images/ecocash.png" alt="images non disponible" class="pay-img"></a> 
               </div>
               <div class="pay">
                   <a href="#"><img src="images/amazonpay.png" alt="images non disponible" class="pay-img"></a> 
               </div>
          </div>
     </section>

     <!-- section ends -->
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
                    <input type="submit" value="Send" name="submit" id="submit-btn">
               </form>
          </div>
     </div>
     <p class="copy">&copy 2022 All Right Reserved | </p>
</footer>
     <!-- JavaScript link -->
     <script src="js/main.js"></script>
     <script src="js/modal.js"></script>
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