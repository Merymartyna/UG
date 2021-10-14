<?php
  function pierwszaFunkcja() {
    return "Wiadomość z funkcji</br>";
  }
  echo pierwszaFunkcja();
  function funkcjazargumentami(
    $imie, 
    $nazwisko="Nowak"){
      return "Hello, " . $imie . " " . $nazwisko . "</br>";
    }
    echo funkcjazargumentami("Martyna", "Lange");
  function funkcjaZNienananaLiczbaArgumentow() {
    $arg = func_get_args();
    echo "Numer: " . $arg[0] . "</br>";
  }
funkcjaZNienananaLiczbaArgumentow("1");
funkcjaZNienananaLiczbaArgumentow("2");
?>