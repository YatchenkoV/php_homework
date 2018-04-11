<?php 
/*5,6,7,8) Написать свою реализацию следующих функций php: 
array_sum,  - DONE
in_array,  - DONE
array_diff, - DONE 
sort. - DONE*/
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
		$sum = 0;
		$count = $this->myCount($this->arr);
		for ($i=0; $i < $count ; $i++)
		{
			$sum+= $this->arr[$i];
		}
		return $sum;
	}

	public function myInArray ($a, $arr1)
	{
		$j = 0;
		$count = $this->myCount($arr1);
		for ($i=0; $i < $count; $i++) 
		{ 
			if ($a == $arr1[$i]) 
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

	public function myArrayDiff($arr2)
	{	
		//$arr2 - the array to compare from// исходный массив
		//$this->arr - the array to compare against // с которым идет сравнение
		$diffAray = [];
		$count = $this->myCount($this->arr);
		for ($i=0; $i < $count; $i++) 
		{
			if (!($this->myInArray($arr2[$i],$this->arr))) 
			{
				if ($this->myInArray($arr2[$i],$diffAray)) 
				{
					continue;
				}
				else
				{
					$diffAray[] = $arr2[$i];
				}
			}
		}
		return $diffAray;
	}

	public function mySort()
	{
		$count = $this->myCount($this->arr);
		for ($j=0; $j < $count ; $j++)
		{
			for ($i=0; $i < $count - 1; $i++)
			{
				if ($this->arr[$i] > $this->arr[$i+1])  // swaps array elements if needed
				{
					$transit = $this->arr[$i];
					$this->arr[$i] = $this->arr[$i+1];
					$this->arr[$i+1] = $transit;
				}
			}
			$count--;
		}
		return $this->arr;
	}
}



$c = [4,3,1, 16,7,12,3,6,3];
$e = [1,3,3,13,5,4,3,4,3];
$obj = new ArrayFuncs($c);
echo $obj->myArraySum();
echo "<br>";
var_dump($obj->myInArray(23, $c));
echo "<br>";
var_dump($obj->myArrayDiff($e));
echo "<br>";
var_dump(($obj->mySort()));