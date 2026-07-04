<?php
$secretNumber = rand(1, 100);
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $guess = (int)$_POST["guess"];

    if ($guess < $secretNumber) {
        $message = "Too low!";
    } elseif ($guess > $secretNumber) {
        $message = "Too high!";
    } else {
        $message = "Correct!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Guess Number Game</title>

<style>
body{
    margin:0;
    font-family:Arial,sans-serif;
    background:#1e1e2f;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.container{
    background:#2c2c3e;
    width:350px;
    padding:30px;
    border-radius:15px;
    text-align:center;
    color:white;
    box-shadow:0 0 15px rgba(0,0,0,0.5);
}

h1{
    color:#4CAF50;
}

input{
    width:120px;
    padding:10px;
    font-size:18px;
    text-align:center;
    margin-top:10px;
}

button{
    margin-top:15px;
    padding:10px 20px;
    font-size:16px;
    cursor:pointer;
}

.result{
    margin-top:20px;
    font-size:20px;
    color:gold;
    font-weight:bold;
}
</style>

</head>

<body>

<div class="container">

<h1>Guess Number Game</h1>
echo "Yooooo";
echo "Hello World";

<p>Enter a number between 1 and 100</p>

<form method="post">
    <input type="number" name="guess" min="1" max="100" required>
    <br>
    <button type="submit">Guess</button>
</form>

<div class="result">
<?php echo $message; ?>
</div>

</div>

</body>
</html>
