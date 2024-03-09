<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamda Function</title>
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


        $filterByAuthor = function ( $books, $author ){
            $filterBooks = [];
            foreach ( $books as $book ) {
                if ( $book ['author'] === $author ) {
                    $filterBooks[] = $book;
                }
            }
            return $filterBooks;
        };

        $filteredBooks = $filterByAuthor($books, 'Henry Fielding');
    ?>

    <ul>
        <?php foreach ( $filteredBooks as $book ) :?>
            <li>
                <a href="<?= $book['parseURL']?>">
                    <?= $book['name']?> (<?= $book['releaseYear']?>) - By <?= $book['author']?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>