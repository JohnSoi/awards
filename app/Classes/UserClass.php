<?php

namespace App\Classes;

class UserClass
{
    // Имя Отчество и фамилия
    public static function getName($str)
    {
        $str = preg_replace('|\s+|', ' ', $str);

        $name_arr = explode(' ', $str);

        return [
            'name' => $name_arr[0],
            'surname' => isset($name_arr[1]) ? $name_arr[1] : null,
            'father_name' => isset($name_arr[2]) ? $name_arr[2] : null
        ];
    }
}
