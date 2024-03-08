<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functon</title>
</head>
<body>
    

<?php 

$books = [
    [
        'course'        => 'Web Development',
        'author'        => 'Ashikur Rahman',
        'releaseYear'   => 2024,
        'parseEmail'    => 'info.co.ashik@gmail.com'
    ],

    [
        'course'        => 'Web Design',
        'author'        => 'Ashikur Rahman',
        'releaseYear'   => 2024,
        'parseEmail'    => 'ashikurrahman7194@gmail.com'
    ],

    [
        'course'        => 'CEO Marketing',
        'author'        => 'Ashikur Rahman',
        'releaseYear'   => 2024,
        'paresEmail'    => 'ashik@gmail.com'
    ]
];

function filterByAuthor ( $books ) {
    $filterBooks = [];


    foreach ( $books as $book ) {
        if ($book['author']  === 'Ashikur Rahman') {
            $filterBooks = $book;
        }
    }

    return $filterBooks;
}


?>

<ul>
    <?php foreach ( filterByAuthor( $books ) as $book) : ?>{
        <li>
            <a href=" <?= $book['parseEmail'] ?>">
            <?= $book['releaseYear']?> (<?= $book['']?>)
        </a>
        </li>

    }

    <?php endforeach ?>
</ul>

</body>
</html>