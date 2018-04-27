<html>
  <head>
    <link href="index.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>



<?php



$livre1 = array (

	'prix' => 20,
	'note' => 4,
	'prime' => 'false',
	'titre' => 'le roi arthur',
 );


$livre2 = array (
	'prix' => 28,
	'note' => 3,
	'prime' => 'true',
	'titre' => 'seigneur des anneaux',
);

$livre3 = array (
  'prix' => 15,
  'note' => 5,
  'prime' => 'false',
  'titre' => 'hercules',
);

$livre4 = array (
  'prix' => 27,
  'note' => 4,
  'prime' => 'true',
  'titre' => 'Peter pan',
);

$livre5 = array (
  'prix' => 22,
  'note' => 1,
  'prime' => 'false',
  'titre' => 'noob',
);

$livre6 = array (
  'prix' => 9,
  'note' => 3,
  'prime' => 'true',
  'titre' => 'seigneur du temps',
);

$livre7 = array (
  'prix' => 28,
  'note' => 3,
  'prime' => 'false',
  'titre' => 'le dôme',
);

$livre8 = array (
  'prix' => 50,
  'note' => 5,
  'prime' => 'true',
  'titre' => 'le roi lion',
);

$livre9 = array (
  'prix' => 100,
  'note' => 5,
  'prime' => 'true',
  'titre' => 'attrape moi si tu peux',
);

$livre10 = array (
  'prix' => 28,
  'note' => 3,
  'prime' => 'true',
  'titre' => 'les anneaux',
);
 
$livre = array($livre1, $livre2, $livre3, $livre4, $livre5, $livre6, $livre7, $livre8, $livre9, $livre10,);


foreach ($livre as $livre) {
	if ($livre['prime']=='true') {
      echo '<div class="tableau">';
      echo '<ul>';
		  echo '<li>' ."". ' le livre : '.$livre['titre']. '</li>';
      echo  '<li>' ."". ' le prix : ' .$livre['prix']. '</li>';
      echo  '<li>' ."".' la note : ' .$livre['note']. '</li>';
      echo  '<li>' ."".' livraison prime ' .$livre['prime']. '</li>';
      echo '</ul>';
      echo '</div>';
      	
  }
	else  {
    echo '<div class="tableau1">';
    echo '<ul>';
		echo '<li>' ."".' le livre : '.$livre['titre']. '</li>'; 
    echo '<li>' ."".' le prix : ' .$livre['prix']. '</li>';
    echo '<li>' ."".' la note : ' .$livre['note']. '</li>';
    echo '<li>' ."".' livraison prime : ' .$livre['prime']. '</li>';
    echo '</div>';
		}
 }

?>