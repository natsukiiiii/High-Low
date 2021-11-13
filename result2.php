<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $pcCardMark = $_POST['pcCardMark'];
    $pcCardNumber =$_POST['pcCardNumber'];
    $pcCardKey =$_POST['pcCardKey'];
    $playerCardMark =$_POST['playerCardMark'];
    $playerCardNumber =$_POST['playerCardNumber'];
    $playerCardKey =$_POST['playerCardKey'];
    $HighOrLow =$_POST['select'];

    ?>

<h1>HIGH & low</h1><br>

<?php
echo <<<EOM
相手のカード　： {$pcCardMark}{$pcCardNumber}<br>
{$HighOrLow}.　を選択しました<br>
あなたのカード　：{$playerCardMark}{$playerCardNumber}<br>
EOM;

if($pcCardNumber < $playerCardNumber){
  $result = "High";
}elseif(($pcCardNumber > $playerCardNumber)){
    $result = "Low";
}else{
    $result = $HighOrLow;
}


// 配列から取り出すの勉強も兼ねて、下記の機能追加してみた。
$loseGames = ['テキーラ','イエガー','レモンサワー','クライナー'];
shuffle($loseGames);
$loseGame = array_shift($loseGames);
// var_dump($loseGame);


if($HighOrLow == $result){
    echo 'you win';
}else{
    echo 'you Lose　男気' . $loseGame . 'time!!!';
}


?><br>
<a href="select2.php">Again</a>
</body>
</html>