<?php

use Pongtan\Utils\Http;

class HttpTest extends TestCase
{
    public function testGetHost()
    {
        $uri = "https://demo.sspanel.xyz/dashboard?a=c";
        $this->assertEquals(Http::getHostFromOrigin($uri), 'demo.sspanel.xyz');
    }
}