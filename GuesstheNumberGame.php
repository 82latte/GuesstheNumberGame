<?php
echo "Let's play the Guess the Number Game!".PHP_EOL;
echo "Select fitst number : ";
$num1 = fgets(STDIN);

//数字が入力されなければエラーを返す
while(!is_numeric($num1)){
    echo "Error. Select fitst 'number' : ";
    $num1 = fgets(STDIN);
}

echo "Select second number : ";
$num2 = fgets(STDIN);

while(!is_numeric($num2)){
    echo "Error. Select second 'number' : ";
    $num2 = fgets(STDIN);
}

//入力された数字の大小で処理を変える
if ($num1 <= $num2) {
    $correct = random_int($num1,$num2);
} else {
    $correct = random_int($num2,$num1);
    }

$answer = 0;

//５回に制限
for ($i = 5; $i > 0; $i--){
   
    if ($answer != $correct){
        echo "Guess the number : ";
        $answer = fgets(STDIN);
    } else {
    echo "Correct!".PHP_EOL;
    break;
    }
}

//５回で不正解のときの処理
if ($answer != $correct){
    echo "Gameover...".PHP_EOL;
}
