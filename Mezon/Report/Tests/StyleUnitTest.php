<?php
namespace Mezon\Report\Tests;

use PHPUnit\Framework\TestCase;
use Mezon\Report\Html;

/**
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
class StyleUnitTest extends TestCase
{

    /**
     * Testing additing empty style
     */
    public function testAdditingEmptyStyle(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->head()->style();
        $htmlReport->body();

        // assertions
        $this->assertEquals('<html><head><style></style></head><body></body></html>', $htmlReport->compile());
    }

    /**
     * Testing multyple styles at the table
     */
    public function testAdditingMultypleStyles(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->head()->style();
        $htmlReport->head()->style();
        $htmlReport->body();

        // assertions
        $this->assertEquals('<html><head><style></style><style></style></head><body></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing style with inner html
     */
    public function testAdditingStyleWithInnerHtml(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->head()
            ->style()
            ->innerHtml('inner html');
        $htmlReport->body();

        // assertions
        $this->assertEquals('<html><head><style>inner html</style></head><body></body></html>', $htmlReport->compile());
    }
}
