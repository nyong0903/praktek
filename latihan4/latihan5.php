<?php 

    //kondisi IF Angka/Integer
    // $nilai = 40;
    // if ($nilai > 60){
    //     echo 'Lulus';
    // }
    // else{
    //     echo 'Remedial';
    // }


    //Kondisi IF String/Text
    // $teman = "Yanto";
    // if ($teman == "Yanto") {
    //     echo "Dia adalah teman saya";
    // }
    // else{
    //     echo " Dia Bukan Teman Saya";
    // }

    //kondisi If Else If
    // $nilai = 90;
    // if($nilai <=60) {
    //     echo 'Nilai Cukup';
    // } elseif ($nilai <= 75) {
    //     echo 'Nilai Baik';
    // } elseif ($nilai >= 85) {
    //     echo 'Nilai Sangat Baik';
    // } else {
    //     echo 'Nilai Kurang';
    // }



    // Kondisi switch
    // $nilai = 100;
    // switch ($nilai){
    //     case 50:
    //             echo 'Nilai = 50';
    //             break;
    //     case 70:
    //             echo 'Nilai = 70';
    //             break;
    //     case 90:
    //             echo 'Nilai = 90';
    //             break;
    //     case 100:
    //             echo 'Nilai = 100';
    //             break;
    //     default: 
    //             echo 'Nilai Tidak Ditemukan';
    //             break;
    // }

    // $max = 0;
    // echo $i = 0;
    // echo ",";
    // echo $j = 1;
    // echo ",";
    // $result = 0;

    // while ($max < 1000) {
    //     $result = $i + $j;

    //     $i = $j;
    //     $j = $result;

    //     $max = $max + 1;
    //     echo $result;
    //     echo ",";
    // }

        //kondisi Do While
    // $x = 1;

    // do {
    //     echo "The Number Is : $x </br>";
    //     $x++;
    // } while ($x <= 5);


        //Looping Break
    // echo 'Simple Break';
    // for ($i=1; $i <= 2; $i++) { 
    //     echo "\n".'$i = '.$i.'';
    //     for ($j=1; $j <= 5; $j++) { 
    //         if($j == 2){
    //             break;
    //         }
    //         echo '$j = '.$j.' ';
    //     }
    // }

    // echo "</br>";

    // echo 'Multi-level Break';
    // for ($i=1; $i <=2 ; $i++) { 
    //     echo "\n".'$i = '.$i.' ';
    //     for ($j=1; $j <= 5; $j++) { 
    //         if ($j == 2) {
    //             break 2;
    //         }
    //         echo '$j = '.$j.' ';
    //     }
    // }

    echo 'Simple Continue';
    for ($i=1; $i <= 2; $i++) { 
        echo "\n".'$i = '.$i.'';
        for ($j=1; $j <= 5; $j++) { 
            if($j == 2){
                continue;
            }
            echo '$j = '.$j.' ';
        }
    }

    echo "</br>";

    echo 'Multi-level Continue';
    for ($i=1; $i <=2 ; $i++) { 
        echo "\n".'$i = '.$i.' ';
        for ($j=1; $j <= 5; $j++) { 
            if ($j == 2) {
                continue 2;
            }
            echo '$j = '.$j.' ';
        }
    }

?>