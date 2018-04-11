<?php



class ArrayHelper
{	
	

		function __construct($a)
        {
            $this->a = $a;
            if (!is_array($a)) 
            {
                throw new Exception("That's not an array. Please, try again.");    
            }
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
        $count = $this->myCount($this->a);
        $max = $this->a[0];
        for ($i=1; $i < $count; $i++) { 
            if ($max < $this->a[$i])
            {
                $max = $this->a[$i];
            }
        }
        return $max;
    	}      

	    public function secondMax()
    	{
	        $count = $this->myCount($this->a);
	        $max = $this->myMax($this->a);
	        $withoutMax = [];         // array without max value
	        
	        for ($i=0; $i < $count ; $i++) 
	        { 
	            if ($this->a[$i] < $max) 
	            {
	                $withoutMax[] = $this->a[$i]; // if there are values less than MAX, they will go to array $withoutMax
	             
	            }

	        }
	        if (empty($withoutMax)) //checks if there were values less than MAX
	        {
	            throw new Exception("All elements in array are identical"); 
	        }
	        $secondMax = max($withoutMax);
	        return $secondMax;
	    }
/*4) В массиве заменить все элементы, большие данного числа Z, этим числом. Подсчитать количество замен.*/
		public function changeArray($z)
		{
			
			$j=0; //iteration counter
			$count = $this->myCount($this->a);
			for ($i=0; $i < $count; $i++) { 
				# code...
			}
			{
			    if ($z < $this->a[$i])
			    {
			        $this->a[$i] = $z;
			        $j++;
			    }
			    
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
echo $obj->secondMax();
echo "<br>";
echo $obj->myCount();
