<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable</title>
</head>
<body>
    <?php 
    $greeting = 'Game';
    $result = false;

    if ( $result ) {
        $message = "You Have on the $greeting";
    } else {
        $message = "You Have loss the Game";
    }
    ?>


    <h1><?= $message ?></h1>
</body>
</html>