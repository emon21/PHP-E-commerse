<?php 

$string = "I Love Bangladesh";
//$slug = trim($string); // trim the string
// $slug= preg_replace('/[^a-zA-Z0-9 -]/','',$slug ); // only take alphanumerical characters, but keep the spaces and dashes too...
 $slug= str_replace(' ','-', $string); // replace spaces by dashes
 $slug= strtolower($slug);  // make it lowercase
 echo $slug;

 ?>