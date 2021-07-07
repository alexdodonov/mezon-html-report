<?php
namespace Mezon\Report\Html;

use Mezon\Report\CompilatorInterface;
use Mezon\Report\ElementsArray;

/**
 * Class Tag
 *
 * @package Mezon
 * @subpackage HtmlReport
 * @author Dodonov A.A.
 * @version v.1.0 (2021/06/25)
 * @copyright Copyright (c) 2021, aeon.org
 */

/**
 * Body element generator
 */
class Tag extends ElementsArray implements CompilatorInterface
{

    /**
     * Tag name
     *
     * @var string
     */
    private $tagName = '';

    /**
     * Constructor
     *
     * @param string $tagName
     */
    public function __construct(string $tagName)
    {
        $this->tagName = $tagName;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Mezon\Report\CompilatorInterface::compile()
     */
    public function compile(): string
    {
        if ($this->tagName === '') {
            throw (new \Exception('Tag name was not setup', - 1));
        }

        return '<' . $this->tagName . '>' . parent::compile() . '</' . $this->tagName . '>';
    }
}
