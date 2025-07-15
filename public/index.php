<?php

// router.php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;  
}
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/':
        $heroTitle = 'World news';
    $posts = [
        [
            'title' => 'Blogi 1',
            'date' => 'July 1, 2025',
            'author' => 'Anneli',
            'content' => 'See on minu esimene postitus. Tere tulemast!'
        ],
        [
            'title' => 'Blogi 2',
            'date' => 'July 2, 2025',
            'author' => 'Anneli',
            'content' => 'Täna oli päikseline päev.'
        ],

    ];
        include __DIR__ . '/../views/index.php';
        break;
    case '/us':
        $heroTitle = 'U.S. news';
 $posts = [
    [
        'title' => 'U.S esimene blogi',
        'date' => 'July 1, 2025',
        'author' => 'Anneli',
        'content' => 'See on minu esimene postitus. Tere tulemast!'
    ],
    [
        'title' => 'U.S. teine blogi',
        'date' => 'July 2, 2025',
        'author' => 'Anneli',
        'content' => 'Täna oli päikseline päev ja ma kirjutasin natuke PHP-d.'
    ]
];
        include __DIR__ . '/../views/us.php';
        break;
    default:
        http_response_code(404);
        echo '404 Ei leia';
        break;
}
