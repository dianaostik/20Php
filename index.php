<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "------- 1 uzduotis ------- <br>";
        $name = "Diana";
        $surname = "Ostik";
        $year_birth = 1988;
        $year_now = 2022;
        $years = $year_now - $year_birth;
        echo "Aš esu $name $surname. Man yra $years metai.";
        echo "<br><br>";

        echo "------- 2 uzduotis ------- <br>";
        $skaicius1 = rand(0,4);
        $skaicius2 = rand(0,4);
        echo("Pirmas skaicius: $skaicius1 <br> Antras skaicius: $skaicius2 <br>");
        $tOne = ($skaicius1 > $skaicius2 );
        $tTwo = ($skaicius2 > $skaicius1 );
        if ($tOne) {
                    $rezOne = $skaicius1 / $skaicius2;
                    echo("Rezultatas = " . round($rezOne));
        } 
        elseif ($tTwo) {
                    $rezTwo = $skaicius2 / $skaicius1;
                    echo("Rezultatas = " . round($rezTwo));
        } 
        else {
                    echo "Skaiciai yra vienodi";
        }
        echo "<br><br>";

        echo "------- 3 uzduotis ------- <br>";
        $num_aa = rand(0, 25);
        $num_bb = rand(0, 25);
        $num_cc = rand(0, 25);
        echo("$num_aa , $num_bb , $num_cc <br>");

        if ($num_aa===$num_bb || $num_bb===$num_cc || $num_cc===$num_aa) {
            echo("Vienodos reiksmes");
        } 
        if ( ($num_aa < $num_bb && $num_bb < $num_cc) || ($num_aa > $num_bb && $num_bb > $num_cc)  ) {
            echo("Reiksme =  $num_bb");
        } 
        if (($num_bb < $num_cc && $num_cc < $num_aa) || ($num_bb > $num_cc && $num_cc > $num_aa)) {
            echo("Reiksme =  $num_cc");
        } 
        if(($num_cc < $num_aa && $num_aa < $num_bb) || ($num_cc > $num_aa && $num_aa > $num_bb)){
            echo("Reiksme = $num_aa");
        }
        echo "<br><br>";

//      //--------- 4uzd

        echo "------- 4 uzduotis ------- <br>";
            $num_a = rand(1,9);
            $num_b = rand(1,9);
            $num_c = rand(1,9);
        echo("a=  $num_a  a=  $num_b  c=  $num_c  " );

// if (((a+b)>c) && ((a+c)>b) && ((b+c)>a)){
//     console.log ("Galima sudaryti trikampi.");
// } else {
//         console.log ("Negalima.");
// }



    ?>
</body>
</html>