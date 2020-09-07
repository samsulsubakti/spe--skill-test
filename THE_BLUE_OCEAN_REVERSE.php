<?php 
function blueOcean($array, $remove)
{
  $result = array();
  if(is_array($array) AND is_array($remove))
  {
    foreach($array as $v)
    {
      foreach($remove as $r)
      {
        if($v != $r)
        {
          $result[] = $v;
        }
      }
    }
  }
  return $result;
}

// run
print_r(blueOcean([1,5,5,5,5,3], [5]));