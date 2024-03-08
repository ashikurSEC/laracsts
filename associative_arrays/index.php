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
    ?>


    <ul>
        <?php foreach( $books as $book ): ?>
            <?php if ($book['department'] === 'Computer'): ?>
            <li>
                <a href=" <?= $book['parseURL'] ?>">
                <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['department'] ?>
                </a>
            </li>
            <?php endif ?>
        <?php endforeach ?>
    </ul>
</body>
</html>