<?php

class Arithmetic {
    private $equals;
    private $minus;
    private $multiplied;
    private $devided;

    public function setEquals($equals) {
        $this->equals = $equals;
    }

    public function setMinus($minus) {
        $this->minus = $minus;
    }

    public function setMultiplied($multiplied) {
        $this->multiplied = $multiplied;
    }

    public function setDevided($devided) {
        $this->devided = $devided;
    }

    public function getEquals() {
        return $this->equals;
    }

    public function getMinus() {
        return $this->minus;
    }

    public function getMultiplied() {
        return $this->multiplied;
    }

    public function getDevided() {
        return $this->devided;
    }
}