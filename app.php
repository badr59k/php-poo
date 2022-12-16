<?php declare(strict_types = 1);

require __DIR__.'/Voiture.php';

$v = new Voiture();

$v->SetMarque ('BMW');
echo $v->getMarque();
echo "\n";

$v->setPassagers(5);
echo $v->getPassagers();
echo "\n";

$v->setVitesse(130);
echo $v->getVitesse();
echo "\n";


$v2 = new Voiture();


echo $v2->getMarque();
echo "\n";

echo $v2->getPassagers();
echo "\n";

echo $v2->getVitesse();
echo "\n";

