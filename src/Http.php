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
        if (!isset($parse['host'])) {
            return null;
        }
        return $parse['host'];
    }
}