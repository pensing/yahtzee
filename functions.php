<?php

function printInput($speler) {
    $content = '<label>Naam speler '.$speler.': </label><input type="text" name="speler'.$speler.'"><br/>';  
    return $content;
  }

 function printDobbel($dots) {
    $r1 = '<div class="nodot"></div><div class="nodot"></div><div class="nodot"></div>';
    $r2 = '<div class="nodot"></div><div class="nodot"></div><div class="nodot"></div>';
    $r3 = '<div class="nodot"></div><div class="nodot"></div><div class="nodot"></div>';

    switch ($dots) {
        case 1:
            $r2 = '<div class="nodot"></div><div class="dot"></div><div class="nodot"></div>';
            break;
        case 2:
            $r1 = '<div class="nodot"></div><div class="nodot"></div><div class="dot"></div>';
            $r3 = '<div class="dot"></div><div class="nodot"></div><div class="nodot"></div>';
            break;
        case 3:
            $r1 = '<div class="nodot"></div><div class="nodot"></div><div class="dot"></div>';
            $r2 = '<div class="nodot"></div><div class="dot"></div><div class="nodot"></div>';
            $r3 = '<div class="dot"></div><div class="nodot"></div><div class="nodot"></div>';
        break;
        case 4:
            $r1 = '<div class="dot"></div><div class="nodot"></div><div class="dot"></div>';
            $r3 = '<div class="dot"></div><div class="nodot"></div><div class="dot"></div>';
        break;
        case 5:
            $r1 = '<div class="dot"></div><div class="nodot"></div><div class="dot"></div>';
            $r2 = '<div class="nodot"></div><div class="dot"></div><div class="nodot"></div>';
            $r3 = '<div class="dot"></div><div class="nodot"></div><div class="dot"></div>';
        break;
        case 6:
            $r1 = '<div class="dot"></div><div class="nodot"></div><div class="dot"></div>';
            $r2 = '<div class="dot"></div><div class="nodot"></div><div class="dot"></div>';
            $r3 = '<div class="dot"></div><div class="nodot"></div><div class="dot"></div>';
        break;
        default:
    }

    $content = '
    <div class="row">' . $r1 . '</div>
    <div class="row">' . $r2 . '</div>
    <div class="row">' . $r3 . '</div>
    ';  
    return $content;
  }
    
function printTable($speler) {
    $content = '<table class="table table-bordered">
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
      <td><input type="number" min="0" max="5" id="aantalEen" class="form-control" name="aantal" style="width: 70px;"></td>
      <td>_</td>
    </tr>
    <tr>
      <td>TWEEEN</td>
      <td><input type="number" min="0" max="5" id="aantalTwee" class="form-control" name="aantal" style="width: 70px;"></td>
      <td>_</td>
    </tr>
    <tr>
      <td>DRIEEN</td>
      <td><input type="number" min="0" max="5" id="aantalDrie" class="form-control" name="aantal" style="width: 70px;"></td>
      <td>_</td>
    </tr>
    <tr>
      <td>VIEREN</td>
      <td><input type="number" min="0" max="5" id="aantalVier" class="form-control" name="aantal" style="width: 70px;"></td>
      <td>_</td>
    </tr>
    <tr>
      <td>VIJFEN</td>
      <td><input type="number" min="0" max="5" id="aantalVijf" class="form-control" name="aantal" style="width: 70px;"></td>
      <td>_</td>
    </tr>
    <tr>
      <td>ZESSEN</td>
      <td><input type="number" min="0" max="5" id="aantalZes" class="form-control" name="aantal" style="width: 70px;"></td>
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