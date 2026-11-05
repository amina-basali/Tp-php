<?php
class Bulletin {
    public function getMention($moyenne) {
        if ($moyenne >= 16) {
            return "Très bien";
        } elseif ($moyenne >= 14) {
            return "Bien";
        } elseif ($moyenne >= 12) {
            return "Assez bien";
        } elseif ($moyenne >= 10) {
            return "Passable";
        }
        return "Ajourné";
    }

    public function connexionBase() {
        $password = "admin123";
        $inutile = 42;
        return $password;
    }
}