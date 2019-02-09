<?php

namespace helpers;


class DateTimeHelper
{
    const PERIOD_SECOND = 'second';
    const PERIOD_MINUTE = 'minute';
    const PERIOD_HOUR = 'hour';
    const PERIOD_DAY = 'day';
    const PERIOD_WEEK = 'week';
    const PERIOD_MONTH = 'month';

    const PERIOD_SECOND_STRING = 'сек';
    const PERIOD_MINUTE_STRING = 'мин';
    const PERIOD_HOUR_STRING = 'ч';
    const PERIOD_DAY_STRING = 'д';
    const PERIOD_WEEK_STRING = 'н';
    const PERIOD_MONTH_STRING = 'м';

    const PERIOD_NAMES = [
        self::PERIOD_SECOND => self::PERIOD_SECOND_STRING,
        self::PERIOD_MINUTE => self::PERIOD_MINUTE_STRING,
        self::PERIOD_HOUR => self::PERIOD_HOUR_STRING,
        self::PERIOD_DAY => self::PERIOD_DAY_STRING,
        self::PERIOD_WEEK => self::PERIOD_WEEK_STRING,
        self::PERIOD_MONTH => self::PERIOD_MONTH_STRING,
    ];

    const PERIOD_IN_SECONDS = [
        self::PERIOD_SECOND => 1,
        self::PERIOD_MINUTE => 60,
        self::PERIOD_HOUR => 60 * 60,
        self::PERIOD_DAY => 60 * 60 * 24,
        self::PERIOD_WEEK => 60 * 60 * 24 * 7,
        self::PERIOD_MONTH => 60 * 60 * 24 * 7 * 4,
    ];

    /**
     * @param int $timeInSeconds
     * @return string
     */
    public static function getSecondsToTimeString($timeInSeconds)
    {
        $periodInSeconds = array_reverse(self::PERIOD_IN_SECONDS);
        $res = [];
        foreach ($periodInSeconds as $period => $seconds) {
            list($value, $timeInSeconds) = self::getNonZeroTimeValue($timeInSeconds, $period);
            if (!empty($value)) {
                $res[] = $value . ' ' . self::PERIOD_NAMES[$period];
            }
        }
        return implode(' ', $res);
    }

    /**
     * @param int $time
     * @param string $period
     * @return array
     */
    private static function getNonZeroTimeValue($time, $period)
    {
        $period = self::PERIOD_IN_SECONDS[$period];
        return [intdiv($time, $period), $time % $period];
    }
}