<?php

  require_once __DIR__ . '/Models/Media.php';
  require_once __DIR__ . '/Models/Movie.php';
  require_once __DIR__ . '/db/db.php';

  include __DIR__ . "/partials/functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


  <title>Movie</title>
</head>
<body>

  <div class="container mt-5">
    <div class="row">
      <?php foreach($movies as $movie){ ?>
      <div class="col-4">
        <div class="card m-3">
        <img src="img/<?php echo $movie->image->file_name ?>" class="card-img-top" alt="<?php echo $movie->image->name ?>">
          <div class="card-body">
            <h5 class="card-title"><?php echo $movie->title ?></h5>
            <p class="card-text"><?php echo implode("/" , $movie->type ) ?></p>
            <p class="card-text"><?php echo $movie->duration ?> minuti</p>
            <p class="card-text"><?php echo times($movie->duration) ?></p>
          </div>
        </div>
      </div>
      <?php } ?>

    </div>
  </div>


  
</body>
</html>