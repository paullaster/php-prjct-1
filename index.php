<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>php demo</title>
  </head>
  <body>
    <h1>
      You have
      <?php
        $name = 'Road to React';
        $read = false;
        if ($read) {
          echo "read $name";
        }else {
          echo " not read $name";
        }
      ?>
    </h1>
    <div>
      <h2>Books recommendation</h2>
      <?php
        $books = [
          'Road to React',
          'Road to graphql',
          'Road to TypeScript',
        ];
      ?>
      <?php foreach($books as $book)?>
        <
      <?php?>
    </div>
  </body>
</html>
