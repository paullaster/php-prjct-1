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
        <?php foreach ($books as $book) : ?>
            
        <?php endforeach;?>
    </body>
</html>