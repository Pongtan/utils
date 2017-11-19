<?php


namespace Pongtan\Utils;


class Time
{
    /**
     * @return mixed
     */
    public static function getTodayDate()
    {
        return date('Y-m-d', time());
    }

    /**
     * @return float
     */
    public static function getMicroTime()
    {
        $milliseconds = round(microtime(true) * 1000);

        return $milliseconds;
    }
}