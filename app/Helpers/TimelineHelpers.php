<?php

namespace App\Helpers;

use Illuminate\Support\Carbon;

class TimelineHelpers
{
    private static string $_format = 'd.m.Y';
    private static array $_title = [
        'wait' => 'Этап еще не наступил',
        'complete' => 'Этап завершен',
        'current' => 'Текущий этап'
    ];

    public static function getTitleHistoryPoint($pointDateStart, $pointDateEnd = null): string
    {
        return self::$_title[self::_getStateStage($pointDateStart, $pointDateEnd)];
    }

    public static function getClassPrefixHistoryPoint($pointDateStart, $pointDateEnd = null): string
    {
        return self::_getStateStage($pointDateStart, $pointDateEnd);
    }

    private static function _getCurrentDate(): Carbon
    {
        return Carbon::now();
    }

    private static function _getStateStage($pointDateStart, $pointDateEnd = null): string
    {
        $pointDateStart = Carbon::createFromFormat(self::$_format, $pointDateStart);
        if (!$pointDateEnd) {
            return match (true) {
                $pointDateStart->gt(self::_getCurrentDate()) => 'wait',
                $pointDateStart->lt(self::_getCurrentDate()) => 'complete',
                default => 'current',
            };
        }

        $pointDateEnd = Carbon::createFromFormat(self::$_format, $pointDateEnd);

        return match (true) {
            $pointDateEnd->gt(self::_getCurrentDate()) => 'wait',
            $pointDateEnd->lt(self::_getCurrentDate() && $pointDateStart > self::_getCurrentDate()) => 'complete',
            default => 'current',
        };
    }

}