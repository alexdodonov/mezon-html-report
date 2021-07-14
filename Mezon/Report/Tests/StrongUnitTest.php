<?php
namespace Mezon\Report\Tests;

use PHPUnit\Framework\TestCase;
use Mezon\Report\Html;

class StrongUnitTest extends TestCase
{

    /**
     * Testing additing single strong
     */
    public function testAddSingleStrong(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()->strong();

        // assertions
        $this->assertEquals('<html><body><strong></strong></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing multiple strongs
     */
    public function testAddMultipleStrongs(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()->strong();
        $htmlReport->body()->strong();

        // assertions
        $this->assertEquals('<html><body><strong></strong><strong></strong></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing inner html in strong
     */
    public function testAddInnerHtmlInStrong(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()
            ->strong()
            ->innerHtml('<span></span>');

        // assertions
        $this->assertEquals('<html><body><strong><span></span></strong></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing strong in td tag
     */
    public function testAddStrongInTd(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()
            ->table()
            ->tr()
            ->td()
            ->strong();

        // assertions
        $this->assertEquals('<html><body><table><tr><td><strong></strong></td></tr></table></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing strong in div tag
     */
    public function testAddStrongInDiv(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()
            ->div()
            ->strong();

        // assertions
        $this->assertEquals('<html><body><div><strong></strong></div></body></html>', $htmlReport->compile());
    }

    /**
     * Testing additing strong in p tag
     */
    public function testAddStrongInP(): void
    {
        // setup
        $htmlReport = new Html();

        // test body
        $htmlReport->body()
            ->p()
            ->strong();

        // assertions
        $this->assertEquals('<html><body><p><strong></strong></p></body></html>', $htmlReport->compile());
    }
    
    /**
     * Testing additing strong in strong tag
     */
    public function testAddStrongInStrong(): void
    {
        // setup
        $htmlReport = new Html();
        
        // test body
        $htmlReport->body()
        ->strong()
        ->strong();
        
        // assertions
        $this->assertEquals('<html><body><strong><strong></strong></strong></body></html>', $htmlReport->compile());
    }
}
