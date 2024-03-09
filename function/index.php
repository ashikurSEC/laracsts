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
                'name'          => 'Pathshala',
                'author'    => 'Ashikur Rahman',
                'releaseYear'   => 2019,
                'parseURL'      => 'http://example.com'
            ],

            [
                'name'          => 'PHP and Laravel Course',
                'author'        => 'Hasinur Rahman',
                'releaseYear'   => 2013,
                'parseURL'      => 'http://hasinur.co'
            ],

            [
                'name'          => 'Kaikor',
                'author'        => 'Ashikur Rahman',
                'releaseYear'   =>  2013,
                'parseURL'      => 'http://mehedi.co'
            ]
        ];

        function filterByAuthor($books, $author)
        {
            $filterBooks = [];

            foreach ($books as $book) {
                if ($book['author'] === $author) {
                    $filterBooks[] = $book; // Append the matching book to the array
                }
            }

            return $filterBooks;
        } 
    ?>
    <ul>
    <?php foreach (filterByAuthor($books, "Ashikur Rahman") as $book) : ?>
        <li>
            <a href="<?= $book['parseURL'] ?>">
                <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>