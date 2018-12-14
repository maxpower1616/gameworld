<?php
$servername     = "localhost";
$username       = "root";
$password       = "";
$database      = "gameworld";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

if(isset($_GET['categoryId']))
{ 
    $catId = $_GET['categoryId'];
}

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_GET['categoryId'])) 
{
    $sql = "SELECT * FROM `games`, `gamecategory` WHERE `games`.`categoryId` =  `gamecategory`.`categoryId` AND `gamecategory`.categoryId = '$catId' ORDER BY `games`.`gamePrice` ASC";
    //die($sql);
}

else 
{
  //  die('boo');
    $sql = "SELECT * FROM `games`, `gamecategory` WHERE `games`.`categoryId` =  `gamecategory`.`categoryId` ORDER BY `games`.`gamePrice` ASC";
}

$result = $conn->query($sql);

$games = array();

if ($result->num_rows > 0) {
    // get data of each row
    while($row = $result->fetch_assoc()) {
        // store data in $games

        $games[] = $row;
    }
} else {
    echo "0 results";
}

$conn->close();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Games</title>
</head>
<body>
<div id="main-container">
        <?php
            include("header.php");
        ?>

        <?php
        foreach($games as $key => $game){
        ?>

        <div class="product-item">
            <img src="img/<?php echo $game['gameImage']; ?>" alt="image">
            <img class="product-item-image2" src="img/<?php echo $game['categoryImage']; ?>" alt="image">
            <div class="product-item-title"><?php echo $game['gameTitle']; ?></div>
            <div class="product-item-price">€<?php echo $game['gamePrice']; ?></div>
            <div class="product-item-order"><a class="product-item-order-a" href="checkOut.php">Order</a></div>
        </div>

        <?php
        }
        ?>

        <div class="clearfix"></div>

        <?php
            include("footer.php");
        ?>
</div>