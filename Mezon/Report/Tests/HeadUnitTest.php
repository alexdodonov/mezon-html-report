<?php
namespace Mezon\Report\Tests;

use PHPUnit\Framework\TestCase;
use Mezon\Report\Html;

/**
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
class HeadUnitTest extends TestCase
{

    /**
     * Testing no head constructing
     */
    public function testNoHead(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body();

        // assertions
        $this->assertEquals('<html><body></body></html>', $htmlReport->compile());
    }

    /**
     * Testing single head constructing
     */
    public function testSingleHead(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body();
        $htmlReport->head();

        // assertions
        $this->assertEquals('<html><head></head><body></body></html>', $htmlReport->compile());
    }

    /**
     * Testing singletone head
     */
    public function testHeadSingleton(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body();
        $htmlReport->head();
        $htmlReport->head();

        // assertions
        $this->assertEquals('<html><head></head><body></body></html>', $htmlReport->compile());
    }
}
