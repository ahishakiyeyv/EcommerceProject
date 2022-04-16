<?php
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
    <header class="header">
        <a href="#" class="logo"><i class="fas fa-splotch"></i> SuitSHOP</a>
        <nav class="navbar">
            <a href="dashboard.php">Dashboard</a>
             <a href="accueil.php">Home</a>
             <a href="shop.php">Shop</a>
             <a href="about.php">About</a>
             <a href="login.php">My Account</a>
        </nav>
          <div id="menu-btn" class="fas fa-bars"></div>
          <a href="#" class="btn">Cart</a>
   </header>

   <section class="section12">
       <h1 class="tit1">Order Now</h1>
       <div class="card">
           <div class="leftside">
                <h1>Order-Summary</h1>
           </div>
           <div class="rightside">
               <h1>Checkout</h1>
               <h2>Ordering Information</h2>
               <form method="post">
                   <p class="p-title">Name:*</p>
                   <input type="text" name="name" class="inpt-order" required>
                   <p class="p-title">Email:*</p>
                   <input type="text" name="email" class="inpt-order" required>
                   <p class="p-title">Phone:*</p>
                   <input type="number" name="phone" class="inpt-order" required>
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
                         <input type="text" name="commune" class="inpt-add" required>
                       </div>
                       <div class="add1">
                       <p class="p-title">Street:*</p>
                         <input type="text" name="street" class="inpt-add" required>
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
    
    $insert = $bdd ->prepare("INSERT INTO order(name_order,email_order,phone_order,city,commune,street)VALUES(?,?,?,?,?,?)");
    $insert->execute(array($name,$mail, $phone,$city,$commune,$street));
    if($insert){
        echo "<script>alert('Order Registred Successfully')</script>";
    }else{
        echo "<script>alert('There's an error while ordering')</script>";
    }
}
?>