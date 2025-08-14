<title>Team Group</title>
<?php
$dataFile = "data25.json";
$maxClaims = 5;

// Load current claims
if (!file_exists($dataFile)) {
    file_put_contents($dataFile, json_encode([]));
}
$claims = json_decode(file_get_contents($dataFile), true);

$name = trim($_POST['name'] ?? '');
$email = strtolower(trim($_POST['email'] ?? ''));

if ($name === "" || $email === "") {
    die("Invalid name or email.");
}

// Check if email already claimed
foreach ($claims as $claim) {
    if (isset($claim['email']) && $claim['email'] === $email) {
        echo "You have already claimed this item.";
        exit;
    }
}

// Check max claim limit
if (count($claims) >= $maxClaims) {
    echo "Sorry, this item is no longer available.";
    echo "<br>
    <a href='index.php' target='_blank'><br>
    <button style='background-color: blue; color: white;'>Back</button>
    </a>";
    exit;
}

// Add new claim (store both name and email)
$claims[] = [
    "name" => $name,
    "email" => $email
];
file_put_contents($dataFile, json_encode($claims, JSON_PRETTY_PRINT));

// Show the item
echo "
<head>
    <style>
        h1 {
            font-family: Verdana;
            color: black;
            font-weight: bold;
            text-align: center;
        }
        img{
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 80%;
            max-width: 300px; 
            margin-top: 20px;  
        }    
    </style>
</head>
<body>
    <br>
    <br>
    <h1>Congratulations, $name! You are in Durian team.</h1>
    <br>
    <img src='durian.jpeg' alt='Item Image'>
</body>';"
?>
