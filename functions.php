<?php

function printInput($speler) {
  $content = '<label>Naam speler '.$speler.': </label><input type="text" name="speler'.$speler.'"><br/>';  
  return $content;
}

function printTable($speler) {
    $content = '    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Deel 1</th>
      <th scope="col">Telling</th>
      <th scope="col">Spel 1</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>ENEN</td>
      <td>_</td>
      <td>_</td>
    </tr>
    <tr>
      <td>TWEEEN</td>
      <td>_</td>
      <td>_</td>
    </tr>
    <tr>
      <td>DRIEEN</td>
      <td>_</td>
      <td>_</td>
    </tr>
    <tr>
      <td>VIEREN</td>
      <td>_</td>
      <td>_</td>
    </tr>
    <tr>
      <td>VIJFEN</td>
      <td>_</td>
      <td>_</td>
    </tr>
    <tr>
      <td>ZESSEN</td>
      <td>_</td>
      <td>_</td>
    </tr>
    <tr>
      <td colspan="2">TOTAAL aantal punten</td>
      <td>_</td>
    </tr>
    <tr>
      <td>EXTRA</td>
      <td>35</td>
      <td>_</td>
    </tr>
    <tr>
      <td colspan="2">TOTAAL extra</td>
      <td>_</td>
    </tr>
    <tr>
      <td>DEEL 2</td>
      <td>_</td>
      <td>_</td>
    </tr>
    <tr>
      <td>THREE OF A KIND</td>
      <td>totaal vd 5</td>
      <td>_</td>
    </tr>
    <tr>
      <td>CARRE</td>
      <td>totaal vd 5</td>
      <td>_</td>
    </tr>
    <tr>
      <td>FULL HOUSE</td>
      <td>25</td>
      <td>_</td>
    </tr>
    <tr>
      <td>KLEINE STRAAT</td>
      <td>30</td>
      <td>_</td>
    </tr>
    <tr>
      <td>GROTE STRAAT</td>
      <td>40</td>
      <td>_</td>
    </tr>
    <tr>
      <td>YAHTZEE</td>
      <td>50</td>
      <td>_</td>
    </tr>
    <tr>
      <td>CHANCE</td>
      <td>totaal vd 5</td>
      <td>_</td>
    </tr>
    <tr>
      <td>TOTAAL deel 2</td>
      <td>=></td>
      <td>_</td>
    </tr>
    <tr>
      <td>TOTAAL deel 1</td>
      <td>=></td>
      <td>_</td>
    </tr>
    <tr>
      <td>TOTAAL generaal</td>
      <td>=></td>
      <td>_</td>
    </tr>
  </tbody>
</table>';
return $content;
}

?>