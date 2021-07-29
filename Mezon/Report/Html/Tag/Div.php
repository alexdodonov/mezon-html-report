<?php
namespace Mezon\Report\Html\Tag;

use Mezon\Report\Html\AddTrait;
use Mezon\Report\Html\Tag;

/**
 * Class Div
 *
 * @package Mezon
 * @subpackage HtmlReport
 * @author Dodonov A.A.
 * @version v.1.0 (2021/09/12)
 * @copyright Copyright (c) 2021, aeon.org
 */

/**
 * Div element generator
 */
class Div extends Tag
{
    use AddTrait\InnerHtml, AddTrait\Div, AddTrait\P, AddTrait\Strong, AddTrait\H1, AddTrait\H2, AddTrait\H3, AddTrait\H4, AddTrait\H5;

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
        parent::__construct('div');

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
            return '<div>' . $this->text . '</div>';
        }
    }
}
