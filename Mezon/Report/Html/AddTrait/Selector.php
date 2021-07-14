<?php
namespace Mezon\Report\Html\AddTrait;

use Mezon\Report\CompilatorInterface;
use Mezon\Report\Html\Tag;

/**
 * Trait Style
 *
 * @package Mezon
 * @subpackage HtmlReport
 * @author Dodonov A.A.
 * @version v.1.0 (2021/07/12)
 * @copyright Copyright (c) 2021, aeon.org
 */

/**
 * Selector creator trait
 */
trait Selector
{

    /**
     * Method adds nested element to tag
     *
     * @param
     *            CompilatorInterface element to be added
     */
    protected abstract function addElement(CompilatorInterface $element);

    /**
     * Method adds css property to the parent element
     *
     * @param string $selectorName
     *            selector name
     * @return Tag\Selector css property
     */
    public function selector(string $selectorName): Tag\Selector
    {
        $selector = new Tag\Selector($selectorName);

        $this->addElement($selector);

        return $selector;
    }
}
