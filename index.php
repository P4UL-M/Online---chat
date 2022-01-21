<?php
    if(isset($_COOKIE['pseudo']))
    {
        header("Location:channel");
        exit();
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Astyle.css" />
    <link rel="icon" href="P.gif">
    <title>Poool's channel</title>
</head>

<body>
    <form method="POST" action="channel" id="conteneur">
        <input type="text" name="pseudo" id="pseudo" placeholder="pseudo" autocomplete="off" autofocus="on">
        <span id="ligne_séparation"></span>
        <button id="submit" type="submit"><span>Valider </span></button>
    </form>

    <script src="Ascript.js"></script>
</body>

</html>
