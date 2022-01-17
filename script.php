<?php

$minimum = $_POST['minimum'];
$maximum = $_POST['maximum'];

if (!is_numeric($minimum) || !is_numeric($maximum) || $maximum < $minimum || $maximum > getrandmax()){
    header("Location: index.php?error=1");
}

$random = rand($minimum, $maximum);
echo "Nombre aléatoire généré : ".$random;
