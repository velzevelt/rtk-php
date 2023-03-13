<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Практическая 2</title>
</head>

<body style="background-color: black">

    <h1 style="color:white; text-align: center">Практическая работа 2</h1>
    <h2 style="color:white; text-align: center; ">"Работа с массивами"</h2>

    <pre style="font-size: 18px; font-family: Arial; color:white">
<?php
require_once "../etc/tools.php";


/** 1 Дан массив $arr. С помощью функции count выведите последний элемент данного
массива. */

formatProblem(1);
$arr = [1, 2, 3, 4, '5' => 54];


echo $arr[ count( $arr) ]  . "<br>";


var_dump($arr);
var_dump(count($arr));

/** 2
Дан массив с числами. Проверьте, что в нем есть элемент со значением 3 */

formatProblem(2);

$arr = range(0, 10);
echo in_array(3, $arr) ? "true" : "false";

/** 3
Дан массив [1, 2, 3, 4, 5]. Найдите сумму элементов данного массива.  */

formatProblem(3);
$arr = range(1, 5);

echo array_sum($arr);

/** 4
Дан
массив $arr.
С
помощью
функций array_sum и count найдите
среднее
арифметическое элементов (сумма элементов делить на их количество) данного
массива. */

formatProblem(4);

$arr = [1, 2, 3, 4, 5, 'jk' => 8, 'kjh' => 'jhbkjhkjh'];
$sum = array_sum($arr);
$arr_length = count($arr);

echo $sum / $arr_length; //error

/** 5
Создайте массив, заполненный числами от 1 до 100 */

formatProblem(5);

$arr = range(1, 100);
// print_r($arr);

/** 6
Создайте массив, заполненный буквами от 'a' до 'z'. */

formatProblem(6);

$arr = range("a", "я");
// print_r($arr); error


/** 7
Найдите сумму чисел от 1 до 100 не используя цикл. */

formatProblem(7);
echo array_sum(range(1, 100));

/** 8
Даны два массива: первый с элементами 1, 2, 3, второй с элементами 'a', 'b', 'c'.
Сделайте из них массив с элементами 1, 2, 3, 'a', 'b', 'c'. */

formatProblem(8);
$arr_1 = [1,2,3];
$arr_2 = ["a", "b", "c", 45, 'lkj' =>'lkj'];

$arr = array_merge($arr_1, $arr_2); // count - 3+3

print_r($arr);

/** 9
Дан массив с элементами 1, 2, 3, 4, 5 С помощью функции array_slice создайте
из него массив $result с элементами 2, 3, 4 */

formatProblem(9);
$arr_1 = [1,2,3,4,5,6];
$result = array_slice($arr_1, 1, 3); // 1.5.6

print_r($result);

/** 10 Дан массив [1, 2, 3, 4, 5]. С помощью функции array_splice преобразуйте массив
в [1, 4, 5]. */

formatProblem(10);
$ar = [1,2,3,1=>5,2=>6,3=>7];
array_splice($ar, 1, 2); //1567

print_r($ar);


/** 11 Дан массив [1, 2, 3, 4, 5]. С помощью функции array_splice сделайте из него
массив [1, 2, 3, 'a', 'b', 'c', 4, 5]. */

formatProblem(11);

$ar = range(1, 5);
array_splice($ar, 3, 0, ["a", "b", "c"]);

print_r($ar);


/** 12 Дан массив 'a'=>1, 'b'=>2, 'c'=>3'. Запишите в массив $keys ключи из этого
массива, а в $values – значения. */

formatProblem(12);
$ar = ['a' => 1, 'b' => 2, 'c' => 3];
$keys = array_keys($ar);
$values = array_values($ar);

print_r($keys);
print_r($values);


/** 13 Даны два массива: ['a', 'b', 'c'] и [1, 2, 3]. Создайте с их помощью массив 'a'=>1,
'b'=>2, 'c'=>3'. */

formatProblem(13);
$ar_1 = ['a', 'b', 'c'];
$ar_2 = [1, 2, 3];

$ar = array_combine($ar_1, $ar_2);
print_r($ar);


/** 14 Дан массив 'a'=>1, 'b'=>2, 'c'=>3. Поменяйте в нем местами ключи и значения. */

formatProblem(14);

$ar = ['a' => 1, 'b' => 2, 'c' => 3];
$ar = array_flip($ar);

print_r($ar);


/** 15 Дан массив с элементами 1, 2, 3, 4, 5 Сделайте из него массив с элементами 5, 4,
3, 2, 1 */

formatProblem(15);
$ar = range(1, 5);
$ar = array_reverse($ar);

print_r($ar);


/** 16 Дан массив ['a', '-', 'b', '-', 'c', '-', 'd']. Найдите позицию первого элемента '-'. */

formatProblem(16);
$ar = ['a', '-', 'b', '-', 'c', '-', 'd'];
$pos = array_search("-", $ar);

echo $pos;


/** 17 Дан массив ['a', '-', 'b', '-', 'c', '-', 'd']. Найдите позицию первого элемента '-' и удалите
его с помощью функции array_splice. */

formatProblem(17);
$ar = ['a', '-', 'b', '-', 'c', '-', 'd'];
$pos = array_search("-", $ar);
array_splice($ar, $pos, 1);

print_r($ar);

/** 18 Дан массив ['a', 'b', 'c', 'd', 'e']. Поменяйте элемент с ключом 0 на '!', а элемент с
ключом 3 - на '!!'. */

formatProblem(18);
$ar = ['a', 'b', 'c', 'd', 'e'];
$ar = array_replace($ar, ["0" => "!", "3" => "!!"]);

print_r($ar);


/** 19 Дан массив '3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'. Попробуйте на нем различные типы
сортировок. */

formatProblem(19);

$ar = ['3' => 'a', '1' => 'c', '2' => 'e', '4' => 'b'];
sort($ar);
print_r($ar);


$ar = ['3' => 'a', '1' => 'c', '2' => 'e', '4' => 'b'];
asort($ar);
print_r($ar);

$ar = ['3' => 'a', '1' => 'c', '2' => 'e', '4' => 'b'];
arsort($ar);
print_r($ar);

$ar = ['3' => 'a', '1' => 'c', '2' => 'e', '4' => 'b'];
ksort($ar);
print_r($ar);


$ar = ['3' => 'a', '1' => 'c', '2' => 'e', '4' => 'b'];
krsort($ar);
print_r($ar);

$ar = ['3' => 'a', '1' => 'c', '2' => 'e', '4' => 'b'];
natcasesort($ar);
print_r($ar);

$ar = ['3' => 'a', '1' => 'c', '2' => 'e', '4' => 'b'];
natsort($ar);
print_r($ar);

$ar = ['3' => 'a', '1' => 'c', '2' => 'e', '4' => 'b'];
rsort($ar);
print_r($ar);

$ar = ['3' => 'a', '1' => 'c', '2' => 'e', '4' => 'b'];
shuffle($ar);
print_r($ar);



/** 20 Дан
массив
с
элементами 'a'=>1,
'b'=>2,
'c'=>3.
Выведите
на
экран
случайный ключ из данного массива. */

formatProblem(20);

$ar = ['a' => 1, 'b' => 2, 'c' => 3];

echo array_rand($ar);


/**21 Дан
массив
с
элементами 'a'=>1,
'b'=>2,
'c'=>3.
Выведите
на
экран
случайный элемент данного массива. */

formatProblem(21);

$ar = ['a' => 1, 'b' => 2, 'c' => 3];
$rand_var = $ar[array_rand($ar)];

echo $rand_var;


/** 22 Дан массив $arr. Перемешайте его элементы в случайном порядке. */

formatProblem(22);

$arr = range(0, 6);
shuffle($arr);

print_r($arr);


/** 23 Заполните массив числами от 1 до 25 с помощью range, а затем перемешайте его
элементы в случайном порядке. */

formatProblem(23);

$arr = range(1, 25);
shuffle($arr);

print_r($arr);

/** 24 Сделайте строку длиной 6 символов, состоящую из маленьких английских букв,
расположенных в случайном порядке. Буквы не должны повторяться. */

formatProblem(24);

$chars = range('a', 'z');
shuffle($chars);
$string = "";

// for( $i = 0; $i < 6; $i++ )
// {
//     $string .= $chars[$i];
// }

$chars = array_slice($chars, 0, 6);
$string = join("", $chars);

// foreach($chars as $key => $value)
// {
//     $string .= $value;
// }


var_dump($string);


/** 25 Дан массив с элементами 'a', 'b', 'c', 'b', 'a'. Удалите из него повторяющиеся
элементы. */

formatProblem(25);

$ar = ['a', 'b', 'c', 'b', 'a'];
$ar = array_unique($ar);

print_r($ar);


/** 26 Дан массив с элементами 1, 2, 3, 4, 5 Выведите на экран его первый и последний
элемент, причем так, чтобы в исходном массиве они исчезли. */

formatProblem(26);

$ar = range(1, 5);

echo array_shift($ar);
echo array_pop($ar) . "<br>";


print_r($ar);


/** 27 Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8 С помощью цикла и
функций array_shift и array_pop выведите на экран его элементы в следующем
порядке: 18273645 */

formatProblem(27);

$ar = range(1, 8);

foreach ($ar as $_v) {
    echo array_shift($ar);
    echo array_pop($ar);
}

/** 28 Дан массив с элементами 'a', 'b', 'c'. Сделайте из него массив с элементами 'a', 'b',
'c', '-', '-', '-'. */

formatProblem(28);

$ar = ['a', 'b', 'c'];
$ar = array_pad($ar, 6, "-");

print_r($ar);


/** 29 Создайте массив, заполненный целыми числами от 1 до 20 С помощью
функции array_chunk разбейте этот массив на 5 подмассивов ([1, 2, 3, 4]; [5, 6, 7,
8] и т.д.). */

formatProblem(29);

$ar = range(1, 20);
$chunk_size = 4;

print_r(array_chunk($ar, $chunk_size));



/** 30 Дан массив с элементами 'a', 'b', 'c', 'b', 'a'. Подсчитайте сколько раз встречается
каждая из букв. */

formatProblem(30);

$ar = ['a', 'b', 'c', 'b', 'a'];

print_r(array_count_values($ar));


/** 31 Дан массив с элементами 1, 2, 3, 4, 5 Создайте новый массив, в котором будут
лежать квадратные корни данных элементов. */

formatProblem(31);

$ar = range(1, 5);
var_dump( array_map('sqrt', $ar) );

$sqrt = function($x) {
    return sqrt($x);
};

var_dump( array_map($sqrt, $ar) );
var_dump( array_map(function($x) { return sqrt($x); }, $ar) );
var_dump( array_map( fn($x) => sqrt($x), $ar ));



print_r($ar);


/** 32 Дан массив с элементами '<b>php</b>', '<i>html</i>'. Создайте новый массив, в
котором из элементов будут удалены теги. */

formatProblem(32);

$ar = ['<b>php</b>', '<i>html</i>'];
$ar = array_map('strip_tags', $ar);

print_r($ar);


/** 33 Дан массив с элементами 1, 2, 3, 4, 5 и массив с элементами 3, 4, 5, 6, 7 Запишите
в новый массив элементы, которые есть и в том, и в другом массиве. */

formatProblem(33);

$ar = [];
$ar_1 = range(1, 5);
$ar_2 = range(3, 7);

$ar = array_intersect($ar_1, $ar_2);

print_r($ar);


/** 34 Дан массив с элементами 1, 2, 3, 4, 5 и массив с элементами 3, 4, 5, 6, 7 Запишите
в новый массив элементы, которые не присутствуют в обоих массивах
одновременно. */

formatProblem(34);

$ar = [];
$ar_1 = range(1, 5);
$ar_2 = range(3, 7);

$ar = array_diff($ar_1, $ar_2);

print_r($ar);


?>
</pre>

</body>

</html>