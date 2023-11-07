<?php

  require_once __DIR__ . '/Models/Media.php';
  require_once __DIR__ . '/Models/Production.php';
  require_once __DIR__ . '/Models/Movie.php';
  require_once __DIR__ . '/Models/TvSerie.php';
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

  <div class="container my-5">
    <div class="row">
      <?php foreach($productions as $production){ ?>
      <div class="col-4 my-4">
        <div class="card h-100 m-3">
        <img src="img/<?php echo $production->getImage()->file_name ?>" class="card-img-top" alt="<?php echo $production->getImage()->name ?>">
          <div class="card-body">
            <h5 class="card-title"><?php echo $production->getTitle() ?></h5>
            <h6 class="card-title">Formato: <?php echo get_class($production) ?></h6>
            <p class="card-text">Genere: <?php echo implode("/" , $production->getType() ) ?></p>

            <?php if(get_class($production) == 'Movie'){ ?>
              <p class="card-text">Anno di uscita: <?php echo $production->published_year ?></p>
              <p class="card-text">Durata in minuti: <?php echo $production->running_time ?> minuti</p>
              <p class="card-text">Durata: <?php echo times($production->running_time) ?></p>
            <?php } ?>

            <?php if(get_class($production) == 'TvSerie'){ ?>
              <p class="card-text">Anno di inizio: <?php echo $production->aired_from_year ?></p>
              <p class="card-text">Anno di fine: <?php echo $production->aired_to_year ?></p>
              <p class="card-text">Episodi Totali: <?php echo $production->number_of_episodes ?></p>
              <p class="card-text">Numero Stagioni: <?php echo $production->number_of_seasons ?></p>
            <?php } ?>



          </div>
        </div>
      </div>
      <?php } ?>

    </div>
  </div>


  
</body>
</html>