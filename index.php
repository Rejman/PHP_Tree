<?php
include 'Dir.php';

//folder root
$root = new Dir("root");

$dokumenty = new Dir("Dokumenty");
$muzyka = new Dir("Muzyka");

$root->addFolder($dokumenty);
$root->addFolder($muzyka);

$nirvana = new Dir("Nirvana");
$pinkFloyd = new Dir("Pink Floyd");
$muzyka->addFolder($nirvana);
$unpluckd = new Dir("unpluckd");
$nirvana->addFolder($unpluckd);
$muzyka->addFolder($pinkFloyd);

$ksiazki = new Dir("Ksiazki");
$dokumenty->addFolder($ksiazki);
$hobbit = new Dir("Tollkien");
$ksiazki->addFolder($hobbit);

$root->showTree();

echo "----------------------------------------------<br>";

$muzyka->showTree();

echo $hobbit->getName();