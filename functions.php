<?php

function printInput($speler) {
  $content = '<label>Naam speler '.$speler.': </label><input type="text" name="speler'.$speler.'"><br/>';  
  return $content;
}

?>