# php_hangul_trim

## Usage
입력 받은 바이트수만큼 글자열을 잘라냅니다
단, 바이트 수로 인해 글자열이 깨지는 경우에
해당 글자열을 출력하지 않습니다.

## Example

```php
<?php
include "php_hangul_trim.php";
$str_init = "한글1234문자열";
$byte_length = 7;
$str_changed = hangul_trim($str_init, $byte_length);
printf("$str_changed\n");
?>
```

```bash
$ php example.php 
한글12
```

## Require
php-mbstring
