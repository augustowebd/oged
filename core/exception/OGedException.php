<?php
/*
 *
 * */
namespace core\exception;
use \Exception;

class OGedException extends Exception
{
    /**
     * Lança exception se o argumento for avaliado como vazio
     *
     * @param mixed $assert
     * @param string $message
     * @param integer $code
     * @param Exception $previous
     * */
    public static function throwsIfNull
    (
        $assert,
        $message,
        $code = 0,
        Exception $previous = NULL
    )
    {
        $class = get_called_class();

        if (empty($assert)) {
            throw new $class($message, $code, $previous);
        }
    }
}