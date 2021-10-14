<?php
$liczbaw=8;

if($liczbaw < 10){
  echo "True";
}else{
  echo "False";
}

echo '</br>';

$liczbaInna=10;

if($liczbaInna<10){
  echo 'Mniejsze niz 10' . '</br>';
} else if ($liczbaInna=10){
  echo 'Równe do 10' . '</br>';
} else {
  echo 'Musi byc wieksze niz 10' . '</br>';
}

$l=7;

switch($l) {
  case 7:
    echo "To musi byc liczba siedem!" . "</br>";
    break;
  case 8:
    echo "To musi byc liczba osiem!" . "</br>";
    break;
  case 9:
    echo "To musi byc liczba dziewiec!" . "</br>";
    break;
}
?>