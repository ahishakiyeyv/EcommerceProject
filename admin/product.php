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
        ?>
            <div class="recovery">
               <img src="picture/<?php $dataselect["image"]?>" alt="image non disponible" class="img-recovery">
                <h3 class="desc"><?php echo $dataselect["nom_pro"]?></h3>
                <h2 class="price"><?php echo $dataselect["prix"]?></h2>
                <div class="btn-act">
                <a href="#" class="btn-del">Delete</a>
                <a href="#" class="btn-upd">Update</a>
                </div>
            </div>
            <?php
        }
            ?>
    </div>
</section>
</body>
</html>
<?php

if (isset($_POST["submit"])){
    $target ="picture/".basename($_FILES["image"]["name"]);
    $nompro=$_POST["nomproduit"];
    $price=$_POST["prix"];
    $image=$_POST["image"]["name"];
    $cat=$_POST["category"];
    $sql="INSERT INTO produit(nom_pro,prix,image,id_Cat)VALUES('$nompro','$price','$image','$cat')";
    $insert=$bdd->query($sql);
    
}
/*
if(isset($_POST["submit"])){
    $nompro=$_POST["nomproduit"];
    $prix=$_POST["prix"];
    $img=$_FILES["image"]["name"];
    $category=$_POST["category"];
$insert=$bdd->prepare("INSERT INTO produit(nom_pro,prix,image,id_Cat)VALUES(?,?,?,?)");
if($insert->execute(array($nompro,$prix,$img,$category))){
    move_uploaded_file($_FILES["image"]["tmp_name"],"picture/");
    echo "<script>alert('Data added Successfully')</script>";
}else{
    echo "<script>alert('Error occurs !!')</script>";
}
}*/
?>


<?php
// Include the database configuration file
//$statusMsg = '';

// File upload path
//$targetDir = "picture/";
//$fileName = basename($_FILES["file"]["name"]);
//$targetFilePath = $targetDir . $fileName;
//$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

//if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
  //  $nompro=$_POST["nomproduit"];
    //$prix=$_POST["prix"];
    //$category=$_POST["category"];
    // Allow certain file formats
    //$allowTypes = array('jpg','png','jpeg','gif','pdf');
   // if(in_array($fileType, $allowTypes)){
        // Upload file to server
     //   if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
       //     $insert = $bdd->prepare("INSERT INTO produit (nom_pro,prix,file_name, uploaded_on,id_Cat) VALUES (?,?,'".$fileName."', NOW(),?)");
         //   if($insert){
           //     $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            //}else{
              //  $statusMsg = "File upload failed, please try again.";
            //} 
        //}else{
          //  $statusMsg = "Sorry, there was an error uploading your file.";
        //}
    //}else{
      //  $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    //}
//}else{
  //  $statusMsg = 'Please select a file to upload.';
//}

// Display status message
//echo $statusMsg;
?>