<?php


namespace FuriosoJack\HashidsInteger\Tests\All;

use FuriosoJack\HashidsInteger\Core\HashidsInteger;
use FuriosoJack\HashidsInteger\Tests\TestsCase;

/**
 * Class TestBasic
 * @package FuriosoJack\HashidsInteger\Tests\All
 * @author Juan Diaz <iam@furiosojack.com>
 */
class TestBasic extends TestsCase
{


    public function test_encodeOk()
    {

        $hasers = new HashidsInteger("",0,"0123456789");

        $this->assertEquals(756,$hasers->encode(15));


    }

    public function test_decodeOk()
    {

        $hasers = new HashidsInteger("",0,"0123456789");

        $numebr = 15;
        $this->assertEquals(15,$hasers->decode($hasers->encode($numebr)));

    }


    public function test_decodeArrayOk()
    {

        $hasers = new HashidsInteger("",0,"0123456789");

        $numebr = [15];
        $this->assertEquals($numebr[0],$hasers->decode($hasers->encode($numebr)));

    }

    public function test_decodeArray2Ok()
    {

        $hasers = new HashidsInteger("",10,"0123456789");

        $numebr = [15,16];
        $dcode = $hasers->decode($hasers->encode($numebr));
        $this->assertEquals($numebr[0],$dcode[0]);
        $this->assertEquals($numebr[1],$dcode[1]);

    }

}