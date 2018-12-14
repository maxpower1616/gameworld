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
        
        <table class="checkOutTable">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Game</th> 
                    <th>Game Description</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img class="checkOutTable-image" src="img/farming.jpg" alt="Game image"></td>
                    <td>Farming Simulator 19</td>
                    <td>millions of selling franchises make a big leap forward in 2018 - the ultimate farming simulation returns this year with a complete overhaul of the graphics engine, the most striking and immersive images and effects, along with the deepest and most complete farming experience ever.</td>
                    <td>€34.99</td>
                </tr>
                <tr>
                    <td><img class="checkOutTable-image" src="img/justcause.jpg" alt="Game image"></td>
                    <td>Just Cause 4</td>
                    <td>Welcome to Solis, a huge South American world home of conflict, oppression and extreme weather conditions. Just Cause 4 sees rogue agent Rico Rodriguez land in Solis to hunt down the truth about his past, at any cost. Strap into your wingsuit, equip your fully customizable grappling hook, and get ready to bring the thunder!</td>
                    <td>€59.99</td>
                </tr>
                <tr>
                    <td><img class="checkOutTable-image" src="img/rainbow.jpg" alt="Game image"></td>
                    <td>Tom Clancy's Rainbow Six Siege</td>
                    <td>Become a master of vandalism and gadgets in Tom Clancy's Rainbow Six Siege. Engage deadly battles in small spaces, make tactical decisions, play in teams and experience banging action. Enter a new era of firefighting and expert strategies stemming from the rich history of previous Tom Clancy's Rainbow Six games.</td>
                    <td>€39.99</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan= "4">Total: €134.97</td>
                </tr>
            </tfoot>
        </table>
    
        <?php
            include("footer.php");
        ?>

    </div>
</body>
</html>