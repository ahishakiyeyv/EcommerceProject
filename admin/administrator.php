<?php
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/administrator.css">
    <title>Administrator | SuitSHOP</title>
</head>
<body>
<div id="mySidenav" class="sidenav">
	<p class="logo"><span>E-</span>SuitSHOP</p>
  <a href="#" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="#"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Customers</a>
  <a href="#"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Projects</a>
  <a href="#"class="icon-a"><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;Orders</a>
  <a href="#"class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Inventory</a>
  <a href="#"class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;Accounts</a>
  <!-- <a href="#"class="icon-a"><i class="fa fa-list-alt icons"></i> &nbsp;&nbsp;Tasks</a> -->
</div>
<section class="form-section">
    <h1 class="title002">Administrator</h1>
    <div class="formu">
        <fieldset>
            <form  method="post">
                <table class="table1">
                    <tr>
                        <th class="th-form">Username:</th>
                        <td class="td-form"><input type="text" name="username" placeholder="Enter your username..."></td>
                    </tr>
                    <tr>
                        <th class="th-form">Email:</th>
                        <td class="td-form"><input type="text" name="mail" placeholder="Enter your email..."></td>
                    </tr>
                    <tr>
                        <th class="th-form">Password:</th>
                        <td class="td-form"><input type="text" name="motdepasse" placeholder="Enter your password..."></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td class="td-sub"><input type="submit" name="submit" value="Submit"></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </div>
</section>
<?php
$select=$bdd->query("SELECT * FROM administrator ORDER BY id_admin");
?>
<section class="rec-form">
    <h1 class="title003">Recovery</h1>
    <table class="table001">
        <thead class="thead01">
            <tr>
                <th class="th01">Id</th>
                <th class="th01">Username</th>
                <th class="th01">Email</th>
                <th class="th01">Password</th>
                <th class="th01" colspan="2">Actions</th>
            </tr>
        </thead>
        <?php
        while($data=$select->fetch()){
        ?>
        <tbody class="tbody01">
            <tr>
                <td class="td01"><?php echo $data['id_admin']?></td>
                <td class="td01"><?php echo $data['username']?></td>
                <td class="td01"><?php echo $data['email_admin']?></td>
                <td class="td01"><?php echo $data['password_admin']?></td>
                <td class="td01-link"><a href="#">Activate</a></td>
                <td class="td01-lin"><a href="#">Delete</a></td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
</section>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $mail=$_POST['mail'];
        $password=md5($_POST['motdepasse']);
        $insert=$bdd->prepare("INSERT INTO administrator(username,email_admin,password_admin)VALUES(?,?,?)");
        $insert->execute(array($username,$mail,$password));

        echo "<script>alert('admin added successfully !!')</script>";
    }else{
        echo "<script>alert('Please Try Again !!')</script>";
    }
?>