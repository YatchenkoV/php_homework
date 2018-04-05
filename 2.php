<?php



class ArrayHelper
{	
	public $equal = "There are no largerst number";
	public $a;

		function __construct(array $a)
		{
			$this->a = $a;
		}

		public function myCount()
		{
			$c = 0;
			foreach ($this->a as $value) 
			{
				$c++;
			}
			return $c;
		}		
		
		public function myMax()
		{
		 	$identical = 0; // checks if all the numbers are equal
		 	$count = $this->myCount($this->a);
		 	$max = $this->a[0];
		 	global $equal;
		 	for ($i=0; $i < $count; $i++) 
		 	{ 	
		 		if ($max == $this->a[$i]) // checks if all the numbers are equal
		 		{
		 			$identical++;
		 		}
		 		elseif ($max < $this->a[$i]) 
		 		{
		 			$max = $this->a[$i];	
		 		}
		 		
		 	}
		 	
		 	if ($identical == $count) // checks if all the numbers are equal
		 	{	
		 		return $equal;
		 	}
		 	else 
		 	{
		 		return $max;
		 	}
		}
 /* 3) найти в массиве число второе по величине.*/
		public function secondLargestNumber()
		{
			 $i = 0;
			 $secondMax;
			 $max = $this->myMax($this->a);
			 global $equal;
			 $count = $this->myCount($this->a);
			 while ($i < $count) 
			 {
			 	if ($this->a[$i] < $max) 
			 	{
			 		if ($secondMax < $this->a[$i]) 
			 		{
			 			$secondMax = $this->a[$i];
			 		}
			 		
			 	}
			 	$i++;
			 }
			 if ($max == $equal)
			 {
			 	return "What are you waiting for? There are no even largerst number";
			 	
			 }
			 else
			 {
				return $secondMax;
			 }
			 
		}
/*4) В массиве заменить все элементы, большие данного числа Z, этим числом. Подсчитать количество замен.*/
		public function changeArray($z)
		{
			$i=0;
			$j=0; //iteration counter
			$count = $this->myCount($this->a);
			while ( $i < $count) 
			{
			    if ($z < $this->a[$i])
			    {
			        $this->a[$i] = $z;
			        $j++;
			    }
			    $i++;
			}
			 return $j;
		}


}

$a = [5,5,5];

$obj = new ArrayHelper($a);
echo $obj->changeArray(5);
echo "<br>";
echo $obj->myMax();
echo "<br>";
echo $obj->secondLargestNumber();
echo "<br>";
echo $obj->myCount();
