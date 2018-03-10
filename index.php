<?php
require('functions.php');

echo task1(['заяц и волк','заяц и медведь','заяц и лиса'],true);
echo '<br>';
echo task1(['заяц и волк','заяц и медведь','заяц и лиса']);
echo task2([1,3,3],'+');
echo '<br>';
echo task2([1,2,3.5],'/');
echo '<br>';
echo task3('+',1,2,3,5,10.5,1155).'<br>';
echo task4(5,5.2).'<br>';
task4(-5,5);
//$result = task5('Ежу хуже');
$result = task5('Aba Ba');
task($result);
echo '<br><br>';
task6();
echo '<br><br>';
task8('test.txt');
task9(anothertest.txt, 'Hello again!');
echo '<br>'.task7('Карл у Клары украл Кораллы','К','');
echo '<br>'.task7('Две бутылки лимонада','Две','Три');