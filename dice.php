<?php
// Start the session
session_start();

require_once("functions.php");
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!--meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Extra CSS -->
    <link rel="stylesheet" href="yahtzee.css" />

    <title>Yahtzee</title>
</head>

<body>

    <!-- Kop/header -->
    <div class="container-fluid align-middle" style="text-align:center;background-color:transparent;">

        <h2 class="display-2 text-white font-weight-bold pt-4" style="color:black !important;">YAHTZEE</h2>

        <div class="container">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="">
        <div class="card card-opacity" style="margin-top: 20px;">
        <div class="row">


        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (!$_SESSION["eindebeurt"]) {
            $worp = $_SESSION["worp"];

            for ($i=0; $i<=5; $i++) {
                $dobbelstenen[$i] = rand(1,6);
            }

            echo '<h3 id="status" class="text-center w-100">Dit is worp '.$worp.'</h3>';
            if ($worp < 3) {$worp += 1; $_SESSION["worp"] = $worp;
            } else {
                echo '<h3 class="text-center w-100">Je hebt 3 keer gegooid!</h3>';
                $eindebeurt = true;
                $_SESSION["eindebeurt"] = $eindebeurt;
            }

            } else {echo '<h3 class="text-center w-100">Je hebt al 3 keer gegooid!</h3>';}
        ?>

        <?php
        } else {
            //Eerste keer (Get-situatie)
            for ($i=0; $i<=4; $i++) {
                $dobbelstenen[$i] = 0;
            }
            $worp = 1;
            $_SESSION["worp"] = $worp;
            $eindebeurt = false;
            $_SESSION["eindebeurt"] = $eindebeurt;
            echo '<h3 class="text-center w-100">Doe je eerste worp</h3>';
        }
        ?>

        <div class="text-center mx-auto" style="margin: 0 auto;">
        <?php
        for ($i=0; $i<=4; $i++) {
                echo '<div class="dobbelcontainer">' . printDobbel($dobbelstenen[$i]) . '</div>';
            }
        ?>
        </div>

        </div>

        <div class="row text-center pt-3" style="width:100%;">
        <input type="submit" value="Dobbelen" class="btn btn-danger btn-lg mx-auto mb-5">
        </div>

        </div>
        </form>
        </div>

        <div class="text-center pt-3">
        <a href='dice.php'><button class="btn btn-dark btn-lg" type="button">Reset</button></a>
        </div>
        <div class="text-center pt-3">
        <a href="card.php" class=""><button type="button" class="btn btn-warning btn-lg">Kaart invullen</button></a>
        </div>
    
    </div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>