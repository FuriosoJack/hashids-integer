<?php


namespace FuriosoJack\HashidsInteger\Core;


interface HashidsIntegerInterface
{
    /**
     * Encode parameters to generate a hash.
     *
     * @return string
     */
    public function encode(array $numbers);

    /**
     * Decode a hash to the original parameter values.
     *
     * @param string $hash
     *
     * @return array
     */
    public function decode($hash);

    /**
     * Encode hexadecimal values and generate a hash string.
     *
     * @param string $str
     *
     * @return string
     */
    public function encodeHex($str);

    /**
     * Decode a hexadecimal hash.
     *
     * @param string $hash
     *
     * @return string
     */
    public function decodeHex($hash);

}