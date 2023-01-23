<?php
$mas["vardas"]="Jonas";
$mas["pavarde"]="Jonaitis";
$mas["amzius"]=4;

foreach ($mas as $key=>$value){
    echo "$key = $value <br>";
}

echo "<hr>";

$mas2=array(2, 3, 5, 8, 9);
$mas2['nezinau']="Labas";
$mas2[50]=12;
$mas2[10]=15;
$mas2[]=99;

foreach ($mas2 as $key=>$value){
    echo "$key = $value <br>";
}

echo "<hr>";

$mas3[2]=5;
$mas3[0]=2;
$mas3[1]=9;

foreach ($mas3 as $key=>$value){
    echo "$key = $value <br>";
}

echo "<hr>";


$mas4=array(1,2,3);

$mas4=["vardas"=>2, 3, 5, "pavarde"=>6];

$mas4=[1=>5, 2=>3, 1=>8];
print_r($mas4);
if (isset ($mas4[3]) ){
    echo $mas4[3];
}
echo "<hr>";




















