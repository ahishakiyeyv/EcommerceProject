<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Policy  | FashionSHOP</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rambla&display=swap');
*
{
     font-family: 'Rambla', sans-serif;
     margin: 0;
     padding: 0;
     box-sizing: border-box;
     outline: none;
     border: none;
     text-decoration: none;
}
/* variables start */
:root
{
     --gray:#a2a2a2;
     --graye:#ececec;
     --black: #000;
     --blue: #cae8e3;
     --pink: #f6e4d5;
     --white: #fff;
     --yellow: #ffd080;
     --border: .2rem solid var(--black);
}
::-webkit-scrollbar
     {
          width: 1rem;
     }
::-webkit-scrollbar-track
{
     background: var(--white);
}

::-webkit-scrollbar-thumb
{
     background: var(--black);
}
html
{
     font-size: 62.5%;
     overflow-x: hidden;
     scroll-behavior: smooth;
     scroll-padding-top: 7rem;   
}
.header
{
     position: sticky;
     top: 0;
     left: 0;
     right: 0;
     z-index: 1000;
     display: flex;
     align-items: center;
     justify-content: space-between;
     background-color: var(--white);
     box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
     padding: 2rem 9%;
}
.logo
     {
          font-size: 2.5rem;
          color: var(--black);
     }

.navbar a
{
    margin: 0 1rem;
    font-size: 2rem;
    color: var(--black);   
}

.navbar a:hover
{
     text-decoration: underline;
}
.navbar .session{
     margin: 0 1rem;
     padding:5px;
    font-size: 2rem;
    border:1px solid black;
}
.navbar .session:hover{
    border:2px solid black;
}

#menu-btn
{
     display:none;
     cursor: pointer;
     font-size: 3rem;
}
.btn
{
     display: inline-block;
     /* margin-top: 1rem; */
     padding: 0.5rem 1rem;
     /* font-size: 2rem; */
     border: 1px solid Black;
     cursor: pointer;
     font-weight: bolder;
     border-radius: .5rem;
}

.btn:hover
{
     background:var(--graye);
     color: var(--black);
}
.btn span{
     position:relative;
     left:1px;
     top:1px;
     font-size:1.5rem;
     /* padding:1px; */
     color:#000;;
     border-radius:5px;
     /* margin:5px 1px; */
}
/* =========================================================section 1============================================ */
.title1{
    text-align:center;
    font-size:3rem;
    letter-spacing:.2rem;
    color:gray;
    margin:2rem;
    text-transform:uppercase;

}
.stitle0{
    text-align:center;
    font-size:2rem;
    text-transform:uppercase;
    margin:2rem;
}
.para{
    font-size:1.6rem;
    width:800px;
    margin-left:30rem;
    margin-bottom:1rem;
}
    </style>
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
     <section class="section">
         <h1 class="title1">Return and Refund Policy</h1>
         <h2 class="stitle0">Definition and key terms</h2>
         <p class="para">
         To help explain things as clearly as possible in this return & refund policy, every time any of these terms are referenced, are strictly defined as  <br>
*company:when this policy mentions “company”, “we”,”us”, or “our”, it refers to FashionSHOP, That is responsible for your information under this return & refund policy <br>
*customer: refers to the company, organization or person that signs up to use the service to manage the relationships with your consumers or service users <br>
* device: any internet connected device such as a phone , a tablet, computer or any other device that can be used to visit and use the services. <br>
*service: refers to the service provided by FashionSHOP as described in the relative terms (if available) and on this platform. <br>
*website: FashionSHOP’s site which can be accessed via this url http://localhost/ecommerce <br>
*you: a person or entity that is registered with FashionSHOP to use the services
         </p>
         <h2 class="stitle0">YOUR CONSENT </h2>
         <p class="para">By using our platform, registering an account or making a purchase, you hereby consent to our return & refund policy and agree to its terms.</p>
         <h2 class="stitle0">CHANGES TO OUR RETURN & REFUND POLICY</h2>
         <p class="para">Should we update, amend or make any changes to this document so that they accurately reflect our service and policies, unless otherwise required by law, those changes will be prominently posted here. Then, if you continue to use the service, you will be bound by the updated Return & refund policy, if you do not want to agree to this  or any updated return & refund policy, you can delete your account.</p>
         <h2 class="stitle0">contact us</h2>
         <p class="para">If, for any reason, you are not completely satisfied with any good or service that we provide, don’t hesitate to contact us and we will discuss any of the issues you are going through with our product</p>
    
        </section>

</body>
</html>