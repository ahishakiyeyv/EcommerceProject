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
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>About | FashionSHOP</title>
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
                
            ?>
             </header>
   <!-- header section ends -->
   <section class="section1">
       <div class="about-section">
        <h2 class="h2-title">About Products</h2>
        <a href="shop.php" class="link-about">Explore Now</a>
       </div>
   </section>
   <section class="section2">
       <div class="about-description">
           <div class="describe">
                <h2 class="h2-desc">Why Choose Us</h2>
                <p class="p-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure nesciunt sunt harum eaque hic magni debitis rem animi voluptate eos, ex quod itaque distinctio quam, veritatis perspiciatis, modi asperiores suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis blanditiis quidem cupiditate odit provident ratione, velit eveniet asperiores a tempore placeat! Deserunt, facilis non nulla nisi doloribus asperiores sit cum?</p>
                <ul class="ul-about">
                    <li class="li-about"><i class="fa-solid fa-check"></i> Separeted they live</li>
                    <li class="li-about"><i class="fa-solid fa-check"></i> Bookmarksgrove right at the coast</li>
                    <li class="li-about"><i class="fa-solid fa-check"></i> large language ocean</li>
                </ul>
                <div class="count">
                    <div class="student">
                        <h2 class="h2-award">500+</h2>
                        <h3 class="h3-award">Products</h3>
                    </div>
                    <div class="teach">
                        <h2 class="h2-award">20</h2>
                        <h3 class="h3-award">Category</h3>
                    </div>
                    <div class="award">
                        <h2 class="h2-award">5+</h2>
                        <h3 class="h3-award">Admin</h3>
                    </div>
                </div>
           </div>
           <div class="video-desc">
                <video loop autoplay muted src="ads/ads.mp4" class="video"></video>
           </div>
       </div>
   </section>
   <section class="section3">
       <h1 class="ttle">Our Team</h1>
       <p class="p-team">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo cum illum, omnis ducimus doloribus voluptatum assumenda ea! Quam incidunt aut dignissimos.</p>
       <div class="team">
           <div class="member1">
               <img src="images/200.png" alt="image non disponible" class="img-member1">
               <h3 class="name1">Yvan Igor AHISHAKIYE</h3>
               <p class="p-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio neque veritatis dolor error amet quibusdam labore in similique laboriosam porro? Provident, natus aspernatur nulla placeat impedit ipsam nisi odit dolorum!</p>

           </div>
           <div class="member1">
            <img src="images/200.png" alt="image non disponible" class="img-member1">
            <h3 class="name1">Prudence AHINDOREYE</h3>
            <p class="p-text">Lorem, Odio neque veritatis dolor error amet quibusdam labore in similique laboriosam porro? Provident, natus aspernatur nulla placeat impedit ipsam nisi odit dolorum!</p>
           </div>
           <div class="member1">
            <img src="images/200.png" alt="image non disponible" class="img-member1">
            <h3 class="name1">Tony BIMENYIMANA</h3>
            <p class="p-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio neque veritatis dolor error amet quibusdam labore in similique laboriosam porro? Provident, natus aspernatur nulla placeat impedit ipsam nisi odit dolorum!</p>
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
                   <li><a href="terms.php">Terms & Conditions</a></li>
                    <li><a href="return.php">Return Policy</a></li>
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