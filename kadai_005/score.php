<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>kadai_005</title>
 </head>
 
 <body>
     <p>
         <?php
         // 変数に値を代入する
         $score1= '80';
         $score2= '60';
         $score3= '55';
         $score4= '40';
         $score5= '100';
         $score6= '25';
         $score7= '80';
         $score8= '95';
         $score9= '30';
         $score10= '60';

         //1~10の合計を計算する
         $score_total = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 +  $score9 + $score10;
         
         //合計を10で割って平均点を計算する
         $score_average = $score_total / 10;
  
         // 平均点を表示させる
         echo $score_average;
         ?>
     </p>
 </body>
 
 </html>