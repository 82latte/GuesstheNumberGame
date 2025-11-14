<?php
echo "数字を当てるゲームをしましょう!".PHP_EOL;
echo "1つ目の数字を入力してください : ";
$num1 = fgets(STDIN);

//数字が入力されなければエラーを返す
while(!is_numeric($num1)){
    echo "半角数字を入力してください : ";
    $num1 = fgets(STDIN);
}

echo "2つ目の数字を入力してください : ";
$num2 = fgets(STDIN);

while(!is_numeric($num2)){
    echo "半角数字を入力してください : ";
    $num2 = fgets(STDIN);
}

//１つ目２つ目の数字が同じときは２つ目の数字を再入力
while ($num2 == $num1){
    $trimmedNum1 = trim($num1);

    echo "1つ目の数字(".$trimmedNum1.")とは異なる数字を入力してください : " ;
    $num2 = fgets(STDIN);
}

//入力された数字の大小で処理を変える
if ($num1 <= $num2) {
    $correct = random_int($num1,$num2);
} else {
    $correct = random_int($num2,$num1);
    }

$answer = 0;

//回答できる回数を５回に制限
for ($i = 5; $i > 0; $i--){
   
    if ($answer != $correct){
        echo "数字を当ててください : ";
        $answer = fgets(STDIN);
    } else {
    echo "正解!".PHP_EOL;
    break;
    }
}

//５回で不正解のときの処理
if ($answer != $correct){
    echo "ゲームオーバー".PHP_EOL;
}
