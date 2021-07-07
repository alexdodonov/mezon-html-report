<?php
namespace Mezon\Report\Tests;

use PHPUnit\Framework\TestCase;
use Mezon\Report\Html;

class TableUnitTest extends TestCase
{

    /**
     * Testing additing empty table
     */
    public function testAdditingEmptyTable(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()->table();

        // assertions
        $this->assertEquals('<html><body><table></table></body></html>', $htmlReport->compile());
    }

    /**
     * Testing multyple tables at the table
     */
    public function testAdditingMultypleTables(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()->table();
        $htmlReport->body()->table();

        // assertions
        $this->assertEquals('<html><body><table></table><table></table></body></html>', $htmlReport->compile());
    }
}
