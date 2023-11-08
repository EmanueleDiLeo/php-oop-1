<?php

  include __DIR__ . "/partials/functions.php";

  try{
    require_once __DIR__ . '/Traits/Year.php';
    require_once __DIR__ . '/Models/Media.php';
    require_once __DIR__ . '/Models/Production.php';
    require_once __DIR__ . '/Models/Movie.php';
    require_once __DIR__ . '/Models/TvSerie.php';
    require_once __DIR__ . '/db/db.php';
  }
  catch(Exception $e){
    $error = $e->getMessage();
  }

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

    <?php if(isset($error)){ ?>
      <div class="alert alert-danger " role="alert">
        <?php echo $error ?>
      </div>
    <?php } else { ?>
    <div class="row">
      <?php foreach($productions as $production){ ?>
      <div class="col-4 my-4">
        <div class="card h-100 m-3">
        <img src="img/<?php echo $production->getImage()->file_name ?>" class="card-img-top h-100 object-fit-cover" alt="<?php echo $production->getImage()->name ?>">
          <div class="card-body">
            <h3 class="card-title text-danger mb-4"><?php echo $production->getTitle() ?></h3>
            <p class="card-text"><strong>Formato: </strong><?php echo get_class($production) ?></p>
            <p class="card-text"><strong>Genere: </strong><?php echo implode(", " , $production->getType() ) ?></p>

            <!-- Utilizzo dell'override -->
            <?php echo $production->getFullInfo() ?>

            <!--  Utilizzando il get_class
            <?php if(get_class($production) == 'Movie'){ ?>
              <p class="card-text">Anno di uscita: <?php echo $production->start_published_year ?></p>
              <p class="card-text">Durata in minuti: <?php echo $production->running_time ?> minuti</p>
              <p class="card-text">Durata: <?php echo times($production->running_time) ?></p>
            <?php } ?>

            <?php if(get_class($production) == 'TvSerie'){ ?>
              <p class="card-text">Anno di inizio: <?php echo $production->start_published_year ?></p>
              <p class="card-text">Anno di fine: <?php echo $production->aired_to_year ?></p>
              <p class="card-text">Episodi Totali: <?php echo $production->number_of_episodes ?></p>
              <p class="card-text">Numero Stagioni: <?php echo $production->number_of_seasons ?></p>
            <?php } ?>
            -->

          </div>
        </div>
      </div>
      <?php } ?>

    </div>
    <?php } ?>

  </div>


  
</body>
</html>