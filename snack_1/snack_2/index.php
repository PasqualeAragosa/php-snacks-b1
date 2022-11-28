<?php

## Snack 2

// Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Snack 2</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <form action="index.php" method="get">
        <div>
            <label for="nome">Nome</label>
            <input id="nome" name="nome" type="text">
        </div>
        <div>
            <label for="mail">Email</label>
            <input id="mail" name="mail" type="email">
        </div>
        <div>
            <label for="age">Età</label>
            <input id="age" name="age" type="number">
        </div>
        <button type="submit">Invia</button>
        <button type="reset">Resetta</button>
    </form>
</body>

</html>