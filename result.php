<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time calculator</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body id="body">
    <header>
        <h1>Time calculator</h1>
        <h2>by FranPCode</h2>
    </header>

    <div class="button-container">
            <div id='button-info'>Add an input</div>
        <div>
            <button id='button' onclick="addInput()">+</button>
        </div>
    </div>

    <div class="grid-container">
        <div class="grid-section-1">
            <form method="POST" action="./backEnd.php" class="time-input">
                <div class="input-container">
                    <div class="input-child">
                        <div class='input-name-container'>
                            <label for='hour'>Hour</label>
                            <input name='input_s0_n1' id='hour' type='number' class='date-input hour' min="00" >
                        </div>
                        <div class='input-name-container'>
                            <label for='minute'>Minute</label>
                            <input name='input_s0_n3' id='minute' type='number' class='date-input minute' min="00" >
                        </div>
                        <div class='input-name-container'>
                            <label for='second'>Second</label>
                            <input name='input_s0_n5' id='second' type='number' class='date-input second' min="00" >
                        </div>
                    </div>
                </div>
                <div class='submit-container'>
                    <input type="submit" name='submit' class="submit" value="Calculate">
                </div>
            </form>
        </div>
        <div class="grid-section-2">
            <div class="display-box">
                <div class="h3-container">
                    <h3>Total Time</h3>
                </div>
                <div class="display-container">
                    <?php if ($_COOKIE['hours'] > 999) {
                        echo '<div class="display-total result-display bigger-than-1000">'; 
                    } else {
                        echo '<div class="display-total result-display">';
                    }?>
                    <?php echo $_COOKIE['hours'] . ' : ' . $_COOKIE['minutes'] . ' : ' . $_COOKIE['seconds'] ?></div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="script.js"></script>
</html>

<?php


setcookie('hours', 0, time() - 3600, './');
setcookie('minutes', 0, time() - 3600, './');
setcookie('seconds', 0, time() - 3600, './');


if (is_null($_COOKIE['hours']) && is_null($_COOKIE['minutes']) && is_null($_COOKIE['seconds'])) {
    header('Location: ./index.html');
}
