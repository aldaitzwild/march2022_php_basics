<?php

include 'header.php';

echo 'Hello Fellowship !' . "\n";

$ringBearer = "Frodo\n";
echo $ringBearer;

$ringMaker = 'Sauron';
echo "$ringMaker\n";

$numberOfFellowshipMembers = 9;
$isRingWorned = false;

$ringBearer = 'Gollum';
echo "$ringBearer\n";

$numberOfFellowshipMembers++;
echo $numberOfFellowshipMembers . "\n";

$middleEarth = '';
echo $middleEarth;


echo "Le porteur est $ringBearer\n";

$message = "L'anneau est porté par $ringBearer";
echo $message . " et $ringMaker le recherche.\n";

echo strtoupper($ringMaker) . "\n";

$ringMaker = strtoupper($ringMaker);
echo $ringMaker . "\n";

require 'wizard.php';
echo $wizard;

include 'footer.php';