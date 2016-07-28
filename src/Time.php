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
}