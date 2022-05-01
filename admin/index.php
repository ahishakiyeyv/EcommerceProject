<?php
include("db.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Login |FashionSHOP</title>
    <style>
        body {
	font-family: sans-serif;	
	background-image: url("images/bg.jpg");
	background-repeat: no-repeat;
	overflow: hidden;
	background-size: cover;
}

.container {
	width: 380px;
	margin:7% auto;
	border-radius: 25px;
	background-color: rgba(0,0,0,0.1);
	box-shadow: 0 0 17px #333;
}

.header {
	text-align: center;
	padding-top: 75px;
}

.header h1 {
	color: #333;
	font-size: 45px;
	margin-bottom: 80px;
}

.main {
	text-align: center;
}

.main input, button {
	width: 300px;
	height: 40px;
	border:none;
	outline: none;
	padding-left: 40px;
	box-sizing: border-box;
	font-size: 15px;
	color: #333;
	margin-bottom: 40px;
}

.main button {
	padding-left: 0;
	background-color: #83acf1;
	letter-spacing: 1px;
	font-weight: bold;
	margin-bottom: 70px;
}

.main button:hover {
	box-shadow: 2px 2px 5px #555;
	background-color: #7799d4;
}
.main input:hover {
	box-shadow: 2px 2px 5px #555;
	background-color: #ddd;
}

.main span {
	position: relative;
}

.main i {
	position: absolute;
	left: 15px;
	color: #333;
	font-size: 16px;
	top: 2px;
}

    </style>
</head>
<body>
<div class="container">
 	<div class="header">
 		<h1>login</h1>
 	</div>
 	<div class="main">
 		<form  method="POST">
 			<span>
 				<i class="fa fa-user"></i>
 				<input type="text" placeholder="Username" name="username">
 			</span><br>
 			<span>
 				<i class="fa fa-lock"></i>
 				<input type="password" placeholder="password" name="motdepasse">
 			</span><br>
 		<button name="submit">login</button>
		 </form>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        $username=$_POST["username"];
        $password=md5($_POST["motdepasse"]);
        $select="SELECT username,password_admin From administrator WHERE username=:usernme AND password_admin=:motdepasse";
        $datauser=$bdd->prepare($select);
        $datauser->execute(array('usernme'=>$username,'motdepasse'=>$password ));
        $count=$datauser->rowCount();
        if($count >0){
			$_SESSION['username']=$username;
            header("location:dashboard.php");
        }
        else{
           echo "<script>alert('Email or Password are Invalid!')</script>";
    }
}
?>