<?php

$movieTable=[
    ['ile au tresore','youri yakovleve','evgeniy papernyy','walerij bessarab'],
    ['pirates of treasure','lance henriksen','leigh scott','tom nager'],
    ['docteur jekyll','eddie izzard','scott chambers','lindsay duncan']
];

foreach ($movieTable as $movie)

{echo "dans le film " . $movie [0] . ", "
     . "les principaux acteurs sont :" . $movie[1] .", "
      . $movie[2] ."," . $movie[3] ."," . "<br>";}


?>