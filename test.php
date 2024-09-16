<?php

echo "Hello world!";
echo 1;
echo false;

$promenna = "ahoj";
$promenna = 2;
$promenna = false;
$promenna = 2.5;
$promenna = 2.5;

echo $promenna;

const MOJE_KONSTANTA = 100;

echo MOJE_KONSTANTA;

function mojeFunkce() {
    echo "Ahoj";
}

function secti(int $a, int $b): int {
    return $a + $b;
}

$result = secti(1, 2);
echo $result;

mojeFunkce();

$cislo = 1;
$druheCislo = "1";

$cislo > $druheCislo;
$cislo < $druheCislo;
$cislo <= $druheCislo;
$cislo >= $druheCislo;

$cislo == $druheCislo;
$cislo === $druheCislo;

if(1 == 1) {
    echo "true";
}
else {
    echo "false";
}

$name = "Petr";
if($name === "Petr") {
echo "Ahoj Petře";
}
elseif($name === "Karel") {
    echo "Ahoj Karle";
}
else {
    echo "Ahoj cizinci";
}

switch($name) {
    case "Petr":
        echo "Ahoj Petře";
        break;
        case "Karel":
            echo "Ahoj Karle";
            break;
            case "Martin":
                echo "Ahoj Martine";
                break;
                default:
                echo "Ahoj cizinci";
}

$names = ["Petr", "Karel", "Martin"];

foreach($names as $name){
    echo "<p>".$name."</p>";
}

$names = ["Petr", "Karel", "Martin"];

echo "<pre>";
var_dump($names);
echo "</pre>";

$items =  [
    "car" => "Subaru",
    "plane" => "Boeing",
    "computer" => "Mac",
];
echo "<pre>";
var_dump($items);
echo "</pre>";

foreach($items as $key => $value) {
    echo "<p>".$key.": ".$value."</p>";

}

echo $names[1];
echo $items['computer'];

$multi_array = [
    "cars" => ["Subaru", "BMW", "Audi"],
     "planes" => ["Boeing", "Airbus"],
    "computers" => ["Mac", "Dell"],
];

echo $multi_array['cars'][1];

foreach($multi_array['planes'] as $plane)
{
    echo "<p>".$plane."</p>";
}


$multi_array['cars'][] = "Ferrari";

echo "<pre>";
var_dump($multi_array);
echo "</pre>";

