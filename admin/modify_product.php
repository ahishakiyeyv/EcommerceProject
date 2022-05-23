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
    <link rel="stylesheet" href="css/product.css">
    <title>Product | FashionSHOP</title>
</head>
<body>
<div id="mySidenav" class="sidenav">
	<p class="logo"><span>Fashion</span>SHOP</p>
  <a href="dashboard.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="customer.php"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Customers</a>
  <a href="administration.php"class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Administration</a>
  <a href="orderrecovery.php"class="icon-a"><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;Orders</a>
  <a href="#"class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Cart</a>
  <a href="admin.php"class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;Home View</a>
</div>
<section class="section1">
    <h1 class="title01">Update Product</h1>
    <?php
    if(isset($_GET['modify'])){
        $idtomodify=$_GET['modify'];
        $selection=$bdd->query("SELECT * FROM produit WHERE id_pro=$idtomodify");
        $datamod=$selection->fetch();
    }
    ?>
    <fieldset>
        <form  method="POST" enctype="multipart/form-data">
            <ul class="ul-form">
                <h3 class="h3-form">Name:</h3>
                <li class="li-form"><input type="text" name="nomproduit" class="inpt" value="<?php echo $datamod['nom_pro'];?>" placeholder="Name of the product..."></li>
                <h3 class="h3-form">Price:</h3>
                <li class="li-form"><input type="number" name="prix" class="inpt" value="<?php echo $datamod['prix'];?>" placeholder="enter price..."></li>
                <h3 class="h3-form">Image:</h3>
                <li class="li-form"><input type="file" name="image" class="inpt-img" value="<?php echo $datamod['photo'];?>"></li>
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
</body>
</html>
<?php

if(isset($_POST["submit"])){
    $nompro=$_POST["nomproduit"];
    $prix=$_POST["prix"];
    $img=$_FILES["image"]["name"];
    $category=$_POST["category"];
    $updateexamen=$bdd->EXEC("UPDATE produit SET nom_pro='$nompro', prix='$prix',photo='$img',id_Cat='$category' WHERE id_pro=$idtomodify");
    header("location:product.php");
}
?>
