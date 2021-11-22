<?php
namespace Mezon\Report\Html\Tag;

use Mezon\Report\Html\AddTrait;
use Mezon\Report\Html\Tag;
use Mezon\Report\CompilatorInterface;

/**
 * Class P
 *
 * @package Mezon
 * @subpackage HtmlReport
 * @author Dodonov A.A.
 * @version v.1.0 (2021/09/12)
 * @copyright Copyright (c) 2021, aeon.org
 */

/**
 * P element generator
 */
class P extends Tag
{
    use AddTrait\InnerHtml, AddTrait\Div, AddTrait\Div, AddTrait\Strong;

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
        parent::__construct('p');

        $this->text = $text;
    }

    /**
     *
     * {@inheritdoc}
     * @see CompilatorInterface::compile()
     */
    public function compile(): string
    {
        if ($this->text === '') {
            return parent::compile();
        } else {
            return '<p>' . $this->text . '</p>';
        }
    }
}
