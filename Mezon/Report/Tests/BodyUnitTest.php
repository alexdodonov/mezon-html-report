<?php
namespace Mezon\Report\Tests;

use PHPUnit\Framework\TestCase;
use Mezon\Report\Html;

class BodyUnitTest extends TestCase
{

    /**
     * Testing no body constructing
     */
    public function testNoBody()
    {
        // assertions
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('You are trying to generate empty report');

        // setup and
        $htmlReport = new Html();

        // test body
        $htmlReport->compile();
    }

    /**
     * Testing single body constructing
     */
    public function testSingleBody()
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body();

        // assertions
        $this->assertEquals('<html><body></body></html>', $htmlReport->compile());
    }

    /**
     * Testing singletone body
     */
    public function testBodySingleton()
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body();
        $htmlReport->body();

        // assertions
        $this->assertEquals('<html><body></body></html>', $htmlReport->compile());
    }
}
