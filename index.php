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
  </body>
</html>
