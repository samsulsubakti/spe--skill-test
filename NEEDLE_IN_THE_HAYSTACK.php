<?php
function check($nums, $sub)
{
  $result = null;
  foreach ( $nums as $key => $num ) 
  {
      if ( ( $pos = stripos( $sub, $num ) ) !== false ) 
      {
          $result = $key;
      }
  }

  return $result;
}

// print_r(check(array( 'one', 'two', 'three' ), 'one'));
