<?php
// $num = 5; 
//     if ( $num === 1 ) {
//         echo 'hi';
//     }
//     else if ( $num === 4 ) {
//         echo 'bye';
//     }
//     else {
//         echo 'what';
//     }

// $score = 110;

// if ($score == 100) {
//     $grade = 'A+';
// } elseif ($score >= 90 && $score < 100) {
//     $grade = 'A';
// } elseif ($score >= 80 && $score < 90) {
//     $grade = 'B';
// } elseif ($score >= 70 && $score < 80) {
//     $grade = 'C';
// } elseif ($score >= 60 && $score < 70) {
//     $grade = 'D';
// } elseif ($score >= 60 && $score < 60) {
//     $grade = 'F';
// } else {
//     $score = '잘못된 값';
//     $grade = 'Undifined';
// }

// echo "당신의 점수는 " . $score . "이고, 학점은 " . $grade."입니다.";

$score = -10;

if( 0 <= $score && $score <= 100) {
    if ($score === 100) {
        $grade = 'A+';
    } elseif ($score >= 90) {
        $grade = 'A';
    } elseif ($score >= 80) {
        $grade = 'B';
    } elseif ($score >= 70) {
        $grade = 'C';
    } elseif ($score >= 60) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }
    echo "당신의 점수는 " . $score . "이고, 학점은 " . $grade."입니다.";
} else {
    echo "잘못입력하셨습니다.";
}




?>