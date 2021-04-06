<?php 
include("connexion.php");
$id=$_GET['Id_Products'];
$requeteDel="DELETE FROM products WHERE Id_Products='$id'";
$query = mysqli_query($cnx,$requeteDel);
if(isset($query)){
    header("location:starters.php");
}
?>

<!-- 
 -->