<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $card = [];
    $cardMarks = ['❤︎','♦︎','☘','♠︎'];
    $cardNumbers = ['A','J','Q','K'];

for($i=2; $i<=10; $i++){
$cardNumbers[] = $i;
}


// foreach階層を　キーバリューでもち、$card[]にいれる
foreach($cardMarks as $cardMark){
  foreach($cardNumbers as $key => $cardNumber){
   $card[] = array("key"=>$key, "cardMark"=>$cardMark, "cardNumber"=>$cardNumber);
  }
}

// カードをシャッフルして配る
shuffle($card);
$cardPlayer = array_shift($card);
$cardPc = array_shift($card);
    ?>

    <h1>HIGH & low</h1><br>
    
<?php
echo <<< EOM
相手のカード　：　{$cardPc['cardMark']}{$cardPc['cardNumber']}<br>
<form action="result2.php" method="post">
<input type="hidden" name="pcCardMark" value="{$cardPc['cardMark']}">
<input type="hidden" name="pcCardNumber" value="{$cardPc['cardNumber']}">
<input type="hidden" name="pcCardKey" value="{$cardPc['key']}">


<input type="hidden" name="playerCardMark" value="{$cardPlayer['cardMark']}">
<input type="hidden" name="playerCardNumber" value="{$cardPlayer['cardNumber']}">
<input type="hidden" name="playerCardKey" value="{$cardPlayer['key']}">






EOM;


?>



    <input type="radio" name="select" value="High"><label for="">High</label>
    <input type="radio" name="select" value="Low"><label for="">Low</label>
    <button type="submit">決定</button>
    </form>
</body>
</html>