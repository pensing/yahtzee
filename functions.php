<?php
session_start();

function printInput($speler) {
    $content = '<label class="mr-2">Speler '.$speler.': </label><input type="text" name="speler'.$speler.'"><br/>';  
    return $content;
  }

function resetDobbelen() {
    //alert("Dobbelen gereset");
    if ($_GET['reset']==true) {
    //echo '<script>document.getElementById("status").innerHTML = "Dobbelen gereset"</script>';
    $_SESSION["worp"] = 1;
    $_SESSION["eindebeurt"] = false;
    }
}

function printDotrow($class1, $class2, $class3) {
    $row = '<div class="'.$class1.'"></div><div class="'.$class2.'"></div><div class="'.$class3.'"></div>';
    return $row;
}

function printDobbel($dots) {
    $r1 = printDotrow("nodot","nodot","nodot");
    $r2 = printDotrow("nodot","nodot","nodot");
    $r3 = printDotrow("nodot","nodot","nodot");

    switch ($dots) {
        case 1:
            $r2 = printDotrow("nodot","dot","nodot");;
        break;
        case 2:
            $r1 = printDotrow("nodot","nodot","dot");
            $r3 = printDotrow("dot","nodot","nodot");
            break;
        case 3:
            $r1 = printDotrow("nodot","nodot","dot");
            $r2 = printDotrow("nodot","dot","nodot");
            $r3 = printDotrow("dot","nodot","nodot");
        break;
        case 4:
            $r1 = printDotrow("dot","nodot","dot");
            $r3 = printDotrow("dot","nodot","dot");
        break;
        case 5:
            $r1 = printDotrow("dot","nodot","dot");
            $r2 = printDotrow("nodot","dot","nodot");
            $r3 = printDotrow("dot","nodot","dot");
        break;
        case 6:
            $r1 = printDotrow("dot","nodot","dot");
            $r2 = printDotrow("dot","nodot","dot");
            $r3 = printDotrow("dot","nodot","dot");
        break;
        default:
    }

    $checked = 'checked';

    $content = '
    <div class="dobbel shadow">
    <div class="row">' . $r1 . '</div>
    <div class="row">' . $r2 . '</div>
    <div class="row">' . $r3 . '</div>
    </div>
    <div class="" style="padding: 10px;"><input type="checkbox" ' . $checked . '></div>
    ';  
    return $content;
  }

function printTable($speler, $getSession) {
    
    if ($getSession) {
    $aantalEen = $_POST["aantalEen"];
    $_SESSION['aantalEen'] = $aantalEen;
    $aantalTwee = $_POST["aantalTwee"];
    $_SESSION['aantalTwee'] = $aantalTwee;
    $aantalDrie = $_POST["aantalDrie"];
    $_SESSION['aantalDrie'] = $aantalDrie;
    $aantalVier = $_POST["aantalVier"];
    $_SESSION['aantalVier'] = $aantalVier;
    $aantalVijf = $_POST["aantalVijf"];
    $_SESSION['aantalVijf'] = $aantalVijf;
    $aantalZes = $_POST["aantalZes"];
    $_SESSION['aantalZes'] = $aantalZes;
    $totaal = ($aantalEen*1)+($aantalTwee*2)+($aantalDrie*3)+($aantalVier*4)+($aantalVijf*5)+($aantalZes*6);
    if ($totaal>=63) {
        $extra = 35;
    } else { $extra = 0; }
    $totaalDeel1 = $totaal + $extra;
    $_SESSION['totaalDeel1'] = $totaalDeel1;
    //$totaalDeel2 = 0;
    //$totaalGeneraal = 0;

    //$totaal = ($aantalDrie*3)+($aantalTwee*2);
    } else {
        $aantalEen = $aantalTwee = $aantalDrie = $aantalVier = $aantalVijf = $aantalZes = "";
        $totaal = 0;
        $extra = 0;
        $totaalDeel1 = 0;
        $totaalDeel2 = 0;
        $totaalGeneraal = 0;
    }

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
      <td><input type="number" min="0" max="5" id="aantalEen" value="'. $aantalEen . '" class="form-control" name="aantalEen" style="width: 70px;"></td>
      <td>'. $aantalEen*1 . '</td>
    </tr>
    <tr>
      <td>TWEEEN</td>
      <td><input type="number" min="0" max="5" id="aantalTwee" value="'. $aantalTwee . '" class="form-control" name="aantalTwee" style="width: 70px;"></td>
      <td>'. $aantalTwee*2 . '</td>
    </tr>
    <tr>
      <td>DRIEEN</td>
      <td><input type="number" min="0" max="5" id="aantalDrie" value="'. $aantalDrie . '" class="form-control" name="aantalDrie" style="width: 70px;"></td>
      <td>'. $aantalDrie*3 . '</td>
    </tr>
    <tr>
      <td>VIEREN</td>
      <td><input type="number" min="0" max="5" id="aantalVier" value="'. $aantalVier . '" class="form-control" name="aantalVier" style="width: 70px;"></td>
      <td>'. $aantalVier*4 . '</td>
    </tr>
    <tr>
      <td>VIJFEN</td>
      <td><input type="number" min="0" max="5" id="aantalVijf" value="'. $aantalVijf . '" class="form-control" name="aantalVijf" style="width: 70px;"></td>
      <td>'. $aantalVijf*5 . '</td>
    </tr>
    <tr>
      <td>ZESSEN</td>
      <td><input type="number" min="0" max="5" id="aantalZes" value="'. $aantalZes . '" class="form-control" name="aantalZes" style="width: 70px;"></td>
      <td>'. $aantalZes*6 . '</td>
    </tr>
    <tr>
      <td colspan="2">TOTAAL aantal punten</td>
      <td class="px2">' . $totaal . '</td>
    </tr>
    <tr>
      <td>EXTRA</td>
      <td>(Totaal>=63) 35</td>
      <td class="px2">' . $extra . '</td>
    </tr>
    <tr>
      <td colspan="2">TOTAAL deel 1</td>
      <td class="px2">' . $totaalDeel1 . '</td>
    </tr>
    </tbody>
</table>';
return $content;
}



function printTable2($speler, $getSession) {
    
    if ($getSession) {
        $aantalKind = $_POST["aantalKind"];
        $_SESSION['aantalKind'] = $aantalKind;
        $aantalCarre = $_POST["aantalCarre"];
        $_SESSION['aantalCarre'] = $aantalCarre;
        $aantalChance = $_POST["aantalChance"];
        $_SESSION['aantalChance'] = $aantalChance;
        $aantal25 = $_POST["aantal25"];
        $_SESSION['aantal25'] = $aantal25;
        $aantal30 = $_POST["aantal30"];
        $_SESSION['aantal30'] = $aantal30;
        $aantal40 = $_POST["aantal40"];
        $_SESSION['aantal40'] = $aantal40;
        $aantal50 = $_POST["aantal50"];
        $_SESSION['aantal50'] = $aantal50;
        $totaalDeel1 = $_SESSION['totaalDeel1'];
        $totaalDeel2 = ($aantalKind)+($aantalCarre)+($aantalChance)+($aantal25)+($aantal30)+($aantal40)+($aantal50);
        $totaalGeneraal = $totaalDeel1 + $totaalDeel2;
    
        } else {
            //$totaalDeel1 = 0;
            $aantalKind = $aantalCarre = $aantalChance = $aantal25 = $aantal30 = $aantal40 = $aantal50 = "";
            $totaalDeel1 = 0;
            $totaalDeel2 = 0;
            $totaalGeneraal = 0;
            }
    
        $content = '<table class="table table-bordered">
    <thead>
    <tr>
      <th scope="col">Deel 2</th>
      <th scope="col">Telling</th>
      <th scope="col">Spel 1</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td>THREE OF A KIND</td>
      <td>totaal vd 5</td>
      <td><input type="number" min="0" max="30" id="threeofakind" value="'. $aantalKind . '" class="form-control" name="aantalKind" style="width: 70px;"></td>
    </tr>
    <tr>
      <td>CARRE</td>
      <td>totaal vd 5</td>
      <td><input type="number" min="0" max="30" id="carre" value="'. $aantalCarre . '" class="form-control" name="aantalCarre" style="width: 70px;"></td>
    </tr>
    <tr>
      <td>FULL HOUSE</td>
      <td>25</td>
      <td class="px2"><input type="number" min="25" max="25" id="chance" value="'. $aantal25 . '" class="form-control" name="aantal25" style="width: 70px;"></td>
    </tr>
    <tr>
      <td>KLEINE STRAAT</td>
      <td>30</td>
      <td class="px2"><input type="number" min="30" max="30" id="chance" value="'. $aantal30 . '" class="form-control" name="aantal30" style="width: 70px;"></td>
    </tr>
    <tr>
      <td>GROTE STRAAT</td>
      <td>40</td>
      <td class="px2"><input type="number" min="40" max="40" id="chance" value="'. $aantal40 . '" class="form-control" name="aantal40" style="width: 70px;"></td>
    </tr>
    <tr>
      <td>YAHTZEE</td>
      <td>50</td>
      <td class="px2"><input type="number" min="50" max="50" id="chance" value="'. $aantal50 . '" class="form-control" name="aantal50" style="width: 70px;"></td>
    </tr>
    <tr>
      <td>CHANCE</td>
      <td>totaal vd 5</td>
      <td><input type="number" min="0" max="30" id="chance" value="'. $aantalChance . '" class="form-control" name="aantalChance" style="width: 70px;"></td>
    </tr>
    <tr>
      <td colspan="2">TOTAAL deel 2</td>
      <td class="px2">' . $totaalDeel2 . '</td>
    </tr>
    <tr>
      <td colspan="2">TOTAAL generaal</td>
      <td class="px2">' . $totaalGeneraal . '</td>
    </tr>
  </tbody>
</table>';
return $content;
}

?>