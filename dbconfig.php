<?php
define('DB_HOST', 'yallara.cs.rmit.edu.au');
define('DB_PORT', '54335');
define('DB_NAME', 'winestore');
define('DB_USER', 'root');
define('DB_PW',   '4getmenot');
$dsn = 'mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME;
//function to show errors to the user
function display_error()
{
  die("An error has occurred" . mysql_errno() . " : " . mysql_error());
}
function clean_sql($array, $index, $maxlength, $connection)
{
  if (isset($array["{$index}"]))
  {
     $input = substr($array["{$index}"], 0, $maxlength);
     $input = mysql_real_escape_string($input, $connection);
     return ($input);
  }
  return NULL;
}



