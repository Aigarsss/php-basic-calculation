<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    
    <form action="inc/calc.inc.php" method="GET">
    
    <input type="number" name="num1" type="text" placeholder="Number 1">
    <label for="oper">Select operator</label>
    <select name="oper" id="oper">
        <option value="plus">+</option>
        <option value="minus">-</option>
        <option value="times">*</option>
        <option value="divide">/</option>
    </select>
    <input type="number" name="num2" type="text"  placeholder="Number 2">
    <button type="submit" name="submit">Calculate</button>
    </form>

</body>
</html>