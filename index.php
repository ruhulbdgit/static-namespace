<?php
// class Testt
// {
//     public $results = 5;
//     public function showResults()
//     {
//         return $this->results;
//     }
// }
// $Test = new Testt();
// echo $Test->showResults();
class Test
{
    public static $results = 10;
    public static function showResults()
    {
        return self::$results;
    }
    public static function addFive()
    {
        return self::showResults() + 5;
    }
}
//static mathod &  properties system in php 
echo Test::showResults();
echo "<br>";
echo Test::addFive();
