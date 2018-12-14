<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
    <title>PowerGames</title>
</head>
<body>
    <div id="main-container">
        <?php
            include("header.php");
        ?>
        <div class="img-container">
            Welcome to PowerGames
        </div>
        <div class="categorie-container">
            <div class="playstation"><a class="playstation" href="gamePage.php?categoryId=1">Playstation</a></div>
            <div class="xbox"><a class="xbox" href="gamePage.php?categoryId=2">Xbox</a></div>
            <div class="pc"><a class="pc" href="gamePage.php?categoryId=3">Pc</a></div>
            <div class="clearfix"></div>
        </div>      
        <?php
            include("footer.php");
        ?>
    </div>
</body>
</html>