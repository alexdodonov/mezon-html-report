<?php
namespace Mezon\Report\Tests;

use PHPUnit\Framework\TestCase;
use Mezon\Report\Html;

class H3UnitTest extends TestCase
{

    /**
     * Testing additing single h3
     */
    public function testAddSingleH3(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()->h3();

        // assertions
        $this->assertEquals('<html><body><h3></h3></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing multiple h3
     */
    public function testAddMultipleH3(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()->h3();
        $htmlReport->body()->h3();

        // assertions
        $this->assertEquals('<html><body><h3></h3><h3></h3></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing inner html in h3
     */
    public function testAddInnerHtmlInH3(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()
            ->h3()
            ->innerHtml('<span></span>');

        // assertions
        $this->assertEquals('<html><body><h3><span></span></h3></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing h3 in td tag
     */
    public function testAddH3InTd(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()
            ->table()
            ->tr()
            ->td()
            ->h3();

        // assertions
        $this->assertEquals(
            '<html><body><table><tr><td><h3></h3></td></tr></table></body></html>',
            $htmlReport->compile());
    }

    /**
     * Testing additing H3 in div tag
     */
    public function testAddH3InDiv(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()
            ->div()
            ->h3();

        // assertions
        $this->assertEquals('<html><body><div><h3></h3></div></body></html>', $htmlReport->compile());
    }
}
