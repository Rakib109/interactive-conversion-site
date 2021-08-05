<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Conversion Site</title>
    <script src="action.js"></script>
</head>
<body>
    <h1>Page 1 [Home]</h1>
    <br>
    1.<a href="home.php"> Home</a>
    2.<a href="conversion.php"> Conversion Rate</a>
    3.<a href="history.php"> History</a>
    <h1>Converter :</h1>
    <form >
		<label for=" type">Select Category:</label>
        <select id="type" name="type">
            <option value="fit-to-inch">Fit to Inch</option>
            <option value="inch-to-fit">Inch to Fit</option>
        </select>
        <br><br>
        <input type="text" placeholder="Enter Inch value" id="inch"> 
        <button  onclick="sndp()">inch to foot
        </button>
        <br><br>
        <input type="text" placeholder="Enter foot value" id="foot"> 
        <button  onclick="sndp1()"> foot to inch
        </button>
   
        
        
    </form>
    
     
    </body>
</html>