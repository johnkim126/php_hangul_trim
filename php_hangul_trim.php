<?php

#입력 받은 글자수만큼 한글 문자열을 줄임

function hangul_trim($str, $byte_len)
{
    $encoding = 'utf-8';

    #문자열내 한글 포함 여부 확인
    $is_hangul = preg_match("/[\xE0-\xFF][\x80-\xFF][\x80-\xFF]/", $str);
    if (!$is_hangul) {
        return $str;
    }

    #글자 자르기 및 마지막에 space 붙이기
    $new_str = mb_strimwidth($str, 0, $byte_len, " ", $encoding);

    #글자 가로 길이 확인
    $new_str_len = mb_strwidth($new_str, $encoding);

    #base 길이 만큼 space 추가
    for ($i = $new_str_len; $i < $byte_len; $i++) {
        $new_str = $new_str." ";
    }
    return $new_str;
}

?>
