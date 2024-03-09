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

    require_once 'index.view.php';
