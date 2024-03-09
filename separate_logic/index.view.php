<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array_filter</title>
</head>
<body>
    <ul>
        <?php foreach( $filteredBooks as $book ): ?>
            <li>
                <a href="<?= $book['parseURL']?>">
                    <?= $book['name']?> (<?= $book['releaseYear']?>) - By <?= $book['author']?>
                </a>
            </li> 
        <?php endforeach; ?>
    </ul>
</body>
</html>