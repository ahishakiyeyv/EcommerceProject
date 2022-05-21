<?php
session_start();
include("db.php");
include("sharing.php");
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
                
            ?>  </header>
     <!-- header section ends -->
<?php 
if(isset($_GET["det"])){
    $idtoget=$_GET["det"];
    $select=$bdd->query("SELECT * FROM produit WHERE id_pro=$idtoget");
    $data=$select->fetch();
}

?>
     <section class="section-details">
         <h1 class="titleDetails">Details</h1>
         <div class="container-details">
             <div class="img-details">
                <img src="image/<?php echo $data['photo'];?>" alt="image non disponible" class="img1">
             </div>
             <div class="desc-details">
                    <h2 class="titledesc"><?php echo $data['nom_pro'];?></h2>
                    <h3 class="stitle">New Arrival</h3>
                    <div class="rating">
                        <span class="fa fa-star fa-2x checked"></span>
                        <span class="fa fa-star fa-2x checked"></span>
                        <span class="fa fa-star fa-2x checked"></span>
                        <span class="fa fa-star fa-2x"></span>
                        <span class="fa fa-star fa-2x"></span>
                    </div>
                    <p class="para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem assumenda doloremque illo reiciendis rem aperiam dolores quis, asperiores obcaecati, commodi et iure distinctio voluptas laudantium laboriosam deleniti minima totam eveniet.</p>
                    <h3 class="bare">Old Price: <span>120000 fbu</span></h3>
                    <h2 class="prix">Price: <?php echo $data['prix'];?> fbu</h2>
                    <div class="icon">
                        <a href="#" class="btn-add"><i class="fa-solid fa-cart-shopping"></i></a>
                        <a href="#" class="like"><i class="fa-regular fa-heart"></i></a>
                    </div>
                    <div class="avis">
                     <h3 class="comment">Your Comment:</h3>
                        <form  method="POST">
                            <table>
                                <tr>
                                    <th><textarea name="commentaire" placeholder="Your comment here..." cols="70" rows="1"></textarea></th>
                                    <td><input type="submit" name="submit" value="Post" class="btn-submit"></td>
                                </tr>
                            </table>   
                        </form>
                    </div>
                    <div class="recupcomment">
                        <?php
                        $select=$bdd->query("SELECT * FROM commentaire WHERE id_prod=$idtoget");
                        while($dataselect=$select->fetch()){
                        ?>
                        <div class="comment1">
                             <div class="tablecomment">
                                <div class="headcomment">
                                    <img src="images/200.png" alt="image non disponible" class="img-comment">
                                   <h1>         </h1>
                                   <h1>            </h1>
                                    <h1 class="nameUser"><?php echo $dataselect['auteur']?></h1>
                                </div>
                                <div class="comment">
                                    <p class="commentUser"><?php echo $dataselect['commentaire']?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>    
                    </div>
                    <div class="share">
                        <h3 class="title-share">Share on:</h3>
                        <div class="sharelink">
                            <a href="#"><i class="fa-brands fa-facebook-square"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter-square"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram-square"></i></a>
                            <?php
                            // showSharer("http://localhost/Ecommerce/details.php?det=1", "a search engine site");
                            ?>
                        </div>
                    </div>
             </div>
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

<?php
if(isset($_GET["det"])){
    $idtoget=$_GET["det"];
    if(isset($_POST['submit'])){
        $auteur=$_SESSION['name'];
        $commentaire=$_POST['commentaire'];
        $insertion=$bdd->prepare("INSERT INTO commentaire(auteur,commentaire,id_prod)VALUES(?,?,?)");
        $insertion->execute(array($auteur,$commentaire,$idtoget));
        if($insertion){
            echo "<script>alert('comment added successful')<?script>";
        }else{
            echo "<script>alert('there was an error')<?script>";
        }
    }
}
?>