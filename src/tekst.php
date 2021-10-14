<div class="flex flex-row flex-wrap w-full justify-center font-bold text-3xl mb-2">
  Tekst
</div>
<div class="flex flex-row flex-wrap w-full justify-center text-xl mb-2">
  <?php
    $spacja=" ";
    $tekst="Programaowanie w PHP";

    print_r(strlen($tekst));

    echo "</br>";

    $zlesformatowanytekst="Programowanie w PhP";

    print_r(strtolower($zlesformatowanytekst));

    echo "</br>";

    print_r(strtoupper($zlesformatowanytekst));

    echo "</br>";

    $krotkiTekst="kasztan";
    print_r(str_repeat($krotkiTekst . $spacja, 5));

    echo "</br>";

    $innyTekst="dziobak";

    print_r(str_repeat($innyTekst . $spacja, 15));

    echo "</br>";

    $tekstdoodwrocenia="tekst";
    print_r(strrev($tekstdoodwrocenia));

  echo "</br>";

    $tekstdomieszania="Tekst do pomieszania";
    print_r(str_shuffle($tekstdomieszania));

  echo "</br>";

  $tekstdowybrania="Pierwsza czesc, druga czesc";

  print_r(substr($tekstdowybrania, 15,20));

  echo "</br>";

  $tekstdozmiany="cytryna";
  print_r(str_replace($tekstdozmiany, "cytryna", "kiwi"));

  echo "</br>";

  $slowo="Konstantypoitanczykowna";
  $spacje=wordwrap($slowo, 5, " ", true); 

  echo "$spacje";


  ?>
</div>