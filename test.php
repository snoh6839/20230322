<?php
    // print "print입력 \n";
    // print ("print로 괄호안에 입력 \n");

    // echo "echo로 입력 \n";

    // // var_dump(print "안녕하세요 \n");

    // $testNum = 1;
    // echo $testNum , "\n";

    // $testString = '변수';
    // echo $testString;


// echo "점심메뉴\n탕수육 8,000원\n짜장면 6,000원\n짬뽕 6,000원";

// echo "점심메뉴" . "\n" . "탕수육 8,000원" . "\n" . "짜장면 6,000원" . "\n" . "짬뽕 6,000원";

// 변수 선언
$menu = "점심메뉴";
$dish1 = "탕수육";
$price1 = 8000;
$dish2 = "짜장면";
$price2 = 6000;
$dish3 = "짬뽕";
$price3 = 6000;
$space = ' ';

// 출력
echo "{$space}{$space}{$space}{$space}{$space}{$menu}\n";
echo "------------------\n";
echo "|{$space}{$dish1}{$space}|{$space}{$price1}원{$space}|\n";
echo "------------------\n";
echo "|{$space}{$dish2}{$space}|{$space}{$price2}원{$space}|\n";
echo "------------------\n";
echo "|{$space}{$space}{$dish3}{$space}{$space}|{$space}{$price3}원{$space}|\n";
echo "------------------\n";
?>