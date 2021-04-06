<?php
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
    <title>Desserts</title>
</head>
<body>
    <header>
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
                
                <li class="INbuttons"> &#9776 Categories</li>
                <li class="INbuttons"> &#10133 New Categorie</li>
                
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

    <main>
        <h2>Desserts</h2>

        <button class="new" id="myBtn">New</button>

        <table >
            <tr>
                <th>Name</th>
                <th>Description</th> 
                <th>Price</th>
                <th>Image</th>
                <th>Editing</th>
            </tr>

            <tr>
                <td>Faux Text</td>
                <td>Faux Text Faux Text Faux Text Faux Text <br> 
                Faux Text Faux Text Faux Text Faux Text</td>
                <td>000</td>
                <td><img src="../IMG/cheesecake.jpg" alt="EROR"></td>
                <td>
                    <button>Update</button>
                    <button>Delete</button>
                </td>
            </tr>

            <tr>
                <td>Faux Text</td>
                <td>Faux Text Faux Text Faux Text Faux Text <br> 
                Faux Text Faux Text Faux Text Faux Text</td>
                <td>000</td>
                <td><img src="" alt="EROR"></td>
                <td>
                    <button>Update</button>
                    <button>Delete</button>
                </td>
            </tr>

            <tr>
                <td>Faux Text</td>
                <td>Faux Text Faux Text Faux Text Faux Text <br> 
                Faux Text Faux Text Faux Text Faux Text</td>
                <td>000</td>
                <td><img src="" alt="EROR"></td>
                <td>
                    <button>Update</button>
                    <button>Delete</button>
                </td>
            </tr>

        </table>
        
    </main>

    <div class="popup" id="popup1">
        <form>
            <label>Name</label>
            <input type="text">
            <label>Description</label>
            <textarea rows="4" cols="50" name="description"></textarea>
            <label>Price (MAD)</label>
            <input type="number">
            <label>Select Image</label>
            <input type="file" name="img" accept="image/*">
            <input type="submit" value="Add">
            <button class="close">&#9932</button>
        </form>
    </div>

    <script src="../JavaScript/popup.js"></script>

</body>