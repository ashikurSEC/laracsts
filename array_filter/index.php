<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array_filter</title>
</head>
<body>
<?php 
    $books = [
        [
            'name'          => 'Gullivers Travels',
            'author'        => 'Jonathan Swift',
            'releaseYear'   => 1726,
            'parseURL'      => 'http://johanthan.co'
        ],

        [
            'name'          => 'Clarissa',
            'author'        => 'Samuel Richardson',
            'releaseYear'   => 1748,
            'parseURL'      => 'http://samuel.co'
        ],

        [
            'name'          => 'Tom Jones Tom Jones',
            'author'        => 'Henry Fielding',
            'releaseYear'   => 1749,
            'parseURL'      => 'http://henry.co'
        ]
    ];

    $filteredBooks = array_filter($books, function( $book ){
        return $book['releaseYear'] <= 1726;
    });

?>

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