<?php

    class Weather{

    public static $tempConditions=['cold','mild','hot'];

    public static function determinetheTemp($c){

        return $c*9/5+32;
    }
      public static function determinetheconds($c){
        if($c<19){
          return self::$tempConditions[0].'please dress warmly';
        }else if($c<35){
          return self::$tempConditions[1].'summer time :)';
        }else{
          return self::$tempConditions[2].' <br> please drink water';
        }
    }
  }

     echo Weather::determinetheconds(30);
