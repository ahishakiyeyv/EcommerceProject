<?php
include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Signup | SuitSHOP</title>
</head>
<body>
    <a href="index.html" class="bouton">Back</a>
    <div class="wrapper">
       <section class="form signup">
           <header>Sign Up | My Account</header>
           <form action="#" method="POST" enctype="multipart/form-data">
               <div class="error-txt"></div>
               <div class="name-details">
                   <div class="field input">
                        <label>First Name</label>
                        <input type="text"  name="fname" placeholder="First Name" required>
                   </div>
                   <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required>
                   </div>
               </div>
                   <div class="field input">
                        <label>Email Address</label>
                        <input type="text" name="email" placeholder="Enter your email" required>
                   </div>
                   <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter new password" required>
                        <i class="fas fa-eye"></i>
                   </div>
                   <div class="field button">
                       <input type="submit" value="Continue to Shop" name="submit">
                   </div>
           </form>
           <div class="link">Already signed up? <a href="login.html">Login now</a></div>
       </section>
    </div>
    <script src="js/pass-show-hide.js"></script>
    <script src="js/signup.js"></script>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $mail=$_POST['email'];
    $password=$_POST['motdepasse'];
   $insert=$bdd->prepare("INSERT INTO user(nom_user,prenom_user,email_user,password)VALUES(?,?,?,?)");
   $insert->execute(array($fname,$lname,$mail,$password));
   echo "<script>alert('Your Account has been registred.')</script>";
}else{
    echo "<script>alert('Error! Try Again')</script>";
}
?>
