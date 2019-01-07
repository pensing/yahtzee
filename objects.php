<?php

class dobbelSteen {

    private $dots; //de waarde van de steen, 1-6
    private $selected; //is de steen door de speler geslecteerd

    public function setDots($dots) {
        $this->dots = $dots;
    }

    public function getDots($dots) {
        return $this->dots;        
    }

    public function setSelected($selected) {
        $this->selected = $selected;
    }

    public function getSelected($selected) {
        return $this->selected;        
    }
}

?>