<?php


namespace Pongtan\Utils;

use Monolog\Logger as MonoLogger;
use Monolog\Handler\StreamHandler;
use Psr\Log\LoggerInterface;

class Logger
{
    /**
     * @param $name
     * @param $path
     * @param int $level
     * @return LoggerInterface
     */
    public static function newLogger($name, $path, $level = MonoLogger::DEBUG)
    {
        // create a log channel
        $log = new MonoLogger($name);
        $log->pushHandler(new StreamHandler($path, $level));
        return $log;
    }


}
