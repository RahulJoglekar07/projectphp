<?php
$str='this is a string ';
echo $str;
$len =strlen($str);
echo '<br>the length of string is :'.$len.'.thank you';

echo '<br> the words present in the string is: ',str_word_count($str);

echo '<br>the reverse of string is :',strrev($str); 

echo '<br>the position of word in string is :',strpos($str,'a');

echo '<br>the replace the word in string :'.str_replace('this','that',$str);


?> 