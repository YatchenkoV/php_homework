<?php
//Написать свою реализацию следующих функций php: strpos
Class StringFunctions
{
  $str;
  $count = count($this->str);
  function __construct()
  {
    $this->str = $str;
  }
  
  public function myStrpos($needle)
  {
    $split = str_split($this->str); //str ->array
    $countArr = count($string);
    for ($i=0; $i < $ countArr; $i++)
    {
      if ($needle === $split[$i])
      {
        return $i;
      }
    }
   }
   // Написать свою реализацию следующих функций php: substr
   
   public function mySubstr($start, $length)
   {
      
      $newStr;
      $split = str_split($this->str);
      for ($i= 0; $i < $length; $i++)
      {
        $newStr = $newStr.$split[$start];
        $start++;
      }
      return $newStr;
   }
   
    // Написать свою реализацию следующих функций php: substr_count
    
   public function mySubstr_count($needle)
   {
      $split = str_split($this->str);
      $i=0;
      foreach ($split as $value)
      {
        if ($needle == $value)
        {
            $i++;
        }
      }
      return $i;
   }
}

$a = "b";
$str = "absersssg";

$obj = new StringFunctions($str);
echo $obj->myStrpos($a);
?>
