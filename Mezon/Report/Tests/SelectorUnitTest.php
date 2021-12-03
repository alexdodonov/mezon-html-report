<?php
namespace Mezon\Report\Tests;

use PHPUnit\Framework\TestCase;
use Mezon\Report\Html;

/**
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
class SelectorUnitTest extends TestCase
{

    /**
     * Testing additing selector
     */
    public function testAdditingSelector(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->head()
            ->style()
            ->selector('body');
        $htmlReport->body();

        // assertions
        $this->assertEquals('<html><head><style>body {}</style></head><body></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing selectors
     */
    public function testAdditingSelectors(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $style = $htmlReport->head()->style();
        $style->selector('body');
        $style->selector('div');
        $htmlReport->body();

        // assertions
        $this->assertEquals('<html><head><style>body {}div {}</style></head><body></body></html>', $htmlReport->compile());
    }
}
