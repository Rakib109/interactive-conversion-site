<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>History</title>
</head>
<body>
    <h1>Page 3 [History]</h1>
    <br>
    <h1>Convertion Site</h1> <br>
    1.<a href="home.php"> Home</a>
    2.<a href="conversion.php"> Conversion Rate: </a>
    3.<a href="history.php"> History</a>
    
<h1>user list</h1>
    <form action="../controller/userlistaction.php" method="GET" name="mForm" onsubmit="getResult(this); return false;">
    <input type="text" name="foot">
    <input type="text">
    <input type="submit" name="search" value="search">
    </form>
    
    <hr>
    <div id="result"></div>
            
   
    </body>
</html>