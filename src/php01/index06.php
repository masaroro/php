<?php

// 関数定義
// function 関数名(){
//   処理内容
// return 返り値
// }
// -----------------------------
// function outputNumber($a)
// {
//     echo "引数の値は" . $a . "です" ;
//     return;
// }
// outputNumber(2)
// -----------------------------
// function text($number1,$number2)
// {
//     $value = $number1 + $number2 ;
//     return $value;
// }
// $total = text(2,4);
// echo $total ;
// -----------------------------
// function addNumber($a,$b){
//     $add = $a + $b ;
//     return $add ;
// }
// $total = addNumber(2,3);
// print $total ;
// -----------------------------

// 問題1
// -----------------------------
// $Passed = 210 ;
// function addjudge($score1,$score2,$score3){
//     $value = $score1 + $score2 + $score3 ;
//     if($value > $Passed){
//         $Judge = "合格" ;
//     }else{
//         $Judge = "不合格" ;
//     }
//     echo "合計点は" . $value . "なので" . $Judge . "です";
// }
// echo addjudge(70,80,80);
// -----------------------------


//問題2（三角形・四角形・台形の面積を求める関数）
// -----------------------------
function triangle($base,$height){
    return $base * $height /2 ;
}
function square($height,$width){
    return $height * $width ;
}
function trapezoid($uper,$base,$height){
    return ($uper + $base) * $height / 2 ;
}

$total1 = triangle(10,4);
$total2 = square(5,5);
$total3 = trapezoid(2,6,4);

echo $total1 . "<br />";
echo $total2 . "<br />";
echo $total3 . "<br />";
// -----------------------------


?>