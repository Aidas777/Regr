<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testines uzduotys</title>

    <style>

        html {
            background-color: rgb(232, 232, 232);
            margin: 0 auto;
        }

        h4 {
            width: 100%;
            text-align: center;
            font-style: italic;
            background-color: lightgrey;

        }

    </style>


</head>
<body>

<h4>1. Uzduotis</h4>
<!-- /////////////////////////////////////////////////// 1 /////////////////////////////////////////////////// -->

<?php
// Sukurkite masyvą iš 101 elemento, kurio indeksai yra nuo 0 iki 100.
// Tiems masyvo nariams, kurių indeksas dalijasi iš 10 (0, 10, 20, 30,...100), priskirkite reikšmę “A”.
// Likusiems nariams priskirkite reikšmę “B”. Masyvą atspausdinkite naršyklės lange naudodami funkciją print_r();


for ($i=0; $i <100 ; $i++) { 
    if ( $i % 10 == 0 ) {
        $arrMain[] = "A";
    } else {
        $arrMain[] = "B";
    }
}

print_r($arrMain);
// // Arba galim atvaizduoti budu zemiau:
$arrMainLen=count($arrMain);
// for ($i=0; $i < $arrMainLen; $i++) { 
//    echo $i ."=" .$arrMain[$i] ." ";
// }

echo "<br>";
// /////////////////////////////////////////////////// 2 /////////////////////////////////////////////////// 

for ($i=0; $i < $arrMainLen; $i++) { 
    // $rndLen=rand(3, 10);
    for ($y=0; $y < rand(3, 10) ; $y++) { 
        if ($arrMain[$i] == "A") {
            $arrIn[$y]="A";
        } else {
            $arrIn[$y]="B";
        }
    }
    $arrMain[$i]=$arrIn;
}

//PRITUKAU LAIKO ...

print_r($arrMain);
// var_dump($arrMain);
?>

    
</body>
</html>