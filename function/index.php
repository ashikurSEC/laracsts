<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>
    <?php 
        $books = [
            [
                'name'          => 'Ashikur Rahman',
                'department'    => 'Computer',
                'releaseYear'   => 2019,
                'parseURL'      => 'http://example.com'
            ],

            [
                'name'          => 'Hasinur Rahman',
                'department'    => 'CSE',
                'releaseYear'   => 2013,
                'parseURL'      => 'http://hasinur.co'
            ],

            [
                'name'          => 'Mehedi Hasan',
                'department'    => 'Computer',
                'releaseYear'   =>  2013,
                'parseURL'      => 'http://mehedi.co'
            ]
        ];

        function filterByAuthor ( $books ) {
            $filterBooks = [];

            foreach ( $books as $book ) {
                if ( $book['department'] === 'Computer'){
                    $filterBooks = $book;
                }
            }

            return $filterBooks;
        }   
    ?>


    <ul>
        <?php foreach (filterByAuthor( $books ) as $book ): ?> 
            
            <li>
                <a href="<?= $books['parseURL'] ?>">
                <?= $books['releaseYear']?>  (<?= $books['department']?>)
                </a>
            </li>

        <?php endforeach; ?>
    </ul>

    <p>
        <?= filterByAuthor($book)?>
    </p>
</body>
</html>