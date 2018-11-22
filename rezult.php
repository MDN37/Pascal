<!DOCTYPE html>
<html>
 <head>
<link type="image/gif" rel="shortcut icon" href="favicon.gif">
  <meta charset="utf-8">
  <title> Тест </title>
  <link rel="stylesheet" href="style.css">
 </head>
 <body>
  <div id="header"><h1>ТЕСТ</h1></div>
   <div id="sidebar"> 
</div>
<div id="content">

  <?php

$t[1]=$_POST['1'];
$t[2]=$_POST['2'];
$t[3]=$_POST['3'];
$t[4]=$_POST['4'];
$t[5]=$_POST['5'];
$t[6]=$_POST['6'];
$t[7]=$_POST['7'];
$t[8]=$_POST['8'];
$t[9]=$_POST['9'];
$t[10]=$_POST['10'];
$t[11]=$_POST['11'];
$t[12]=$_POST['12_1'];
$t[13]=$_POST['12_2'];
$t[14]=$_POST['12_3'];
$t[15]=$_POST['12_4'];
$t[16]=$_POST['12_5'];
$t[17]=$_POST['12_6'];
$t[18]=$_POST['13'];
$t[19]=$_POST['14'];
$t[20]=$_POST['15'];
$t[21]=$_POST['16'];
$t[22]=$_POST['17'];
$t[23]=$_POST['18'];
$t[24]=$_POST['19'];
$t[25]=$_POST['20'];
$t[26]=$_POST['21'];
$t[27]=$_POST['22'];



function answer($m){
switch ($m) {
  case '1':
    return 5;
    break;
  case '2':
    return 4;
    break;
  case '3':
    return 2;
    break;
  case '4':
    return 3;
    break;
  case '5':
    return 1;
    break;
  case '6':
    return 35;
    break;
  case '7':
    return 35;
    break;
  case '8':
    return 50;
    break;
  case '9':
    return 8;
    break;
  case '10':
    return 15;
    break;
  case '11':
    return 15;
    break;  
  case '12':
    return true;
    break;  
  case '13':
    return false;
    break;  
   case '14':
    return true;
    break;  
   case '15':
    return false;
    break;  
   case '16':
    return true;
    break;  
   case '17':
    return false;
    break;
     case '18':
    return 1;
    break;
     case '19':
    return 1;
    break;
     case '20':
    return 1;
    break;
     case '21':
    return 1;
    break;
     case '22':
    return 1;
    break;
     case '23':
    return 1;
    break;
     case '24':
    return 3;
    break;
     case '25':
    return 2;
    break;
     case '26':
    return 2;
    break;
     case '27':
    return 10;
    break;

}
}

function rezult($rez){
  switch ($rez) {
    case 0:
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
    case 6:
    case 7:
    case 8:
    case 9:
      $oc=2;
      break;
    case 10:
    case 11:
    case 12:
     $oc=3;
     break;
    case 13:
    case 14:
    case 15:
    $oc=4;
    break;
    case 16:
    case 17:
    case 18:
    $oc=5;
    break;

  }
  echo '<h2>Ваша оценка: '.$oc.' - '.round((100/18)*$rez, 2).'%</h2><br>';
  switch ($oc) {
    case 2:
    echo "<h2>Плохой результат</h2>";
      break;
    case 3:
    echo "<h2>Вы можете лучше</h2>";
      break;  
    case 4:
    echo "<h2>Хороший результат</h2>";
      break;
    case 5:
    echo "<h2>Отличный результат</h2>";
      break; 
      }
}
$rez=0;
for ($i=1; $i <= 5 ; $i++) { 
  if ($t[$i]==answer($i)) {
    $rez++;
  }
}
if (($t[6]==answer(6))&&($t[7]==answer(7))&&($t[8]==answer(8))) {
  $rez++;
}
if (($t[9]==answer(9))&&($t[10]==answer(10))&&($t[11]==answer(11))) {
  $rez++;
}
if (($t[12]==answer(12))&&($t[13]==answer(13))&&($t[14]==answer(14))&&($t[15]==answer(15))&&($t[16]==answer(16))&&($t[17]==answer(17))) {
  $rez++;
}
for ($i=18; $i <= 27; $i++) { 
  if ($t[$i]==answer($i)) {
    $rez++;
  }
}

rezult($rez);


echo 'Вы правильно решили - '.$rez.' заданий.<br>';
for ($i=1; $i <= 5; $i++) { 
  if ($t[$i]==answer($i)) {
    echo "<p>".$i." + <br>";
  }
  else echo "<p>".$i." - <br>";
}

if (($t[6]==answer(6))&&($t[7]==answer(7))&&($t[8]==answer(8))) {
  echo "<p>6 +<br>";
  }
  else echo "<p>6 - <br>";

if (($t[9]==answer(9))&&($t[10]==answer(10))&&($t[11]==answer(11))) {
  echo "<p>7 +<br>";
  }
  else echo "<p>7 - <br>";

if (($t[12]==answer(12))&&($t[13]==answer(13))&&($t[14]==answer(14))&&($t[15]==answer(15))&&($t[16]==answer(16))&&($t[17]==answer(17))) {
    echo "<p>8 +<br>";
  }
  else echo "<p>8 - <br>";
$xcvb=9;
for ($i=18; $i <= 27; $i++) { 
  if ($t[$i]==answer($i)) {
    $mn=$i-$xcvb;
    echo "<p>".$mn." + <br>";
  }
  else {$mn=$i-$xcvb;
    echo "<p>".$mn." - <br>";
}
}

  ?>
  </div>
 <div id="footer">
  &copy; Валах Денис 4ИС 2018
  </div>

 </body>
</html>