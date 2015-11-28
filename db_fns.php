<?php

function db_connect()
{
   $result = new mysqli('mysql5.000webhost.com', 'a8995321_user', 'P4m266a-mlv', 'a8995321_user'); 
   if (!$result)
      return false;
   return $result;
}

?>
