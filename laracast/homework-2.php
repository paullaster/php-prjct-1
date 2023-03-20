<!DOCTYPE html PUBLIC>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <title>PHP FUNCTIONS</title>
    </head>
    <body>
        <h1>PHP FUNCTIONS</h1>
        <?php
            function filterMovies($moviesArray, $releaseYear) {
                $filteredMovies = [];
                foreach($moviesArray as $movie){
                    if($movie['releaseYear'] >= 2000){
                        $filteredMovies[] = $movie;
                    }
                return $filteredMovies;    
                }
            }
        ?>
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
                    <span>movie title: </span><?=$movie['title']?> <br/>
                    <span>movie category: </span><?=$movie['category']?> <br/>
                    <span>main mainCharacters : 
                        <?php foreach ($movie['mainCharacters'] as $mainCharacter) : ?>
                            <li>
                                <span>Name: </span><?=$mainCharacter['name']?>
                                <span>Age: </span><?=$mainCharacter['age']?>
                            </li>
                        <?php endforeach; ?>
                    </span>
                    <span>Year of release: </span> <?=$movie['releaseYear']?> <br/>
                </li>
                <br />
            <?php endforeach; ?>
        </ul>
    </body>
</html>
