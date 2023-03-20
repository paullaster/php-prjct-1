<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Associative Arrays</title>
    </head>
    <body>
        <h1>Associative arrays</h1>
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
        <ul>
            <?php foreach ($books as $book) : ?>
                <li>
                    <span>Book title: <?=$book['name']?></span>
                    <span>Author: <?=$book['author']?></span>
                    <span>Publication year: <?=$book['publicationYear']?></span>
                    <a href="<?=$book['url']?>">Buy the book here</a>
                </li>
            <?php endforeach;?>
        </ul>
    </body>
</html>