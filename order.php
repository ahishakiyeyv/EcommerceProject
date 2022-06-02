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
    <link rel="stylesheet" href="css/order.css">
    <title>Order | SuitSHOP</title>
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
                $select_row=$bdd->query("SELECT * FROM cart");
                $row=$select_row->rowCount();
            ?>
          <div id="menu-btn" class="fas fa-bars"></div>
          <a href="cart.php" class="btn"><img src="images/cart.png" alt="image non disponible" id="cart"> <span><?php echo $row;?></span></a>
     </header>
     <!-- header section ends -->

   <section class="section12">
       <h1 class="tit1">Order Now</h1>
       <div class="card">
           <div class="leftside">
                <h1>Order-Summary</h1>
                <ul>
                <?php
                    $select_cart=$bdd->query("SELECT * FROM cart");
                   (int) $total=0;
                   (int) $grandtotal=0;
                    $count=$select_cart->rowCount();
                    if($count>0){
                        while($fetch=$select_cart->fetch()){
                           (int) $total_price= $fetch['prixprod'] * $fetch['Quantite'];
                           (int) $grandtotal = (int)$total += (int)$total_price;
                            
                ?>
                    <li><?php echo $fetch['nomprod'];?>: (<?php echo $fetch['Quantite'];?>)</li>

                <?php
                    };
                };
                ?>
                </ul>
                <p>Total : <?php echo (int)$grandtotal; ?> fbu</p>
           </div>
           <div class="rightside">
               <h1>Checkout</h1>
               <h2>Ordering Information</h2>
               <form method="post">
                   <p class="p-title">Name:*</p>
                   <input type="text" name="name" class="inpt-order" placeholder="Your name..." required>
                   <p class="p-title">Email:*</p>
                   <input type="text" name="email" class="inpt-order" placeholder="Your email..." required>
                   <p class="p-title">Phone:*</p>
                   <input type="number" name="phone" class="inpt-order" placeholder="Your phone number..." required>
                   <div class="addresse">
                       <div class="add1">
                       <p class="p-title">City:*</p>
                         <!-- <input type="text" name="name" class="inpt-add" required> -->
                         <select name="city" class="inpt-add">
                             <option value="">--City--</option>
                             <option value="Bujumbura mairie">Bujumbura Mairie</option>
                             <option value="Bujumbura rural">Bujumbura Rural</option> 
                             <option value="gitega">Gitega</option>
                             <option value="ngozi">Ngozi</option>
                             <option value="cibitoke">Cibitoke</option>
                             <option value="kayanza">Kayanza</option>
                             <option value="muyinga">Muyinga</option>
                             <option value="cankuzo">Cankuzo</option>
                             <option value="ruyigi">Ruyigi</option>
                             <option value="bururi">Bururi</option>
                             <option value="rutana">Rutana</option>
                             <option value="rumonge">Rumonge</option>
                             <option value="makamba">Makamba</option>
                             <option value="bubanza">Bubanza</option>
                             <option value="muramvya">Muramvya</option>
                             <option value="kirundo">Kirundo</option>
                             <option value="mwaro">Mwaro</option>
                         </select>
                       </div>
                       <div class="add1">
                       <p class="p-title">Commune:*</p>
                         <input type="text" name="commune" class="inpt-add" placeholder="Your commune..." required>
                       </div>
                       <div class="add1">
                       <p class="p-title">Street:*</p>
                         <input type="text" name="street" class="inpt-add" placeholder="Your street..." required>
                       </div>
                   </div>
                   <br>
                   <input type="submit" name="submit" class="inpt-sub" value="Order Now">

               </form>

           </div>
       </div>
   </section>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $mail=$_POST['email'];
    $phone=$_POST['phone'];
    $city=$_POST['city'];
    $commune=$_POST['commune'];
    $street=$_POST['street'];

    $cart_query=$bdd->query("SELECT * FROM cart");
    (int)$price_total=0;
    $count_cart=$cart_query->rowCount();
    if($count_cart>0){
        while($product_item=$cart_query->fetch()){
            $product_name[] =$product_item['nomprod'] .' ('. $product_item['Quantite'] .' )';
           (int) $product_price= $product_item['prixprod'] * $product_item['Quantite'];
           (int) $price_total += (int)$product_price;
        };
    };

    $total_product = implode(', ',$product_name);
    $detail_query = $bdd->query("INSERT INTO orders(name_order,email_order,phone_order,city,commune,street,total_product,total_price)VALUES('$name','$mail','$phone','$city','$commune','$street','$total_product','$price_total')");
    
    if($cart_query && $detail_query){
echo "
<div class='order-message'>
<div class='message'>
    <h3>Thank you for shopping</h3>
    <div class='order-detail'>
        <span>".$total_product."</span>
        <span class='total'>total : ".(int)$price_total." fbu</span>
    </div>
    <div class='customer-details'>
        <p>your name: <span>".$name."</span></p>
        <p>your email: <span>".$mail."</span></p>
        <p>your phone number: <span>".$phone."</span></p>
        <p>your address: <span>".$city.", ".$commune.", ".$street."</span></p>
        <p>(*Pay when products arrive*)</p>
    </div>
    <a href='index.php' class='btn_check'>Continue Shopping</a>
</div>
</div>
";
    }
}
?>
