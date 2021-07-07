<?php
namespace Mezon\Report\Tests;

use PHPUnit\Framework\TestCase;
use Mezon\Report\Html;

class TdUnitTest extends TestCase
{

    /**
     * Testing additing empty td element
     */
    public function testAdditingEmptyTd(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()
            ->table()
            ->tr()
            ->td();

        // assertions
        $this->assertEquals('<html><body><table><tr><td></td></tr></table></body></html>', $htmlReport->compile());
    }

    /**
     * Testing multyple td at the table
     */
    public function testAdditingMultypleTd(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $tr = $htmlReport->body()
            ->table()
            ->tr();
        $tr->td();
        $tr->td();

        // assertions
        $this->assertEquals(
            '<html><body><table><tr><td></td><td></td></tr></table></body></html>',
            $htmlReport->compile());
    }

    /**
     * Testing inner html additing
     */
    public function testAddInnerHtmls(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $td = $htmlReport->body()
            ->table()
            ->tr()
            ->td();

        $td->innerHtml('<p></p>');
        $td->innerHtml('<p></p>');

        // assertions
        $this->assertEquals(
            '<html><body><table><tr><td><p></p><p></p></td></tr></table></body></html>',
            $htmlReport->compile());
    }
}
