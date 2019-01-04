<?php
// Start the session
session_start();
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
    <div class="container-fluid align-middle" style="text-align:center;background-color:transparent;height:100vh;">

        <h2 class="display-2 text-white font-weight-bold pt-4" style="color:black !important;">YAHTZEE</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once("functions.php");
  $aantalspelers = $_POST["aantalspelers"];
  $_SESSION["aantalspelers"] = $aantalspelers;
  echo "Aantal spelers: ".$aantalspelers."<br/>";

  echo "<form method=\"post\" action=\"startgame.php\"><div class=\"form-group\">";

  for ($i=1;$i<=$aantalspelers;$i++) {
    echo printInput($i);
  }

  echo "<input type=\"submit\" class=\"btn btn-primary\" type=\"button\" value=\"OK\">";
  echo "</div></form>";

} else {
?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <label for="aantalspelers" class="labelaantal">Aantal spelers</label>
                <input type="number" min="1" max="4" id="aantal" class="form-control mb-5 inputaantal" name="aantalspelers" style="">
                <button class="btn btn-primary" type="button">OK</button>
            </div>
        </form>

<?php
}
?>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>