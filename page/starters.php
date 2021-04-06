<?php
include("connexion.php");
$category='starters';
?>

<?php
if(isset($_POST['sumbit'])) {

    $starter_name = $_POST['starter_name'];
    $starter_description = $_POST['starter_description'];
    $starter_price = $_POST['starter_price'];
    $starter_image = $_POST['starter_image'];
    $id=$_GET['Id_Products'];
    $requeteInsert="INSERT INTO products (Name, Description, Price, Image, Category) VALUES('$starter_name','$starter_description','$starter_price','$starter_image','$category')";
    $requeteUpdate="UPDATE products SET Name='$starter_name',Description='$starter_description',Price='$starter_price',Image='$starter_image' WHERE Id_Products=$id";
    if(isset($_GET['Id_Products'])){
        $query = mysqli_query($cnx,$requeteUpdate);
        if(isset($query)){
            header("location:starters.php");
        }
    }else{
        $query = mysqli_query($cnx,$requeteInsert);
    }
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/starters.css">
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/70f6c2af03.js" crossorigin="anonymous"></script>
    <title>Starters</title>
</head>
<body>
    <header id="header">
        <div class="navbar">
            <div class="num">
                <i class="INnum fas fa-phone-alt fa-lg"></i>
                <p class= "INnum">06 00 00 00 00 For Reservation</p>
            </div>
            <div class="media_lang">
                <div class="media INmedia_lang">
                    <i class="fab fa-facebook fa-lg"></i>
                    <i class="fab fa-twitter fa-lg"></i>
                    <i class="fab fa-instagram fa-lg"></i>
                </div>
                <select class="lang INmedia_lang">
                    <option>English</option>
                    <option>Frensh</option>
                    <option>Arabic</option>
                </select>
            </div>
            <ul class="buttons">
                
                <li class="INbuttons"><a href="../page/dash.php">&#9776 Categories</a></li>
                <li class="INbuttons" id="myBtn2"><a>&#10133 New Categorie</a></li>
                
            </ul>
            <div class="search">
                <input type="search" placeholder="Search" class="INsearch">
                <button type="submit" class="INsearch"><i class="fas fa-search"></i></button>
            </div>
            <div class="logo">
                <img src="../IMG/logo.png" alt="LOGO">
            </div>
        </div>

    </header>

    <main id="mn">
    <
    <h2><select id="select_category">
        <?php 
            $selectCategory="SELECT * FROM products_category";
            $showCategory=mysqli_query($cnx,$selectCategory);
            while($row=mysqli_fetch_assoc($showCategory)):
        ?>
        
            <option><?php echo $row['Category'];?></option>
        <?php endwhile; ?>
    </select></h2>

    
        <button class="new"  id="myBtn">New</button>

        <table>
            <tr>
                <th>Name</th>
                <th>Description</th> 
                <th>Price</th>
                <th>Image</th>
                <th>Editing</th>
            </tr>
            <?php 
                $select= "SELECT * FROM products where Category='starters'";
                $show=mysqli_query($cnx,$select);
            while($row=mysqli_fetch_array($show)): 
                
                $id=$row['Id_Products']; ?>
            <tr>
                <td><?php echo $row['Name'];?></td>
                <td><?php echo $row['Description'];?></td>
                <td><?php echo $row['Price'];?></td>
                <td><?php echo $row['Image'];?></td>
                <?php
                echo"<td>";
                    echo"<a href='?Id_Products=$id#popup1'><button class='myBtn2'>Update</button></a>";
                    echo"<a href='delete.php?Id_Products=$id'><button>Delete</button></a>";
                echo"</td>";
                ?>
            </tr>

            <?php endwhile; ?>

        </table>
        
    </main>

    <div class="popup" id="popup1">

    <?php 
    if(isset($_GET['Id_Products'])){
        $id=$_GET['Id_Products'];
        $requeteSelUp="SELECT * from products WHERE Id_Products='$id'";
        $query = mysqli_query($cnx,$requeteSelUp);
        $row = mysqli_fetch_assoc($query);
        $name = $row['Name'];
        $description = $row['Description'];
        $price = $row['Price'];
        $image = $row['Image'];


    }
    
    ?>
     <!-- action="starters.php" -->
        <form method="POST">
            <label>Name</label>
            <input type="text" name="starter_name" value="<?php if(isset($_GET['Id_Products'])){
                echo $name;
            } ?>">


            <label>Description</label>
            <textarea rows="4" cols="50" name="starter_description"><?php if(isset($_GET['Id_Products'])){
                echo $description;
            } ?></textarea >


            <label>Price (MAD)</label>
            <input type="number" name="starter_price" value="<?php if(isset($_GET['Id_Products'])){
                echo $price;
            } ?>">


            <label>Select Image</label>
            <input type="file" name="starter_image" accept="image/*">


            <input type="submit" value="<?php
                        if(isset($_GET['Id_Products'])){
                            echo "Update";
                        }else{
                            echo "Add";
                        }
            ?>" name="sumbit">
            
            
        </form>
        <button class="close">&#9932</button>
    </div>

    <script src="../JavaScript/popup.js"></script>

</body>