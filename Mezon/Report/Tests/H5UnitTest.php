<?php
namespace Mezon\Report\Tests;

use PHPUnit\Framework\TestCase;
use Mezon\Report\Html;

class H5UnitTest extends TestCase
{

    /**
     * Testing additing single h5
     */
    public function testAddSingleH5(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()->h5();

        // assertions
        $this->assertEquals('<html><body><h5></h5></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing multiple h5
     */
    public function testAddMultipleH5(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()->h5();
        $htmlReport->body()->h5();

        // assertions
        $this->assertEquals('<html><body><h5></h5><h5></h5></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing inner html in h5
     */
    public function testAddInnerHtmlInH5(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()
            ->h5()
            ->innerHtml('<span></span>');

        // assertions
        $this->assertEquals('<html><body><h5><span></span></h5></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing h5 in td tag
     */
    public function testAddH5InTd(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()
            ->table()
            ->tr()
            ->td()
            ->h5();

        // assertions
        $this->assertEquals(
            '<html><body><table><tr><td><h5></h5></td></tr></table></body></html>',
            $htmlReport->compile());
    }

    /**
     * Testing additing H5 in div tag
     */
    public function testAddH5InDiv(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()
            ->div()
            ->h5();

        // assertions
        $this->assertEquals('<html><body><div><h5></h5></div></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing tag with inner text
     */
    public function testAddTagWithText(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()->h5('s');

        // assertions
        $this->assertEquals('<html><body><h5>s</h5></body></html>', $htmlReport->compile());
    }
}
