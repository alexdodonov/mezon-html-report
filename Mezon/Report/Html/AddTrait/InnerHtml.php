<?php
namespace Mezon\Report\Html\AddTrait;

use Mezon\Report\CompilatorInterface;
use Mezon\Report\Html\Tag;

/**
 * Trait InnerHtml
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
trait InnerHtml
{

    /**
     * Method adds nested element to tag
     *
     * @param
     *            CompilatorInterface element to be added
     */
    protected abstract function addElement(CompilatorInterface $element);

    /**
     * Method adds 'InnerHtml' tag to the parent element
     *
     * @param string $innerHtml
     *            inner html
     * @return Tag\InnerHtml inner html
     */
    public function innerHtml(string $innerHtml): Tag\InnerHtml
    {
        $innerHtml = new Tag\InnerHtml($innerHtml);

        $this->addElement($innerHtml);

        return $innerHtml;
    }
}
