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
    <link rel="stylesheet" href="css/category.css">
    <title>Category | FashionSHOP</title>
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
  <!-- <a href="#"class="icon-a"><i class="fa fa-list-alt icons"></i> &nbsp;&nbsp;Tasks</a> -->
</div>
<section class="section01">
    <h1 class="titre1">Category Management</h1>
    <fieldset>
        <form action="" method="post">
        <table>
                    <tr>
                     <th class="th-cat">Add Category:   </th>
                   
                        <th><input type="text" name="categorie" class="inpt-cat" placeholder="Nouvelle categorie..."></th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Add" id="sub-cat" name="submit"></td>
                   <td> <input type="reset" value="Reset" id="res-cat"></td>
                    </tr>
                </table>
        </form>
    </fieldset>
</section>
<?php
$select=$bdd->query("SELECT * FROM categorie ORDER BY id_cat");
if(isset($_GET['sup'])){
    $idtodelete=$_GET['sup'];
    $delete=$bdd->exec("DELETE FROM categorie WHERE id_cat=$idtodelete");
}
?>
<section class="section02">
    <h1 class="title-reco">Recovery</h1>
    <table class="table01">
        <thead class="thead01">
            <tr>
                <th class="th01">Id</th>
                <th class="th01">Category</th>
                <th class="th01" colspan="2">Actions</th>
                
            </tr>
        </thead>
        <?php
        while($dataselect=$select->fetch()){
        ?>
        <tbody class="tbody01">
            <tr>
                <td class="td01"><?php echo $dataselect["id_cat"]?></td>
                <td class="td01"><?php echo $dataselect["nom_cat"]?></td>
                <td class="td01"><a href="category.php?sup=<?php echo $dataselect['id_cat'];?>" class="delete">Delete</a></td>
                <td class="td01"><a href="#" class="update">Update</a></td>

            </tr>
           <?php
        }
           ?>
        </tbody>
    </table>
</section>
</body>
</html>
<?php
if(isset($_POST["submit"])){
    $categorie=$_POST["categorie"];
    $insert=$bdd->prepare("INSERT INTO categorie(nom_cat)VALUES(?)");
    $insert->execute(array($categorie));
    if($insert){
    echo "<script>alert('Category added successfully')</script>";
}else{
    echo "<script>alert('Data error!')</script>";
}
}
?>