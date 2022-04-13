<?php
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Custom css link -->
     <link rel="stylesheet" href="css/styles.css">
     <!-- font awesome cdn link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
     <title>Home | SuitSHOP</title>
</head>
<body> 
     <!-- header section starts -->
     <header class="header">
          <a href="#" class="logo"><i class="fas fa-splotch"></i> SuitSHOP</a>
          <nav class="navbar">
               <a href="dashboard.php">Dashboard.php</a>
               <a href="accueil.php">Home</a>
               <a href="shop.php">Shop</a>
               <a href="about.php">About</a>
               <a href="login.php">My Account</a>
          </nav>

          <div id="menu-btn" class="fas fa-bars"></div>
          <a href="#" class="btn">Chart</a>
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
               <a href="#" class="btn">Explore Now</a>
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
               <div class="box1">
                    <a href="#" class="pop">New</a>
                    <img src="images/22.jpg" alt="image non disponible" class="img-arrival">
                    <h3 class="desc">New Clothes</h3>
                    <h2 class="prix">130$</h2>
                    <p class="p-txtbox"></p>
                    <a href="#" class="add-btn">Add to Cart</a>
                    <button id="details-btn">Details</button>
                    <div id="modal">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2>Modal Header</h2>
                                <span class="close-btn">&times;</span>
                            </div>
                            <div class="modal-body">
                                <img src="images/09.jpg" alt="images non disponible">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, ipsum tenetur, illum cumque ipsam numquam beatae placeat qui voluptates, totam vitae. Eveniet, accusantium. Numquam veritatis blanditiis adipisci, deserunt ad sunt? Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                            <div class="modal-footer">
                                <h3>Yvan Igor AHISHAKIYE</h3>
                            </div>
                        </div>
                    </div>
               </div>
               <div class="box1">
                    <a href="#" class="pop">New</a>
                    <img src="images/30.jpeg" alt="image non disponible" class="img-arrival">
                    <h3 class="desc">New Clothes</h3>
                    <h2 class="prix">130$</h2>
                    <p class="p-txtbox"></p>
                    <a href="#" class="add-btn">Add to Cart</a>
                    <button id="details-btn">Details</button>
                    <div id="modal">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2>Modal Header</h2>
                                <span class="close-btn">&times;</span>
                            </div>
                            <div class="modal-body">
                                <img src="images/09.jpg" alt="images non disponible">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, ipsum tenetur, illum cumque ipsam numquam beatae placeat qui voluptates, totam vitae. Eveniet, accusantium. Numquam veritatis blanditiis adipisci, deserunt ad sunt? Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                            <div class="modal-footer">
                                <h3>Yvan Igor AHISHAKIYE</h3>
                            </div>
                        </div>
                    </div>
               </div>
               <div class="box1">
                    <a href="#" class="pop">New</a>
                    <img src="images/17.jpg" alt="image non disponible" class="img-arrival">
                    <h3 class="desc">New Clothes</h3>
                    <h2 class="prix">130$</h2>
                    <p class="p-txtbox"></p>
                    <a href="#" class="add-btn">Add to Cart</a>
                    <button id="details-btn">Details</button>
                    <div id="modal">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2>Modal Header</h2>
                                <span class="close-btn">&times;</span>
                            </div>
                            <div class="modal-body">
                                <img src="images/09.jpg" alt="images non disponible">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, ipsum tenetur, illum cumque ipsam numquam beatae placeat qui voluptates, totam vitae. Eveniet, accusantium. Numquam veritatis blanditiis adipisci, deserunt ad sunt? Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                            <div class="modal-footer">
                                <h3>Yvan Igor AHISHAKIYE</h3>
                            </div>
                        </div>
                    </div>
               </div>
               <div class="box1">
                    <a href="#" class="pop">New</a>
                    <img src="images/17.jpg" alt="image non disponible" class="img-arrival">
                    <h3 class="desc">New Clothes</h3>
                    <h2 class="prix">130$</h2>
                    <p class="p-txtbox"></p>
                    <a href="#" class="add-btn">Add to Cart</a>
                    <button id="details-btn">Details</button>
                    <div id="modal">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2>Modal Header</h2>
                                <span class="close-btn">&times;</span>
                            </div>
                            <div class="modal-body">
                                <img src="images/09.jpg" alt="images non disponible">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, ipsum tenetur, illum cumque ipsam numquam beatae placeat qui voluptates, totam vitae. Eveniet, accusantium. Numquam veritatis blanditiis adipisci, deserunt ad sunt? Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                            <div class="modal-footer">
                                <h3>Yvan Igor AHISHAKIYE</h3>
                            </div>
                        </div>
                    </div>
               </div>
               <div class="box1">
                    <a href="#" class="pop">New</a>
                    <img src="images/17.jpg" alt="image non disponible" class="img-arrival">
                    <h3 class="desc">New Clothes</h3>
                    <h2 class="prix">130$</h2>
                    <p class="p-txtbox"></p>
                    <a href="#" class="add-btn">Add to Cart</a>
                    <button id="details-btn">Details</button>
                    <div id="modal">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2>Modal Header</h2>
                                <span class="close-btn">&times;</span>
                            </div>
                            <div class="modal-body">
                                <img src="images/09.jpg" alt="images non disponible">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, ipsum tenetur, illum cumque ipsam numquam beatae placeat qui voluptates, totam vitae. Eveniet, accusantium. Numquam veritatis blanditiis adipisci, deserunt ad sunt? Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                            <div class="modal-footer">
                                <h3>Yvan Igor AHISHAKIYE</h3>
                            </div>
                        </div>
                    </div>
               </div>
               <div class="box1">
                    <a href="#" class="pop">New</a>
                    <img src="images/17.jpg" alt="image non disponible" class="img-arrival">
                    <h3 class="desc">New Clothes</h3>
                    <h2 class="prix">130$</h2>
                    <p class="p-txtbox"></p>
                    <a href="#" class="add-btn">Add to Cart</a>
                        <button id="details-btn">Details</button>
                        <div id="modal">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Modal Header</h2>
                                    <span class="close-btn">&times;</span>
                                </div>
                                <div class="modal-body">
                                    <img src="images/09.jpg" alt="images non disponible">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, ipsum tenetur, illum cumque ipsam numquam beatae placeat qui voluptates, totam vitae. Eveniet, accusantium. Numquam veritatis blanditiis adipisci, deserunt ad sunt? Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                                <div class="modal-footer">
                                    <h3>Yvan Igor AHISHAKIYE</h3>
                                </div>
                            </div>
                        </div>
                  </div>
               <div class="box1">
                    <a href="#" class="pop">New</a>
                    <img src="images/17.jpg" alt="image non disponible" class="img-arrival">
                    <h3 class="desc">New Clothes</h3>
                    <h2 class="prix">130$</h2>
                    <p class="p-txtbox"></p>
                    <a href="#" class="add-btn">Add to Cart</a>
                    <button id="details-btn">Details</button>
                    <div id="modal">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2>Modal Header</h2>
                                <span class="close-btn">&times;</span>
                            </div>
                            <div class="modal-body">
                                <img src="images/09.jpg" alt="images non disponible">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, ipsum tenetur, illum cumque ipsam numquam beatae placeat qui voluptates, totam vitae. Eveniet, accusantium. Numquam veritatis blanditiis adipisci, deserunt ad sunt? Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                            <div class="modal-footer">
                                <h3>Yvan Igor AHISHAKIYE</h3>
                            </div>
                        </div>
                    </div>
               </div>
               <div class="box1">
                    <a href="#" class="pop">New</a>
                    <img src="images/17.jpg" alt="image non disponible" class="img-arrival">
                    <h3 class="desc">New Clothes</h3>
                    <h2 class="prix">130$</h2>
                    <p class="p-txtbox"></p>
                    <a href="#" class="add-btn">Add to Cart</a>
                    <button id="details-btn">Details</button>
                    <div id="modal">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2>Modal Header</h2>
                                <span class="close-btn">&times;</span>
                            </div>
                            <div class="modal-body">
                                <img src="images/09.jpg" alt="images non disponible">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, ipsum tenetur, illum cumque ipsam numquam beatae placeat qui voluptates, totam vitae. Eveniet, accusantium. Numquam veritatis blanditiis adipisci, deserunt ad sunt? Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                            <div class="modal-footer">
                                <h3>Yvan Igor AHISHAKIYE</h3>
                            </div>
                        </div>
                    </div>
               </div>
               <div class="box1">
                    <a href="#" class="pop">New</a>
                    <img src="images/17.jpg" alt="image non disponible" class="img-arrival">
                    <h3 class="desc">New Clothes</h3>
                    <h2 class="prix">130$</h2>
                    <p class="p-txtbox"></p>
                    <a href="#" class="add-btn">Add to Cart</a>
                    <button id="details-btn">Details</button>
                    <div id="modal">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2>Modal Header</h2>
                                <span class="close-btn">&times;</span>
                            </div>
                            <div class="modal-body">
                                <img src="images/09.jpg" alt="images non disponible">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, ipsum tenetur, illum cumque ipsam numquam beatae placeat qui voluptates, totam vitae. Eveniet, accusantium. Numquam veritatis blanditiis adipisci, deserunt ad sunt? Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                            <div class="modal-footer">
                                <h3>Yvan Igor AHISHAKIYE</h3>
                            </div>
                        </div>
                    </div>
               </div>
               <div class="box1">
                    <a href="#" class="pop">New</a>
                    <img src="images/17.jpg" alt="image non disponible" class="img-arrival">
                    <h3 class="desc">New Clothes</h3>
                    <h2 class="prix">130$</h2>
                    <p class="p-txtbox"></p>
                    <a href="#" class="add-btn">Add to Cart</a>
                    <button id="details-btn">Details</button>
                    <div id="modal">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2>Modal Header</h2>
                                <span class="close-btn">&times;</span>
                            </div>
                            <div class="modal-body">
                                <img src="images/09.jpg" alt="images non disponible">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, ipsum tenetur, illum cumque ipsam numquam beatae placeat qui voluptates, totam vitae. Eveniet, accusantium. Numquam veritatis blanditiis adipisci, deserunt ad sunt? Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            </div>
                            <div class="modal-footer">
                                <h3>Yvan Igor AHISHAKIYE</h3>
                            </div>
                        </div>
                    </div>
               </div>
               <div class="box1">
                    <a href="#" class="pop">New</a>
                    <img src="images/17.jpg" alt="image non disponible" class="img-arrival">
                    <h3 class="desc">New Clothes</h3>
                    <h2 class="prix">130$</h2>
                    <p class="p-txtbox"></p>
                    <a href="#" class="add-btn">Add to Cart</a>
                    <button id="details-btn">Details</button>
                    <div id="modal">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2>Modal Header</h2>
                                <span class="close-btn">&times;</span>
                            </div>
                            <div class="modal-body">
                                <img src="images/09.jpg" alt="images non disponible">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, ipsum tenetur, illum cumque ipsam numquam beatae placeat qui voluptates, totam vitae. Eveniet, accusantium. Numquam veritatis blanditiis adipisci, deserunt ad sunt? Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                            <div class="modal-footer">
                                <h3>Yvan Igor AHISHAKIYE</h3>
                            </div>
                        </div>
                    </div>
               </div>
               <div class="box1">
                    <a href="#" class="pop">New</a>
                    <img src="images/17.jpg" alt="image non disponible" class="img-arrival">
                    <h3 class="desc">New Clothes</h3>
                    <h2 class="prix">130$</h2>
                    <p class="p-txtbox"></p>
                    <a href="#" class="add-btn">Add to Cart</a>
                    <button id="details-btn">Details</button>
                    <div id="modal">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2>Modal Header</h2>
                                <span class="close-btn">&times;</span>
                            </div>
                            <div class="modal-body">
                                <img src="images/09.jpg" alt="images non disponible">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, ipsum tenetur, illum cumque ipsam numquam beatae placeat qui voluptates, totam vitae. Eveniet, accusantium. Numquam veritatis blanditiis adipisci, deserunt ad sunt? Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                            </div>
                            <div class="modal-footer">
                                <h3>Yvan Igor AHISHAKIYE</h3>
                            </div>
                        </div>
                    </div>
               </div>
               </div>
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
               <div class="pay">
                    <a href="#"><img src="images/apay.png" alt="images non disponible" class="pay-img"></a>
               </div>
          </div>

     </section>

     <!-- section ends -->
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
     <!-- JavaScript link -->
     <script src="js/main.js"></script>
     <script src="js/modal.js"></script>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $mail=$_POST['text'];
    $insert=$bdd->prepare("INSERT INTO subscribers(mail_sub)VALUES(?)");
    $insert->execute(array($mail));
}
?>