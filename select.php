<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $card =[];
    $cardMarks = ['❤︎','♦︎','☘','♠︎'];
    $cardNumbers = ['A','2','3','4','5','6','7','8','9','10','J','Q','K'];
    // var_dump($cardNumber );

    foreach($cardMarks as $cardMark){
        foreach($cardNumbers as $key => $cardNumber){
            // ?キーバリューで持つ意味とは？上記も下記も
            $card[] = array("key"=>$key, "cardNumber"=>$cardNumber, "cardMark"=>$cardMark);
            
        }
    }
// print_r($card);


shuffle($card);
$cardPlayer = array_shift($card);
$cardOpp = array_shift($card);
    // $cards = $card[];
    // $deck = array_rand($card);
    // $pcCard = $card[$deck];
    ?>

   <h1> High & Low </h1>

<?php
echo <<<EOM
相手のカード　：　{$cardOpp['cardNumber']}{$cardOpp['cardMark']}<br>
<form action="result.php" method="post">
<input type="hidden" name="leftCardMark" value="{$cardOpp['cardMark']}">
<input type="hidden" name="leftCardNumber" value="{$cardOpp['cardNumber']}">
<input type="hidden" name="leftCardKey" value="{$cardOpp['key']}">

<input type="hidden" name="rightCardMark" value="{$cardPlayer['cardMark']}">
<input type="hidden" name="rightCardNumber" value="{$cardPlayer['cardNumber']}">
<input type="hidden" name="rightCardKey" value="{$cardPlayer['key']}">

EOM;

?>



    <input type="radio" name="select" id="" value="High"><label for="">High</label>
    <input type="radio" name="select" id="" value="Low"><label for="">Low</label>
    <br>
<input type="submit" value="決定">
   
   </form>
</body>
</html>