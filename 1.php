<?php

class Numbers
{
/* 1) Написать метод который выводит все положительные четные числа которые менье заданного.*/

	public function posEvenLessThan($a) 
	{
		$arr = [];
		for ($i=1; $i < $a; $i++) { 
		 	if ($i % 2 == 0)
				{
					array_push($arr, $i);
				}
		 }
		return $arr;
	}
/* 2) Вывести определенное количество элементов  последовательности Фибоначчи.*/
	public function fibbonachiSeq($a)
	{
	$prevprev = 0;
	$prev =1;
	$next = null;
	$arr = [$prevprev, $prev];
	$iter = 1;  //iteration counter
	for ($i=1; $i < $a - 1; $i++) 
		{ 
			$next = $prevprev + $prev;
			$prevprev = $prev;
			$prev = $next;
			array_push($arr, $next);
		}
	return $arr;
	}
}

$obj = new Numbers;
var_dump($obj->posEvenLessThan(30));
echo "<br><br>";

var_dump($obj->fibbonachiSeq(3));