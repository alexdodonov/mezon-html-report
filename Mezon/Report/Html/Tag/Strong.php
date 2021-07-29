<?php
namespace Mezon\Report\Html\Tag;

use Mezon\Report\Html\AddTrait;
use Mezon\Report\Html\Tag;

/**
 * Class Strong
 *
 * @package Mezon
 * @subpackage HtmlReport
 * @author Dodonov A.A.
 * @version v.1.0 (2021/07/12)
 * @copyright Copyright (c) 2021, aeon.org
 */

/**
 * Strong element generator
 */
class Strong extends Tag
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
        parent::__construct('strong');

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
            return '<strong>' . $this->text . '</strong>';
        }
    }
}
