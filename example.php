<?php

include "php_hangul_trim.php";

$str_init = "한글1234문자열";
$byte_length = 20;
$str_changed = hangul_trim($str_init, $byte_length);

printf("$str_changed\n");

?>
