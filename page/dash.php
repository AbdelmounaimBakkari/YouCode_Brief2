<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/dash.css">
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/70f6c2af03.js" crossorigin="anonymous"></script>
    <title>Dash Board</title>
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

        <div class="cover">

            <button type="button" class="new" onclick="alert('H')">New Categorie</button>
            <table>

                <tr>
                    <td>Starters</td>
                    <td><a href="../page/starters.php"><button>Show</button></a></td>
                    <td><button>Delete</button></td>
                </tr>

                <tr>
                    <td>Main Dishes</td>
                    <td><a href="../page/dishes.php"><button>Show</button></a></td>
                    <td><button>Delete</button></td>
                </tr>

                <tr>
                    <td>Desserts</td>
                    <td><a href="../page/desserts.php"><button>Show</button></a></td>
                    <td><button>Delete</button></td>
                </tr>

                <tr>
                    <td>Drinks</td>
                    <td><a href="../page/drinks.php"><button>Show</button></a></td>
                    <td><button>Delete</button></td>
                </tr>

            </table>
                
        </div>

    </header>