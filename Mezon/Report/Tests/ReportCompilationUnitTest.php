<?php
namespace Mezon\Report\Tests;

use PHPUnit\Framework\TestCase;
use Mezon\Report\Html;

/**
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ReportCompilationUnitTest extends TestCase
{

    /**
     * Testing exception while empty report compilation
     */
    public function testEmptyReportCompilationException(): void
    {
        // assertions
        $this->expectException(\Exception::class);

        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->compile();
    }

    /**
     * Testing report compilation
     */
    public function testReportCompilation(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body();

        // assertions
        $this->assertEquals('<html><body></body></html>', $htmlReport->compile());
    }

    /**
     * Testing that only single tag 'body' will be added
     */
    public function testSingleBody(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body();
        $htmlReport->body();

        // assertions
        $this->assertEquals('<html><body></body></html>', $htmlReport->compile());
    }

    /**
     * Testing inner html additing
     */
    public function testAddInnerHtmls(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()->innerHtml('<p></p>');
        $htmlReport->body()->innerHtml('<p></p>');

        // assertions
        $this->assertEquals('<html><body><p></p><p></p></body></html>', $htmlReport->compile());
    }
}
