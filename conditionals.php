<?php
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
<?php
    include 'includes/header.php';
    ?>
<?php
    $x = 1;
    if ($x == 1) {
          echo "Daniel is very handsome!";
    }
    elseif ($x == 2) {
        echo "Daniel is kinda handsome!";
    }
    elseif ($x == 3) {
        echo "Daniel is kinda handsome!";
    }
    elseif ($x == 4) {
        echo "Daniel is kinda handsome!";
    }
    else  {
        echo "Daniel is very ugly!";
    }
    ?>
    
 
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </html>