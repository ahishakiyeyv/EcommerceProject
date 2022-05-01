<?php
include("db.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>My Accout | FashionSHOP</title>
</head>
<body>
    <a href="dashboard.php" class="bouton"><i class="fa-solid fa-left"></i>Back</a>
    <div class="wrapper">
       <section class="form login">
           <header>My Account</header>
           <form action="#" method="POST">
               <div class="error-txt">This is an error message</div>
                   <div class="field input">
                    <label>Email Address</label>
                    <input type="text" name="mail" placeholder="Enter your email">
                   </div>
                   <div class="field input">
                    <label>Password</label>
                    <input type="password"  name="motdepasse" placeholder="Enter your password">
                    <i class="fas fa-eye"></i>
                   </div>
                   <div class="field button">
                       <input type="submit" value="Continue to Shop" name="submit">
                   </div>
           </form>
           <div class="link">Not yet  signed up? <a href="signup.php">Signup now</a></div>
       </section>
    </div>
    <script src="js/pass-show-hide.js"></script>
    <?php
    include("livechat.php");
    ?>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        $mail=$_POST["mail"];
        $password=md5($_POST["motdepasse"]);
        $select="SELECT email_user,password From user WHERE email_user=:mail AND password=:motdepasse";
        $datauser=$bdd->prepare($select);
        $datauser->execute(array('mail'=>$mail,'motdepasse'=>$password ));
        $count=$datauser->rowCount();
        if($count >0){
            header("location:dashboard.php");
        }
        else{
           echo "<script>alert('Email or Password are Invalid!')</script>";
    }
}
?>