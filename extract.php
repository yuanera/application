<?php

# load it as a string
$data = file_get_contents("logfile.txt");

$regex = '/(?<=\[).+?(?=\])/';

preg_match_all($regex, $data, $matches);

print_r($matches);

?>