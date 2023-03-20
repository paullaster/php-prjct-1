<!DOCTYPE htm>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP LAMBDA FUNCTIONS : ANONYMOUS FUNCTION</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>PHP LAMBDA FUNCTIONS</h1>
        <?php
            function filter($items, $fn) {
                $filteredItems = [];
                foreach ($items as $item){
                    if($fn($item)) {
                        $filteredItems[] = $item;
                    }
                }
                return $filteredItems;
            }
        ?>
        <?php
             $books = [
                [
                    'name' => 'Road to React',
                    'url' => 'http://reactjs.org',
                    'author' => 'Robin Wieruch',
                    'publicationYear' => '2020'
                ],
                [
                    'name' => 'Road to Typescript',
                    'url' => 'http://typescript.org',
                    'author' => 'Robin Wieruch',
                    'publicationYear' => '2019'
                ],
                [
                    'name' => 'Road to GraphQl',
                    'url' => 'http://graphql.org',
                    'author' => 'Robin Wieruch',
                    'publicationYear' => '2021'
                ]
            ];
        ?>
        <?php
            $filteredBooks = filter($books, function($book){
                return $book['publicationYear'] >='2020';
            })
        ?>
        <ul>
            <?php
                foreach($filteredBooks as $book) :
            ?>
                <li>
                    <span>Name: </span><?= $book['name'] ?> <br>
                    <span>Author: </span><?= $book['author'] ?> <br>
                    <span>Publication year: </span><?= $book['publicationYear'] ?> <br>
                    <a href="<?=$book['url']?>">Link here</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>