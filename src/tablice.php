<?php
  echo "<h1>Tablice</tablice</h1></br>";

  $tablica = array(
    "pierwszy", "drugi", "czwarty"
  );

  foreach($tablica as $wartosc){
    echo("$wartosc \n </br>");
  }
  $ilosc= count($tablica);

  echo "tablica zawiera $ilosc elementy </br>";

  echo (print_r($tablica));

  $nowatablica= array("raz", "dwa", "trzy", "raz");

  echo("</br>$nowatablica[1]");

  $nowatablica[1]="cztery";
    echo("</br>Po zmianie</br>$nowatablica[1]</br>");
print_r (array_reverse($nowatablica));

function sprawdzCzyJest($wartoscSzukana, $tablica){
  foreach($wartoscSzukana as $w){
      if ($w == $tablica){
        echo "Znaleziony element: $tablica </br>";
        return;
      }
  }
  echo "Nie mogę znaleźć elementu: $tablica </br>";
}
$tab= array("tak", "nie", "nwm");
sprawdzCzyJest($tab, "tak");
sprawdzCzyJest($tab, "oj");

$imiona= array('Jan', 'Monika', 'Dominik', 'Patryk');
natcasesort($imiona);
print_r($imiona);

$tablicaLiczbowa= array('1', '2', '4', '9', '8', '7', '6');
echo "</br>";
rsort($tablicaLiczbowa);
print_r($tablicaLiczbowa);
echo "</br></br>";
shuffle($tablicaLiczbowa);
print_r($tablicaLiczbowa);

$owoce= array('a' => 'ananas', 'b' => 'banan', 'c' => 'cytryna');

$warzywa=array('m' => 'marchew', 'z' => 'ziemniak');

print_r (array_merge($owoce, $warzywa));

$male= array('wszystkie', 'te', 'slowa', 'sa', 'wielkimi', 'literami');
$duze= array_map(strtoupper, $male);
echo "</br>";
print_r($duze);
?>