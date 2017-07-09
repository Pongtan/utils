<?php


namespace Pongtan\Utils;


class Http
{
    /**
     * @param $origin
     * @return mixed
     */
    public static function getHostFromOrigin($origin)
    {
        $parse = parse_url($origin);
        return $parse['host'];
    }
}