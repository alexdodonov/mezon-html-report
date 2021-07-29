<?php
namespace Mezon\Report\Tests;

use PHPUnit\Framework\TestCase;
use Mezon\Report\Html;

class H2UnitTest extends TestCase
{

    /**
     * Testing additing single h2
     */
    public function testAddSingleH2(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()->h2();

        // assertions
        $this->assertEquals('<html><body><h2></h2></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing multiple h2
     */
    public function testAddMultipleH2(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()->h2();
        $htmlReport->body()->h2();

        // assertions
        $this->assertEquals('<html><body><h2></h2><h2></h2></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing inner html in h2
     */
    public function testAddInnerHtmlInH2(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()
            ->h2()
            ->innerHtml('<span></span>');

        // assertions
        $this->assertEquals('<html><body><h2><span></span></h2></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing h2 in td tag
     */
    public function testAddH2InTd(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()
            ->table()
            ->tr()
            ->td()
            ->h2();

        // assertions
        $this->assertEquals(
            '<html><body><table><tr><td><h2></h2></td></tr></table></body></html>',
            $htmlReport->compile());
    }

    /**
     * Testing additing H2 in div tag
     */
    public function testAddH2InDiv(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()
            ->div()
            ->h2();

        // assertions
        $this->assertEquals('<html><body><div><h2></h2></div></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing tag with inner text
     */
    public function testAddTagWithText(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()->h2('s');

        // assertions
        $this->assertEquals('<html><body><h2>s</h2></body></html>', $htmlReport->compile());
    }
}
