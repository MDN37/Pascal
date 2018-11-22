<!DOCTYPE html>
<html>
 <head>
<link type="image/gif" rel="shortcut icon" href="favicon.gif">
  <meta charset="utf-8">
  <title> Тест </title>
  <link rel="stylesheet" href="style.css">
 </head>
 <body>
  <div id="header"><h1> ТЕСТ </h1></div>
   <div id="sidebar"> 

</div>
<div id="content">
  <?php
function osn(){ 
   $m[1] = array(0 => 'Исключите неверную форму записи селектора  оператора выбора',
    1 => '1..105', 2 => '5, 9, 45', 3 => '25, 30..50',4 => '12', 5 => '>50');
   $m[2] = array(0 => 'Выберите верную запись условия:число А больше 25, но равно произведению X и Y', 1 => 'If (a>25) xor (a=x*y) then …', 
   2 => 'If (a>25) or (a=x*y) then …', 3 => 'If (a<25) and (a=x*y) then …',
   4 => 'If (a>25) and (a=x*y) then …', 5 => 'If (a>25) or (a=x*y) then …');
   $m[3] = array(0 => 'Логический оператор or означает:', 1 => 'логическое восклицание', 
   2 => 'логическое «или»', 3 => 'логическое «и»',4 => 'логическое «исключающее или»', 5 => 'логическое отрицание');
   $m[4] = array(0 => 'Определить результат работы программы, если введены значения: а=3, b=2?', 1 => 'с=30', 
   2 => 'с=35', 3 => 'с=40',4 => 'с=45', 5 => 'с=50');
   $m[5] = array(0 => 'Чему равен y, если введено значение х=8?', 1 => '0', 
   2 => '8', 3 => '16',4 => '24', 5 => '32');
   $m[6] = array(0 => 'Определить результат работы программы:', 1 => '', 
   2 => '', 3 => '',4 => '');
   $m[9] = array(0 => 'Каковы значения переменных и сколько раз исполнится цикл:', 1 => '', 
   2 => '', 3 => '',4 => '');
   $m[12] = array(0 => 'Выберите виды циклов', 1 => 'Цикл с параметром', 
   3 => 'Цикл с предусловием', 5 => 'Цикл с постусловием',2 => 'Обратный цикл', 4 => 'Рекурсивный цикл', 6 => 'Экспрессивный цикл');
   $m[13] = array(0 => 'В каких случаях используется оператор цикла с параметром?', 1 => 'Когда заранее известно количество раз,которое цикл должен выполнить.', 2 => 'Когда не известно.', 3 => 'Когда надо узнать.');
   $m[14] = array(0 => 'Может ли тело оператора цикла с параметром не выполниться ни разу?', 1 => 'Да', 
   2 => 'Нет', 3 => 'Вероятно');
   $m[15] = array(0 => 'Можно ли в теле цикла с параметром не использовать величину – параметр цикла?',  1 => 'Да', 
   2 => 'Нет', 3 => 'Вероятно');
   $m[16] = array(0 => 'Может ли тело цикла с предусловием не выполниться ни разу?', 1 => 'Да', 
   2 => 'Нет', 3 => 'Вероятно');
   $m[17] = array(0 => 'Может ли тело цикла с предусловием выполняться бесконечное число раз?',  1 => 'Да', 
   2 => 'Нет', 3 => 'Вероятно');
   $m[18] = array(0 => 'Когда мы знаем сколько раз выполнится цикл, лучший выбор - это ...', 1 => 'For', 
   2 => 'While', 3 => 'Repeat..Until');
   $m[19] = array(0 => 'Когда нам надо что бы цикл выполнился хотя бы раз, лучший выбор - это ...', 1 => 'For', 
   2 => 'While', 3 => 'Repeat..Until');
   $m[20] = array(0 => 'Когда нам нужна проверка перед циклом,  лучший выбор - это ...', 1 => 'For', 
   2 => 'While', 3 => 'Repeat..Until');
   $m[21] = array(0 => 'Чему равно количество повторений тела оператора цикла с параметром, <br>
    если параметр цикла принимает все целые значения от a до b? ', 1 => 'a-b', 
   2 => 'b-a', 3 => 'a+b', 4 => 'b/a');
   $m[22] = array(0 => 'Чему равно количество повторений тела оператора цикла с параметром,<br> 
    если параметр цикла принимает все целые значения от 1 до 10?');


for($s=1;$s<=5;$s++){
echo '<h2>Вопрос №'.$s.'</h2><br>';
echo '<h4>'.$m[$s][0].'</h4><br>';
if ($s==4) {
  echo "<code>Program exampl_8;<br>";
  echo "Var <br>";
  echo "a, b, c : real; <br>";
  echo "begin <br>";
  echo "writeln ('Введите число a'); <br>";
  echo "read(a); <br>";
  echo "writeln('Введите число b'); <br>";
  echo "read(b); <br>";
  echo "if a < b then <br>";
  echo "c:=5*a+10*b <br>";
  echo "else <br>";
  echo "c:=10*a+5*b; <br>";
  echo "writeln(‘c=‘,c); <br>";
  echo "end</code>. <br>";
}
if ($s==5) {
  echo "Program exampl_9;<br>";
  echo "Var <br>";
  echo "x, y : real; <br>";
  echo "begin <br>";
  echo "writeln ('Введите число x'); <br>";
  echo "read(x); <br>";
  echo "Case x of <br>";
  echo "0..5 : y:=x; <br>";
  echo "10..101 :  y:=2*x; <br>";
  echo "105,136 : y:=3*x; <br>";
  echo "150..250 : y:=sqrt(x); <br>";
  echo "c:=10*a+5*b; <br>";
  echo "else y:=0; <br>";
  echo "writeln(‘y=‘,y); <br>";
  echo "end. <br>";
}

echo '<form method="post" action="rezult.php">';
for($n=1;$n<=(count($m[$s]))-1;$n++){
  echo '<label><p><input type="radio" name='.$s.' value='.$n.'>'.$m[$s][$n].'</p></label><br>';
}
}
echo '<h2>Вопрос №6</h2><br>';
echo '<h4>'.$m[6][0].'</h4><br>';
  echo "Program exampl_5;<br>";
  echo "Var <br>";
  echo "a, b, c : real; <br>";
  echo "begin <br>";
  echo "writeln ('Введите число a'); <br>";
  echo "read(a); <br>";
  echo "writeln('Введите число b'); <br>";
  echo "read(b); <br>";
  echo "if a >= b then <br>";
  echo "c:=2*a+3*b <br>";
  echo "else <br>";
  echo "c:=3*a+2*b; <br>";
  echo "writeln(‘c=‘,c); <br>";
  echo "end. <br>";
echo '<form method="post" action="rezult.php">';
echo "Если введены значения: а=5, b=10? c=";
echo '<p><input autocomplete="off" type="text" name="6" required > </p><br>';
echo "Если введены значения: а=10, b=5? c=";
echo '<p><input  autocomplete="off" type="text" name="7" required> </p><br>';
echo "Если введены значения: а=10, b=10? c=";
echo '<p><input  autocomplete="off" type="text" name="8" required> </p><br>';

echo '<h2>Вопрос №7</h2><br>';
echo '<h4>'.$m[9][0].'</h4><br>';
  echo "s:=0; <br>";
  echo "for i:=1 to 15 do <br>";
  echo "        if i mod 2=1 then s:=s+1; <br>";
echo '<form method="post" action="rezult.php">';
echo "s= ";
echo '<p><input autocomplete="off" type="text" name="9" required> </p><br>';
echo "i= ";
echo '<p><input  autocomplete="off" type="text" name="10" required> </p><br>';
echo "Сколько раз?";
echo '<p><input  autocomplete="off" type="text" name="11" required> </p><br>';

echo '<h2>Вопрос №8</h2><br>';
echo '<h4>'.$m[12][0].'</h4><br>';
echo '<form method="post" action="rezult.php">';
for($n=1;$n<=(count($m[12]))-1;$n++){
  echo '<label><p><input type="checkbox" name="12_'.$n.'">'.$m[12][$n].'</p></label><br>';
}
$xvc=4;
for($s=13;$s<=21;$s++){
  $mm=$s-$xvc;
echo '<h2>Вопрос №'.$mm.'</h2><br>';
echo '<h4>'.$m[$s][0].'</h4><br>';
echo '<form method="post" action="rezult.php">';
for($n=1;$n<=(count($m[$s]))-1;$n++){
  echo '<label><p><input type="radio" name='.$s.' value='.$n.'>'.$m[$s][$n].'</p></label><br>';
}
}

echo '<h2>Вопрос №18</h2><br>';
echo '<h4>'.$m[22][0].'</h4><br>';
echo '<form method="post" action="rezult.php">';
echo '<p><input autocomplete="off" type="text"  name="22" required> </p><br>';

echo '<input type="submit" value="Отправить ответы">';
echo '</form>';
echo '<br><hr>';
}

//запускаем
osn();
  ?>
  </div>
 <div id="footer">
  &copy; Валах Денис 4ИС 2018
  </div>

 </body>
</html>