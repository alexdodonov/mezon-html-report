<?php
namespace Mezon\Report\Html\AddTrait;

use Mezon\Report\CompilatorInterface;
use Mezon\Report\Html\Tag;

/**
 * Trait Div
 *
 * @package Mezon
 * @subpackage HtmlReport
 * @author Dodonov A.A.
 * @version v.1.0 (2021/06/25)
 * @copyright Copyright (c) 2021, aeon.org
 */

/**
 * Div creator trait
 */
trait Div
{

    /**
     * Method adds nested element to tag
     *
     * @param
     *            CompilatorInterface element to be added
     */
    protected abstract function addElement(CompilatorInterface $element);

    /**
     * Method adds 'div' tag to the parent element
     *
     * @param string $text
     *            inner text
     * @return Tag\Div 'div' tag
     */
    public function div(string $text = ''): Tag\Div
    {
        $div = new Tag\Div($text);

        $this->addElement($div);

        return $div;
    }
}
