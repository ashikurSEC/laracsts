<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>Recommaned Books</h1>
    <?php 
    $books = [
        'Do Androids Dream of Eletric Sheep',
        'The Langories',
        'Hail Mary'
    ];
    ?>


    <ol>
        <?php 
        // foreach ( $books as $book ) { echo "<li> $book </li>";} 
        
        foreach ( $books as $book ): ?>

        <li><?= $book ?></li>

        <?php endforeach
        ?>
    </ol>
</body>
</html>