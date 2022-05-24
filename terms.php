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
         <h1 class="title1">General conditions of use of the FashionSHOP website</h1>
         <h2 class="stitle0">Article 1: object</h2>
         <p class="para">
         These "general conditions of use" are intended to provide a legal framework for the use of the FashionSHOP site and its services.

This contract is concluded between:

The manager of the website, hereinafter referred to as Yvan Igor AHISHAKIYE and Prudence AHINDOREYE,

Any natural or legal person wishing to access the site and its services, hereinafter called "the User".
<br>
The general conditions of use must be accepted by any User, and his access to the site constitutes acceptance of these conditions.
         </p>
         <h2 class="stitle0">ARTICLE 2: Legal notices</h2>
         <p class="para">For legal persons:

The FashionSHOP site is edited by Yvan Igor AHISHAKIYE and Prudence AHINDOREYE.

For natural persons:

The FashionSHOP site is edited by Yvan Igor AHISHAKIYE and Prudence AHINDOREYE.
</p>
         <h2 class="stitle0">ARTICLE 3: access to services</h2>
         <p class="para">The User of the FashionSHOP site has access to the following services:
• Shop
•	Contact
• View Shopping Cart
• Comment on products
• …
Any User with internet access can access the site free of charge and from anywhere. The costs incurred by the User to access it (internet connection, computer equipment, etc.) are not the responsibility of the Publisher.

The following services are only accessible to the User if he is a member of the site (i.e. he is identified using his login credentials):
•	Add to Cart
•	To buy
• …

The site and its various services may be interrupted or suspended by the Publisher, in particular during maintenance, without obligation of notice or justification.
</p>
         <h2 class="stitle0">ARTICLE 4: Responsibility of the User</h2>
         <p class="para">The User is responsible for the risks associated with the use of his login ID and password.

The User's password must remain secret. In the event of disclosure of the password, the Publisher declines all responsibility.

The User assumes full responsibility for the use he makes of the information and content present on the FashionSHOP website.

Any use of the service by the User resulting directly or indirectly in damage must be subject to compensation for the benefit of the site.

The site allows members to post on the site:
• Comments;
•	Share;
•	Etc.

The member undertakes to make comments respectful of others and of the law and accepts that these publications be moderated or refused by the Publisher, without obligation of justification.

However, the Publisher undertakes to cite the member in the event of use of his publication.
</p>
         <h2 class="stitle0">ARTICLE 5: Liability of the Publisher</h2>
         <p class="para">Any malfunction of the server or the network cannot engage the responsibility of the Publisher.

Similarly, the site cannot be held liable in the event of force majeure or the unforeseeable and insurmountable act of a third party.

The FashionSHOP site undertakes to implement all necessary means to guarantee the security and confidentiality of data. However, it does not provide a guarantee of total security.

The Publisher reserves the right to not guarantee the reliability of the sources, although the information disseminated on the site is deemed reliable.
</p>
         <h2 class="stitle0">ARTICLE 6: Intellectual property</h2>
         <p class="para">The contents of the FashionSHOP site (logos, texts, graphics, videos, etc.) are protected by copyright, under the Intellectual Property Code.

The User must obtain the authorization of the publisher of the site before any reproduction, copy or publication of these various contents.

These can be used by users for private purposes; any commercial use is prohibited.

The User is fully responsible for any content he puts online and he undertakes not to harm a third party.

The Site Editor reserves the right to moderate or delete freely and at any time the content posted by users, without justification.
</p>
         <h2 class="stitle0">ARTICLE 7: Personal data</h2>
         <p class="para">The User must provide personal information to register on the site, in particular the valid email and password.

The electronic address (e-mail) of the user may in particular be used by the FashionSHOP site for the communication of various information and the management of the account.

The User exercises this right via:

• His personal space on the site;
• A contact form;
• By email to ahig@biu.bi or pruah@biu.bi
</p>
         <h2 class="stitle0">ARTICLE 8: Hypertext links</h2>
         <p class="para">The domains to which the hypertext links on the site lead do not engage the responsibility of the FashionSHOP Editor, who has no control over these links.

It is possible for a third party to create a link to a page of the site [your site] without the express authorization of the publisher.
</p>
         <h2 class="stitle0">ARTICLE 9: Evolution of the general conditions of use</h2>
         <p class="para">The FashionSHOP site reserves the right to modify the clauses of these general conditions of use at any time and without justification.</p>
         <h2 class="stitle0">ARTICLE 10: Duration of the contract</h2>
         <p class="para">The duration of this contract is indefinite. The contract takes effect with respect to the User from the start of the use of the service.</p>
         
        </section>

</body>
</html>