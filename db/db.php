<?php
  $productions = [
    new Movie(2010, 148, 'Inception', ['Azione', 'Sci-fi'], new Media ('Inception.webp', 'Inception')),
    new Movie(1968, 112, 'Il pianeta delle scimmie', ['Fantascienza'], new Media ('scimmie.avif', 'Il pianeta delle scimmie') ),
    new Movie(2013, 180, 'The Wolf of Wall Street', ['Drammatico', 'Giallo'], new Media ('the-wolf-of-wall-street.jpg', 'The Wolf of Wall Street')),
    new TvSerie(2005, 2014, 208, 9, 'How I Met Your Mother', ['Sitcom'], new Media ('How-I-Met-Your-Mother.jpg', 'How I Met Your Mother') ),
    new TvSerie(2011, 2019, 73, 8, 'Game of Thrones', ['fantastico', 'drammatico', 'azione'], new Media ('game-thrones.jpg', 'Game of Thrones') ),
    new TvSerie(2013, 2021, 89, 6, 'Vikings', ['drammatico', 'storico', 'azione', 'avventura'], new Media ('vikings.avif', 'Vikings') ),
    new TvSerie(2013, 2023, 87, 4, 'Shingeki no Kyojin', ['drammatico', 'azione'], new Media ('aot2.jpeg', 'shingeki no kyojin') ),
    new TvSerie(2013, 2023, 87, 4, 'Shingeki no Kyojin', ['drammatico', 'azione'], new Media ('aot.webp', 'shingeki no kyojin') ),
    new TvSerie(2013, 2023, 87, 4, 'Shingeki no Kyojin' , ['drammatico', 'azione'], new Media ('aot3.avif', 'shingeki no kyojin') ),
  ];
?>