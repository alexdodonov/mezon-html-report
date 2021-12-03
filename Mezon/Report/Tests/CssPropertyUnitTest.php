<?php
namespace Mezon\Report\Tests;

use PHPUnit\Framework\TestCase;
use Mezon\Report\Html;

/**
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
class CssPropertyUnitTest extends TestCase
{

    /**
     * Testing additing property
     */
    public function testAdditingProperty(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->head()
            ->style()
            ->selector('body')
            ->css('font-family', 'Roboto');
        $htmlReport->body();

        // assertions
        $this->assertEquals('<html><head><style>body {font-family:Roboto;}</style></head><body></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing properties
     */
    public function testAdditingProperties(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $bodyStyle = $htmlReport->head()->style()->selector('body');
        $bodyStyle->css('font-family', 'Roboto');
        $bodyStyle->css('font-weight', '700');
        $htmlReport->body();

        // assertions
        $this->assertEquals('<html><head><style>body {font-family:Roboto;font-weight:700;}</style></head><body></body></html>', $htmlReport->compile());
    }
}
