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

        $this->assertEquals(756,$hasers->encode([15]));


    }

    public function test_decodeOk()
    {

        $hasers = new HashidsInteger("",0,"0123456789");

        $numebr = [15];
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

    public function test_decodeArrayak()
    {

        $hasers = new HashidsInteger("{/SvFtGNUZNw'aT$/'.t",10,"1234567890");

        $numebr = [1,579144];
        $dcode = $hasers->decode("49274776074");

        $this->assertEquals($numebr[0],$dcode[0]);
        $this->assertEquals($numebr[1],$dcode[1]);

    }


    public function test_decodeArrayString()
    {

        $hasers = new HashidsInteger("{/SvFtGNUZNw'aT$/'.t",10,"abcdefghijklmnopq");

        $encoded = [4,2,15,21,51,4,5,6,4,7,8,4,5,1,5,4,5,1,5,4,1,5,5,5,1,5,4,4,1,5,4,1];
        $output = $hasers->encode($encoded);
        var_dump($output);
        $this->assertEquals($encoded,$hasers->decode($output));

    }

    public function test_decodeArrayPrefix()
    {

        $hasers = new HashidsInteger("{/SvFtGNUZNw'aT$/'.t",10,"abcdefghijklmnopq","hash");

        $encoded = [4,2,15,21];
        $output = $hasers->encode($encoded);

        $this->assertEquals($encoded,$hasers->decode($output));

    }

}