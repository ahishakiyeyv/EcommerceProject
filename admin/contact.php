<?php
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contacts.css">
    <title>Contact | FashionSHOP</title>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

</head>
<body>
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

<form action="" method="POST">
    <div class="container">
        <span class="big-circle"></span>
        <!-- <img src="4.jpg" class="square" alt=""> -->
        <div class="form">
            <div class="contact-info">
            <h3 class="title">Let's get in touch</h3>
            <p class="text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                mollitia sed numquam possimus?
            </p>

            <div class="info">
                <div class="information">
                    <img src="21.jpg" class="icon" alt="">
                    <p>92 cherry Drive Uniondale, My 11553</p>
                </div>
                <div class="information">
                    <img src="22.jpg" class="icon" alt="">
                    <p>lorem@ipsum.com</p>
                </div>
                <div class="information">
                    <img src="23.jpg" class="icon" alt="">
                    <p>hello word</p>
                </div>
            </div>


          <div class="social-media">
              <p>Connect with us :</p>
              <div class="social-icons">
                  <a href="#">
                      <i class="fab fa-facebook-f"></i>
                  </a>
                  <a href="#">
                      <i class="fab fa-twitter"></i>
                  </a>
                  <a href="#">
                      <i class="fab fa-instagram"></i>
                  </a>
                  <a href="#">
                      <i class="fab fa-linkedin-in"></i>
                  </a>
              </div>
          </div>


          </div>
            <div class="contact-form">
            <span class="circle one"></span>
            <span class="circle two"></span>
            
            <form action="">
            <h3 class="title">Contact us</h3>
           <div class="input-container ">
           <label for="">Name: <span>*</span></label>
               <input type="text" name="nom" class="input" placeholder="Name..." required>
           </div>
           <div class="input-container">
           <label for="">Surname: <span>*</span></label>
               <input type="text" name="prenom" class="input" placeholder="Surname..." required>
           </div>
           <div class="input-container">
           <label for="">Email: <span>*</span></label>
               <input type="email" name="mail" class="input" placeholder="Email...">
           </div>
           <div class="input-container">
           <label for="">Message: <span>*</span></label>
               <textarea name="contenu" class="input" placeholder="Your Message..."></textarea>
           </div>
           <input type="submit" value="Send" name="send" class="btn-sub">
           </form>

           </div>
        </div> 
    </div>
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
              <form id="form" method="post">
                   <input type="text" name="text" placeholder="Enter your email..." id="inpt-txt">
                   <input type="submit" value="Send" id="submit-btn">
              </form>
         </div>
    </div>
    <p class="copy">&copy 2022 All Right Reserved | </p>
</footer>

    <?php
     if(isset($_POST["send"])){
        $Recupnom=$_POST["nom"];
        $Recupprenom=$_POST["prenom"];
        $Recupmail=$_POST["mail"];
        $Recupcontenu=$_POST["contenu"];
         $Affichagecontact="select * contact where
          nom=:nom_co and prenom=:prenom_co and mail=:email_co
           and contenu=:contenu_co";
         $insertcontact=$bdd->prepare("insert into contact
         (nom_co,prenom_co,email_co,contenu_co)
          values(?,?,?,?)");
        $insertcontact->execute(array($Recupnom,$Recupprenom,
        $Recupmail,$Recupcontenu));
     }
     ?>


     <!-- JavaScript link -->
    <?php
    include("livechat.php");
    ?>
</body>
</html>