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
    <link rel="stylesheet" href="css/producte.css">
    <title>Product | SuitSHOP</title>
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
<section class="section1">
    <h1 class="title01">Product Management</h1>
    <fieldset>
        <form  method="POST" enctype="multipart/form-data">
            <ul class="ul-form">
                <h3 class="h3-form">Name:</h3>
                <li class="li-form"><input type="text" name="nomproduit" class="inpt" placeholder="Name of the product..."></li>
                <h3 class="h3-form">Price:</h3>
                <li class="li-form"><input type="text" name="prix" class="inpt" placeholder="enter price..."></li>
                <h3 class="h3-form">Image:</h3>
                <li class="li-form"><input type="file" name="image" class="inpt-img"></li>
                <h3 class="h3-form">Category:</h3>
                <li class="li-form"><select name="category" class="inpt">
                    <option value="">----category-----</option>
                    <?php 
                         
                         $reponse=$bdd->query("SELECT id_cat,nom_cat FROM categorie");
                         while($data=$reponse->fetch()){
                             ?>
                             
                             <option value="<?php echo $data["id_cat"]?>"><?php echo $data["nom_cat"]?></option>
                             <?php
                         }
                         ?>
                </select></li>
                <br>
                <li class="li-form"><input type="submit" value="Submit" name="submit" class="inpt-sub"></li>
            </ul>
        </form>
    </fieldset>
</section>
<?php 
$select=$bdd->query("SELECT * FROM produit ORDER BY id_pro");

?>
<section class="section2">
    <h1 class="title02">Recovery</h1>
    <div class="box-recovery">
        <?php
        while($dataselect=$select->fetch()){
        
           
            echo "<div class='recovery'>";
                echo "<img src='image/".$dataselect['photo']."' class='img-recovery' alt='image non disponible'>";
                echo "<h3 class='desc'>".$dataselect['nom_pro']."</h3>";
                echo "<h2 class='price'>".$dataselect['prix']."</h2>";
                echo "<div class='btn-act'>
                <a href='#' class='btn-del'>Delete</a>
                <a href='#' class='btn-upd'>Update</a>
                </div>";
            echo "</div>";
  
        }
            ?>
    </div>
</section>
</body>
</html>
<?php

if(isset($_POST["submit"])){
    $target="image/".basename($_FILES['image']['name']);
    $nompro=$_POST["nomproduit"];
    $prix=$_POST["prix"];
    $img=$_FILES["image"]["name"];
    $category=$_POST["category"];
$insert=$bdd->prepare("INSERT INTO produit(nom_pro,prix,photo,id_Cat)VALUES(?,?,?,?)");
if($insert->execute(array($nompro,$prix,$img,$category))){
    move_uploaded_file($_FILES["image"]["tmp_name"],$target);
    echo "<script>alert('Data added Successfully')</script>";
}else{
    echo "<script>alert('Error occurs !!')</script>";
}
}
?>
