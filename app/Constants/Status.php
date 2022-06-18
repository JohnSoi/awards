<?php


namespace App\Constants;


class Status
{
    static public $IN_WORK = 0;
    static public $DECLINE = 1;
    static public $IN_WORK_EXPERT = 2;
    static public $DECLINE_IN_FINAL = 3;
    static public $IN_FINAL = 4;

    static protected $STATUS_TEXT = [
        0 => 'Заявка подана',
        1 => 'Отклонено',
        2 => 'Производится экспертная оценка',
        3 => 'Заявка не прошла в финал',
        4 => 'Заявка прошла в финал. Производится оценка жюри'
    ];

    static protected $STATUS_CLASS = [
        0 => 'neutral',
        1 => 'negative',
        2 => 'positive',
        3 => 'negative',
        4 => 'positive'
    ];

    public static function getStatusText($status_id) {
        return self::$STATUS_TEXT[$status_id];
    }

    public static function getStatusClass($status_id) {
        return self::$STATUS_CLASS[$status_id];
    }
}