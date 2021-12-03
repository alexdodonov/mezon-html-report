<?php
namespace Mezon\Report\Tests;

use PHPUnit\Framework\TestCase;
use Mezon\Report\Html\Tag;

/**
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
class TagUnitTest extends TestCase
{

    /**
     * Testing exception while compilation tag withowt name
     */
    public function testException(): void
    {
        // assertions
        $this->expectException(\Exception::class);

        // setup
        $tag = new Tag('');

        // test body
        $tag->compile();
    }

    /**
     * Testing tag compilation
     */
    public function test(): void
    {
        // setup
        $tag = new Tag('p');

        // test body and assertions
        $this->assertEquals('<p></p>', $tag->compile());
    }
}
