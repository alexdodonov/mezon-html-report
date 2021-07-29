<?php
namespace Mezon\Report\Html\Tag;

use Mezon\Report\Html\AddTrait;
use Mezon\Report\Html\Tag;

/**
 * Class H2
 *
 * @package Mezon
 * @subpackage HtmlReport
 * @author Dodonov A.A.
 * @version v.1.0 (2021/09/12)
 * @copyright Copyright (c) 2021, aeon.org
 */

/**
 * H2 element generator
 */
class H2 extends Tag
{
    use AddTrait\InnerHtml, AddTrait\Div, AddTrait\P, AddTrait\Strong;

    /**
     * Text
     *
     * @var string
     */
    private $text = '';

    /**
     * Constructor
     *
     * @param string $text
     *            inner text
     */
    public function __construct(string $text = '')
    {
        parent::__construct('h2');

        $this->text = $text;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Mezon\Report\CompilatorInterface::compile()
     */
    public function compile(): string
    {
        if ($this->text === '') {
            return parent::compile();
        } else {
            return '<h2>' . $this->text . '</h2>';
        }
    }
}
