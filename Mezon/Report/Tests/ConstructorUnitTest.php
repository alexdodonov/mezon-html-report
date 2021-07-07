<?php
namespace Mezon\Report\Tests;

use PHPUnit\Framework\TestCase;
use Mezon\Report\Html;

class ConstructorUnitTest extends TestCase
{

    /**
     * Testing constructor
     */
    public function testConstructor()
    {
        // setup and test body
        $htmlReport = new Html();

        // assertions
        $this->assertInstanceOf(Html::class, $htmlReport);
    }
}
