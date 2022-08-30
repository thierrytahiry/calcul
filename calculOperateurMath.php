<?php

if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    $resultat = $_POST['resultat'];


    switch ($operator) {
        case 'Non':
            echo "If fau selection un operateur";
            break;

        case 'Addition':
            $resultat = $num1 + $num2;
            break;
        case 'Multiplication':
            $resultat = $num1 * $num2;
            break;
        case 'Soustraction':
            $resultat = $num1 - $num2;
            break;
        case 'Division':
            $resultat = $num1 / $num2;
            break;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calcule math</title>
</head>

<body>
    <div class="calcule">
        <form action="" method="POST">
            <label for="">Nb1</label>
            <input type="text" name="num1">
            <label for="">Nb2</label>
            <input type="text" name="num2">

            <select name="operator" id="">
                <option value="Non">Non</option>
                <option value="Addition">+</option>
                <option value="Multiplication">x</option>
                <option value="Soustraction">-</option>
                <option value="Division">/</option>
            </select>
            <input type="submit" value="Calculer" name="submit">
            <input type="text" name="resultat" value="<?php echo $resultat; ?>">
        </form>
    </div>
</body>