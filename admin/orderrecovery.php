<?php
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/orderrecovery.css">
    <title>Order Recovery| FashionSHOP</title>
</head>
<body>
<header class="header">
        <a href="#" class="logo"><i class="fas fa-splotch"></i> SuitSHOP</a>
        <nav class="navbar">
            <a href="dashboard.php">Dashboard</a>
             <a href="accueil.php">Home</a>
             <a href="shop.php">Shop</a>
             <a href="about.php">About</a>
             <a href="Contact.php">Contact</a>
             <a href="login.php">My Account</a>
        </nav>
          <div id="menu-btn" class="fas fa-bars"></div>
          <!-- <a href="#" class="btn">Cart</a> -->
   </header>
   <section class="recovery">
       <h1 class="title">Order Recovery</h1>
       <div class="contain">
       <?php
           $select=$bdd->query("SELECT * FROM orders ORDER BY id_order");
           while($data=$select->fetch()){
           ?>
       <div class="recov-container">
           <p class="content">Name: <span><?php echo $data['name_order']?></span></p>
           <p class="content">Email: <span><?php echo $data['email_order']?></span></p>
           <p class="content">Phone: <span><?php echo $data['phone_order']?></span></p>
           <div class="addrese">
               <p class="p-addrese">City: <span><?php echo $data['city']?></span></p>
               <p class="p-addrese">Commune: <span><?php echo $data['commune']?></span></p>
               <p class="p-addrese">Street: <span><?php echo $data['street']?></span></p>
           </div>
           <div class="total">
               <p class="p-total">All product: <span><?php echo $data['total_product']?></span></p>
               <p class="p-total">Total Price: <span><?php echo $data['total_price']?></span></p>
             
           </div>
       </div>
       <?php
           }
               ?>
               </div>
   </section>
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
               <form action="" method="post">
                    <input type="text" name="text" placeholder="Enter your email..." id="inpt-txt">
                    <input type="submit" value="Send" name="submit" id="submit-btn">
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