<?php
namespace Mezon\Report\Tests;

use PHPUnit\Framework\TestCase;
use Mezon\Report\Html;

class DivUnitTest extends TestCase
{

    /**
     * Testing additing single div
     */
    public function testAddSingleDiv(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()->div();

        // assertions
        $this->assertEquals('<html><body><div></div></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing multiple divs
     */
    public function testAddMultipleDivs(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()->div();
        $htmlReport->body()->div();

        // assertions
        $this->assertEquals('<html><body><div></div><div></div></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing inner html in div
     */
    public function testAddInnerHtmlInDiv(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()
            ->div()
            ->innerHtml('<span></span>');

        // assertions
        $this->assertEquals('<html><body><div><span></span></div></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing div in td tag
     */
    public function testAddDivInTd(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()
            ->table()
            ->tr()
            ->td()
            ->div();

        // assertions
        $this->assertEquals('<html><body><table><tr><td><div></div></td></tr></table></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing div in div tag
     */
    public function testAddDivInDiv(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()
            ->div()
            ->div();

        // assertions
        $this->assertEquals('<html><body><div><div></div></div></body></html>', $htmlReport->compile());
    }
}
