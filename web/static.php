<?php 
class Math {
    public static $number = 2;
    static function suqared(){
        $input = self::$number;
        return $input*$input;
    }
}
echo Math::$number;
echo Math::suqared();

?>