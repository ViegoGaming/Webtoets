<?php
$name = $_POST ['name'];
$number = $_POST ['number'];
$weervraag = $_POST ['Weervraag'];
echo $name . "</br>" . $number ."</br>". $weervraag. "</br>";

file_put_contents('questions.txt' ,$name, FILE_APPEND)
?>