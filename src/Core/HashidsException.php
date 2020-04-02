<?php


namespace FuriosoJack\HashidsInteger\Core;

use InvalidArgumentException;

/**
 * Class HashidsException
 * @package FuriosoJack\HashidsInteger\Core
 * @author Juan Diaz <iam@furiosojack.com>
 */
class HashidsException extends InvalidArgumentException
{

    /**
     * HashidsException constructor.
     * @param string $string
     */
    public function __construct($string)
    {
    }
}