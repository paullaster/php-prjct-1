<!DOCTYPE html PUBLIC>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <title>PHP FUNCTIONS</title>
    </head>
    <body>
        <h1>PHP FUNCTIONS</h1>
        <?php
         $movies= [
            [
                'title' => 'Black panther',
                'category' => 'Fiction Crit',
                'mainCharacters' =>[
                    [
                        'name' => 'Lupita Nyong\'',
                        'age' => 42,
                    ],
                    [
                        'name' => 'Hubris Daniela',
                        'age' => 46,
                    ]
                    ],
                    'releaseYear' => 2019
                ],
                [
                    'title' => 'Maria',
                    'category' => 'Drama and Romance',
                    'mainCharacters' =>[
                        [
                            'name' => 'Maria Hamisa\'',
                            'age' => 25,
                        ],
                        [
                            'name' => 'Lui Clif',
                            'age' => 26,
                        ]
                        ],
                        'releaseYear' => 2021
                    ],
                    [
                        'title' => 'Tom and Jerry',
                        'category' => 'Thriller',
                        'mainCharacters' =>[
                            [
                                'name' => 'Jerry Hueng',
                                'age' => 32,
                            ],
                            [
                                'name' => 'Tom Daniela',
                                'age' => 36,
                            ]
                            ],
                            'releaseYear' => 1995
                        ],
                        [
                            'title' => 'Masterred',
                            'category' => 'Science Finction',
                            'mainCharacters' =>[
                                [
                                    'name' => 'Luanga Lowered',
                                    'age' => 42,
                                ],
                                [
                                    'name' => 'morgan Heritage',
                                    'age' => 46,
                                ]
                                ],
                                'releaseYear' => 1990
                        ]
         ];
        ?>
        <ul>
            <?php foreach ($movies as $movie) : ?>
                <li>
                    <span>movie title:</span><?=$movie['title']?>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
