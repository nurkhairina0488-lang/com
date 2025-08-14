
<!DOCTYPE html>
<html>
<head>
    <title>Claim Your Item</title>
    <style>
        body 
        { 
            background-image: url("background.jpeg");
            background-repeat: no-repeat;
            background-size: 100%;
            font-family: Arial, sans-serif; 
            text-align: center; 
            padding-top: 50px; 
        }

        img 
        { 
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
            max-width: 300px; 
            margin-top: 20px;  
        }

        h1{
            font-family: Arial Black;
            font-size: 40px;
            text-align: center; 
        }

        input 
        { 
            padding: 8px; 
            font-size: 16px; 
            margin: 10px; 
            width: 250px; 
        }

        button 
        { 
            font-weight: bold;
            color:white;
            border:1px solid white;
            padding: 10px 20px; 
            font-size: 16px; 
            border-radius: 25px;
            background-color:black;
        }
    </style>
</head>
<body>
    <h1>CLAIM THE ITEM</h1>
    <br>
    <form action="claim25.php" method="POST">
       <label for="name">Enter your name:</label><br>
        <input type="text" name="name" required><br>
        <br>
        <label for="email">Enter your email:</label><br>
        <input type="email" name="email" required><br>
        <br>
        <button type="submit">Claim</button>
    </form>
</body>
</html>

