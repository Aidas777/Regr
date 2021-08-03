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

echo "<br><br>";
?>

<h4>2. Uzduotis</h4>
<!-- /////////////////////////////////////////////////// 2 /////////////////////////////////////////////////// -->

<?php


for ($i=0; $i < $arrMainLen; $i++) { 
    // $len= rand(3, 10);
    $arrIn=[];
    for ($y=0; $y < rand(3, 10) ; $y++) { 
        if ($arrMain[$i] == "A") {
            $arrIn[]="A";
        } else {
            $arrIn[]="B";
        }
        
    }
    $arrMain[$i]=$arrIn;
    
}

// for ($i=0; $i < $arrMainLen; $i++) { 
//     // $rndLen=rand(3, 10);
//     for ($y=0; $y < rand(3, 10) ; $y++) { 
//         if ($arrMain[$i] == "A") {
//             $arrIn[]="A";
//         } else {
//             $arrIn[]="B";
//         }
//     }
//     $arrMain[$i]=$arrIn;
// }

//PRITRUKAU LAIKO ...

print_r($arrMain);
// var_dump($arrMain);
?>



<h4>3. Uzduotis</h4>
<!-- /////////////////////////////////////////////////// 3 /////////////////////////////////////////////////// -->

<?php

for ($i=0; $i < $arrMainLen; $i++) { 
// echo "Countas pagal 10-i: "  .(10-count($arrMain[$i])) ." ";
        $arrSecLen=count($arrMain[$i]);
        if (   $arrSecLen < 10   ) {
            for (   $y=0; $y < (10-$arrSecLen) ; $y++   ) { 
                $arrMain[$i][] ="C";
            }
        }

        

    // $arrMain[$i][]=$arrIn;
    
}

// var_dump($arrMain);
print_r($arrMain);

?>



<h4>Papildoma uzduotis</h4>
<!-- /////////////////////////////////////////////////// Papildoma /////////////////////////////////////////////////// -->

<?php

$Ask=null;
$Bsk=null;
$Csk=null;

for ($i=0; $i < $arrMainLen; $i++) { 
    $arrSecLen=count($arrMain[$i]);
    for ($y=0; $y < $arrSecLen; $y++) { 
        if ($arrMain[$i][$y] == "A") {
            $Ask++;
        } elseif ($arrMain[$i][$y] == "B") {
            $Bsk++;
        } else {
            $Csk++;
        }
    }
}

echo "A raidziu yra: " .$Ask .", B raidziu yra: " .$Bsk .", C raidziu yra: " .$Csk;

?>
</body>
</html>