<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Conversion Rate</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Page 2 [Conversion Rate]</h1>
    <?php
    ?>
    <br>

    <h1>Convertion Site</h1> <br>
    1.<a href="home.php"> Home</a>

    2.<a href="conversion.php"> Conversion Rate: </a>

    3.<a href="history.php"> History</a>
    <h1>Conversion Rate : </h1>

    <form action="action=" <?php $_SERVER['PHP_SELF']; ?>" method="POST"">
		<label for=" type"> Category:</label>
        <input type="text" id="type" name="category">
        <label for="type">Unit</label>
        <input type="text" id="type" name="Unit">
        <label for="type">Rate</label>
        <input type="text" id="type" name="Rate">
        <input type="submit" name="submit" value="Submit">


        
    </form>

    <center>
        <table border="4">
            <thead>
                <tr>
                    <th>INCH</th>
                    <td><input type="text" name="inch" id="inch"></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>FOOT</th>
                    <td><input type="text" name="foot" id="foot"></td>
                </tr>
                
                <tr id="btna">
                    <td colspan="2"><input type="button" name="button" id="btn" value="Add" onclick="AddRow()"></td>
                </tr>
            </tbody>
        </table>

        <table border="4" id="show">
            <thead>
                <tr>
                      <th>INCH</th>
                    <th>FOOT</th>
                    
                </tr>
            </thead>
        </table>
    </center>
    
    </body>
</html>