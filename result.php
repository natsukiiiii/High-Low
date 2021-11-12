<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
    //  print_r($_POST);
     $cardOppCardmark = $_POST['leftCardMark'];
     $cardOppcardNumber = $_POST['leftCardNumber'];
     $cardOppkey = $_POST['leftCardKey'];
     $cardPlayerCardmark = $_POST['rightCardMark'];
     $cardPlayercardNumber = $_POST['rightCardNumber'];
     $cardPlayerkey = $_POST['rightCardKey'];
$highOrLow = $_POST['select'];
     ?>

   <h1> High & Low </h1>
   <?php
   echo <<< EOM
    相手のカード：
    {$cardOppCardmark}{$cardOppcardNumber}<br>
    {$highOrLow}を選択しました。<br>

    あなたのカード：
    {$cardPlayerCardmark}{$cardPlayercardNumber}<br>
   EOM;


   if($cardOppkey < $cardPlayerkey){
       $result = "High";
   }elseif(($cardOppkey > $cardPlayerkey)){
    $result = "Low";

   }else{
       $result = $highOrLow;
   }

   if($highOrLow == $result){
       echo 'you win';
   }else{
    echo 'you Lose';
   }
   
   
   ?><br>
   <a href="select.php">Again</a>
</body>
</html>