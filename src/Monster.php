<?php
include "MonsterAir.php";
include "MonsterDarat.php"; 
include "MonsterUdara.php";
class Monster{
    
    public $_nyawa;

    function setNyawa($nyawa){
        $this->_nyawa = $nyawa;
    }   
    function getNyawa(){
        return $this->_nyawa;
    }
    function Menyerang(){
        return "Monster Menyerang";
    }
    function MelarikanDiri(){
        return "Monster Melarikan Diri";
    }
}
?>