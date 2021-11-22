<?php
namespace Mezon\Report\Html\Tag;

use Mezon\Report\ElementsArray;
use Mezon\Report\CompilatorInterface;

/**
 * Class InnerHtml
 *
 * @package Mezon
 * @subpackage HtmlReport
 * @author Dodonov A.A.
 * @version v.1.0 (2021/06/25)
 * @copyright Copyright (c) 2021, aeon.org
 */

/**
 * Inner html generator
 */
class InnerHtml extends ElementsArray implements CompilatorInterface
{

    /**
     * Raw html
     *
     * @var string
     */
    private $innerHtml = '';

    /**
     * Constructor
     *
     * @param string $innerHtml
     */
    public function __construct(string $innerHtml)
    {
        $this->innerHtml = $innerHtml;
    }

    /**
     *
     * {@inheritdoc}
     * @see CompilatorInterface::compile()
     */
    public function compile(): string
    {
        return $this->innerHtml;
    }
}
