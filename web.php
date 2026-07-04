session_start();

if (!isset($_SESSION['number'])) {
    $_SESSION['number'] = rand(1, 100);
}

$message = "";

if (isset($_POST['guess'])) {
    $guess = (int)$_POST['guess'];

    if ($guess < $_SESSION['number']) {
        $message = "Too low!";
    } elseif ($guess > $_SESSION['number']) {
        $message = "Too high!";
    } else {
        $message = "Correct! A new number has been generated.";
        $_SESSION['number'] = rand(1, 100);
    }
}

if (isset($_POST['reset'])) {
    $_SESSION['number'] = rand(1, 100);
    $message = "Game restarted!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Guess the Number</title>

<style>
body{
    margin:0;
    font-family:Arial,sans-serif;
    background:#1e1e2f;
    color:white;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.container{
    background:#2c2c3e;
    padding:30px;
    border-radius:15px;
    text-align:center;
