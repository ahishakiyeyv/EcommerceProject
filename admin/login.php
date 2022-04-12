<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>My Accout | SuitSHOP</title>
</head>
<body>
    <a href="index.html" class="bouton"><i class="fa-solid fa-left"></i>Back</a>
    <div class="wrapper">
       <section class="form login">
           <header>My Account</header>
           <form action="#">
               <div class="error-txt">This is an error message</div>
                   <div class="field input">
                    <label>Email Address</label>
                    <input type="text"  placeholder="Enter your email">
                   </div>
                   <div class="field input">
                    <label>Password</label>
                    <input type="password"  placeholder="Enter your password">
                    <i class="fas fa-eye"></i>
                   </div>
                   <div class="field button">
                       <input type="submit" value="Continue to Shop">
                   </div>
           </form>
           <div class="link">Not yet  signed up? <a href="signup.html">Signup now</a></div>
       </section>
    </div>
    <script src="js/pass-show-hide.js"></script>
</body>
</html>