<?php 
/***
*Description : Check Whether given String is Palindrome Or Not without using built-in function strrev.
*Added By:Neha Khemchandani
*Date Added :12th November,2019
***/

$input_string = "madam";
$input_string_array =str_split($input_string); //splitting string into array first
$final_output_string = "";
for($i=count($input_string_array)-1;$i>=0;$i--)
{
     $final_output_string.=$input_string_array[$i];
}

if($final_output_string === $input_string)
{
  echo "Given string is palindrome";
}
else
{
  echo "Given string is not palindrome";
}

?>
