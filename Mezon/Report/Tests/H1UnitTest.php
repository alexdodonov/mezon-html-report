<?php
namespace Mezon\Report\Tests;

use PHPUnit\Framework\TestCase;
use Mezon\Report\Html;

/**
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
class H1UnitTest extends TestCase
{

    /**
     * Testing additing single h1
     */
    public function testAddSingleH1(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()->h1();

        // assertions
        $this->assertEquals('<html><body><h1></h1></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing multiple h1
     */
    public function testAddMultipleH1(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()->h1();
        $htmlReport->body()->h1();

        // assertions
        $this->assertEquals('<html><body><h1></h1><h1></h1></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing inner html in h1
     */
    public function testAddInnerHtmlInH1(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()
            ->h1()
            ->innerHtml('<span></span>');

        // assertions
        $this->assertEquals('<html><body><h1><span></span></h1></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing h1 in td tag
     */
    public function testAddH1InTd(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()
            ->table()
            ->tr()
            ->td()
            ->h1();

        // assertions
        $this->assertEquals(
            '<html><body><table><tr><td><h1></h1></td></tr></table></body></html>',
            $htmlReport->compile());
    }

    /**
     * Testing additing H1 in div tag
     */
    public function testAddH1InDiv(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()
            ->div()
            ->h1();

        // assertions
        $this->assertEquals('<html><body><div><h1></h1></div></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing tag with inner text
     */
    public function testAddTagWithText(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()->h1('s');

        // assertions
        $this->assertEquals('<html><body><h1>s</h1></body></html>', $htmlReport->compile());
    }
}
