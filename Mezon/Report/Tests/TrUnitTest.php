<?php
namespace Mezon\Report\Tests;

use PHPUnit\Framework\TestCase;
use Mezon\Report\Html;

class TrUnitTest extends TestCase
{

    /**
     * Testing additing empty tr element
     */
    public function testAdditingEmptyTr(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()
            ->table()
            ->tr();

        // assertions
        $this->assertEquals('<html><body><table><tr></tr></table></body></html>', $htmlReport->compile());
    }

    /**
     * Testing multyple tr at the table
     */
    public function testAdditingMultypleTr(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $table = $htmlReport->body()->table();
        $table->tr();
        $table->tr();

        // assertions
        $this->assertEquals('<html><body><table><tr></tr><tr></tr></table></body></html>', $htmlReport->compile());
    }
}
