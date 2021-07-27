<?php
namespace Mezon\Report\Tests;

use PHPUnit\Framework\TestCase;
use Mezon\Report\Html;

class H4UnitTest extends TestCase
{

    /**
     * Testing additing single h4
     */
    public function testAddSingleH4(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()->h4();

        // assertions
        $this->assertEquals('<html><body><h4></h4></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing multiple h4
     */
    public function testAddMultipleH4(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()->h4();
        $htmlReport->body()->h4();

        // assertions
        $this->assertEquals('<html><body><h4></h4><h4></h4></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing inner html in h4
     */
    public function testAddInnerHtmlInH4(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()
            ->h4()
            ->innerHtml('<span></span>');

        // assertions
        $this->assertEquals('<html><body><h4><span></span></h4></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing h4 in td tag
     */
    public function testAddH4InTd(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()
            ->table()
            ->tr()
            ->td()
            ->h4();

        // assertions
        $this->assertEquals(
            '<html><body><table><tr><td><h4></h4></td></tr></table></body></html>',
            $htmlReport->compile());
    }

    /**
     * Testing additing H4 in div tag
     */
    public function testAddH4InDiv(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()
            ->div()
            ->h4();

        // assertions
        $this->assertEquals('<html><body><div><h4></h4></div></body></html>', $htmlReport->compile());
    }
}
