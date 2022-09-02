<?php
$discs = [
    [
        'id' => 1,
        'title' => 'New Jersey',
        'author' => 'Bon Jovi',
        'year' => 1988,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
        'genre' => 'Rock'
    ],
    [
        'id' => 2,
        'title' => 'Live at Wembley 86',
        'author' => 'Queen',
        'year' => 1992,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
        'genre' => 'Pop'
    ],
    [
        'id' => 3,
        'title' => 'Ten\'s Summoner\'s Tales',
        'author' => 'Sting',
        'year' => 1993,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg',
        'genre' => 'Pop'
    ],
    [
        'id' => 4,
        'title' => 'Steve Gadd band',
        'author' => 'Steve Gadd Band',
        'year' => 2018,
        'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg',
        'genre' => 'Jazz'
    ],
    [
        'id' => 5,
        'title' => 'Brave new World',
        'author' => 'Iron Maiden',
        'year' => 2000,
        'poster' => 'https://upload.wikimedia.org/wikipedia/en/0/03/Iron_Maiden_-_Brave_New_World.jpg',
        'genre' => 'Metal'
    ],
    [
        'id' => 6,
        'title' => 'One more car, one more rider',
        'author' => 'Eric Clapton',
        'year' => 2002,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
        'genre' => 'Rock'
    ],
    [
        'id' => 7,
        'title' => 'Made in Japan',
        'author' => 'Deep Purple',
        'year' => 1972,
        'poster' => 'https://m.media-amazon.com/images/I/71SxPkY9fKL._AC_SL1300_.jpg',
        'genre' => 'Rock'
    ],
    [
        'id' => 8,
        'title' => 'And justice for all',
        'author' => 'Metallica',
        'year' => 1988,
        'poster' => 'https://m.media-amazon.com/images/I/81pchxSIApL._AC_SL1200_.jpg',
        'genre' => 'Metal'
    ],
    [
        'id' => 9,
        'title' => 'Hard wired',
        'author' => 'Dave Weckl',
        'year' => 1994,
        'poster' => 'https://m.media-amazon.com/images/I/611TBSi2y8L._AC_SL1200_.jpg',
        'genre' => 'Metal'
    ],
    [
        'id' => 10,
        'title' => 'Bad',
        'author' => 'Michael Jackson',
        'year' => 1987,
        'poster' => 'https://m.media-amazon.com/images/I/51-c9KBefDL._AC_.jpg',
        'genre' => 'Pop'
    ],
];

$results = $discs;
$search = $_GET['search'] ?? '';

if('search') {
    $results = [];
    foreach($discs as $disc) {
        $title = strtolower($disc['title']);
        $searched_term = strtolower($search);
        if(strpos($title, $searched_term) !== false) $results[] = $disc;
    }
}

header('Content-Type: application/json');
echo json_encode($discs);
?>