# php_hangul_trim

## Usage
입력 받은 바이트수만큼 글자열을 잘라냅니다

## Example

```php
<?php
include "php_hangul_trim.php";
$str_init = "한글1234문자열";
$byte_length = 20;
$str_changed = hangul_trim($str_init, $byte_length);
printf("$str_changed\n");
?>
```

## Require
php-mbstring
