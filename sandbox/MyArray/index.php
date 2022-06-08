<?php

use MyArray\MyDebug;
include_once($_SERVER['DOCUMENT_ROOT'] . 'sandbox/init.php');

$aKey = [1,2,3,4,5];
$aVolue =['Петя','Вася','Миша','Женя','Костя'];

$debug = new MyDebug();

$arrayCombine = array_combine($aKey, $aVolue);
$debug->setData($arrayCombine)->debug();

$debug->setData(array_values($arrayCombine))->debug();

$debug->setData(array_keys($arrayCombine))->debug();

$debug->setData(array_flip($arrayCombine))->debug();

list($a, $b, $c, $d, $f) = $arrayCombine;
echo $a.' '.$b.' '.$c.' '.$d.' '.$f;

$arrayExplode = explode(',', 'Вася,Маша,Кристина,Петя');
$debugHelper = new \MyArray\HelperDebug($arrayExplode);

$arrayPregSplit = preg_split('/[\s,]+/', "hypertext language, programming");
$debugHelper = new \MyArray\HelperDebug($arrayPregSplit);

$arrayExtract = [
        'p1'=>'10',
        'p2'=>'102',
        'p3'=>'103',
        'p4'=>'104',
        'p5'=>'104'
    ];

extract($arrayExtract);
echo $p1.' '.$p2.' '.$p3.' '.$p4.' '.$p5;

$arrayCompact = compact('p1', 'p2', 'p3', 'p4', 'p5');
$debugHelper = new \MyArray\HelperDebug($arrayCompact);

$arrayFilter = array_filter($arrayCompact, function ($arrayCompact){
    return $arrayCompact > 102;
});
$debugHelper = new \MyArray\HelperDebug($arrayFilter);

$arrayUnique = array_unique($arrayFilter);
$debugHelper = new \MyArray\HelperDebug($arrayUnique);

echo array_sum($arrayUnique).'<br>';
echo array_product($arrayUnique).'<br>';

$arrayColumn = [
   'p1' => ['name1' => 'петя', 'name2' => 'шагин'],
   'p2' => ['name1' => 'вася', 'name2' => 'шамов'],
   'p3' => ['name1' => 'миша', 'name2' => 'козлов']
];

$debugHelper = new \MyArray\HelperDebug(array_column($arrayColumn, 'name1'));



function cube($value){
    return $value * $value * $value;
}
$arrayMap = array_map('cube', $arrayExtract);

$debugHelper = new \MyArray\HelperDebug($arrayMap);

$arrayMerge = array_merge($aKey, $aVolue);
$debugHelper = new \MyArray\HelperDebug($arrayMerge);

$arrayFill = array_fill(0,10, 'Петя');
$debugHelper = new \MyArray\HelperDebug($arrayFill);

$arrayRange = range('a', 'z');
$debugHelper = new \MyArray\HelperDebug($arrayRange);

function how_much_i_love_you(int $nb_petals): string {
    $petals = ['I love you', 'a little', 'a lot', 'passionately', 'madly', 'not at all'];
    if ($nb_petals > count($petals)){
        $nb_petals = $nb_petals - 6;
    }
  return $petals[--$nb_petals];
}

?>


