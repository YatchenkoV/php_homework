<?php 
/*5,6,7,8) Написать свою реализацию следующих функций php: 
array_sum,  - DONE
in_array,  - DONE
array_diff , 
sort.*/
class ArrayFuncs
{
	public $arr;
	function __construct(array $arr)
	{
		$this->arr = $arr;
	}

	public function myCount()
	{
		$c = 0;
		foreach ($this->arr as $value) {
			$c++;
		}
		return $c;
	}

	public function myArraySum ()
	{
		$i = 0;
		$sum = 0;
		$count = $this->myCount($this->arr);
		while ($i < $count) {
			$sum+= $this->arr[$i];
			$i++;
		}
		return $sum;
	}

	function myInArray ($a)
	{
		$i = 0;
		$j = 0;
		$count = $this->myCount($this->arr);
		for ($i=0; $i < $count; $i++) 
		{ 
			if ($a == $this->arr[$i]) 
			{
				$j++;
			}

		}

		if ($j > 0) 
		{
			return true;
		}
		else 
		{
			return false;
		}
	}
}


$c = [1, 23,4,5];
$obj = new ArrayFuncs($c);
echo $obj->myArraySum();
echo "<br>";
var_dump($obj->myInArray(23));