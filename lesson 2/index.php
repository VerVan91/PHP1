<?php
#1
$a = 100;
$b = 50;

if($a >= 0 && $b >= 0) {
   echo $a - $b;
}
elseif($a < 0 && $b < 0) {
    echo $a * $b;
}
else{
   echo $a + $b;
}

// // #2
// // $a = rand (0, 2);
// // echo "а равно $a <br>";

// // switch ($a) {
// //     case 0:
// //         echo "0 <br>";        
// //     case 1:
// //         echo "1 <br>";        
// //     case 2:
// //         echo "2 <br>";
// //     case 3:
// //         echo "3 <br>";        
// //     case 4:
// //         echo "4 <br>";        
// //     case 5:
// //         echo "5 <br>";
// //     case 6:
// //         echo "6 <br>";        
// //     case 7:
// //         echo "7 <br>";        
// //     case 8:
// //         echo "8 <br>";
// //     case 9:
// //         echo "9 <br>";        
// //     case 10:
// //         echo "10 <br>";        
// //     case 11:
// //         echo "11 <br>";
// //     case 12:
// //         echo "12 <br>";        
// //     case 13:
// //         echo "13 <br>";
// //     case 14:
// //         echo "14 <br>";          
// //     case 15:
// //         echo "15";
// //     break; 
// // }

// // #3 #4

// function sum($d,$c){
//     return $d + $c;
// }

// function subt($d,$c){
//     return $d - $c;
// }

// function mult($d,$c){
//     return $d * $c;
// }

// function div($d,$c){
//     return $d / $c;
// }

// function mathOperation($d, $c, $operation){
//     switch ($operation) {
//     case "+": 
//         return sum($d,$c);
//     break;
//     case "-": 
//         return subt($d,$c);
//     break; 
//     case "*": 
//         return mult($d,$c);
//     break; 
//     case "/": 
//         return div($d,$c);
//     break;  
//     }
// }

// echo mathOperation(2,5,"/");

// // // #6 

// // function power($val,$pow){
// // 	if ($pow != 0)
// // 	{
// // 		return $val * power ($val, $pow - 1);
// // 	}
// // 		return 1;
// // }
// // echo power(3, 3);

?>


