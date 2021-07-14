<?php
namespace Mezon\Report\Tests;

use PHPUnit\Framework\TestCase;
use Mezon\Report\Html;

class PUnitTest extends TestCase
{

    /**
     * Testing additing single p
     */
    public function testAddSingleP(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()->p();

        // assertions
        $this->assertEquals('<html><body><p></p></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing multiple ps
     */
    public function testAddMultiplePs(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()->p();
        $htmlReport->body()->p();

        // assertions
        $this->assertEquals('<html><body><p></p><p></p></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing inner html in div
     */
    public function testAddInnerHtmlInP(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()
            ->p()
            ->innerHtml('<span></span>');

        // assertions
        $this->assertEquals('<html><body><p><span></span></p></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing div in td tag
     */
    public function testAddPInTd(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()
            ->table()
            ->tr()
            ->td()
            ->p();

        // assertions
        $this->assertEquals('<html><body><table><tr><td><p></p></td></tr></table></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing div in div tag
     */
    public function testAddPInDiv(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()
            ->div()
            ->p();

        // assertions
        $this->assertEquals('<html><body><div><p></p></div></body></html>', $htmlReport->compile());
    }
}
