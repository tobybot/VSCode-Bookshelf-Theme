

<?php
  $age = 100;
  $name = 'wes';
  $cool = true;
  $sss = array();  
  $yep = new Bloop();

  class Bloop {
    var $ding;
    private $dong;

    function __construct() {
      $dong = -4;
      $this->ding = $this->peep('foof',$dong);
    }

    function peep($a,$b){
      echo 'zonk' . $a . strlen($b);
    }

  }

  ?>