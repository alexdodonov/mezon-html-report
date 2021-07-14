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
 * @version v.1.0 (2021/07/09)
 * @copyright Copyright (c) 2021, aeon.org
 */

/**
 * Table creator trait
 */
trait Style
{

    /**
     * Method adds nested element to tag
     *
     * @param
     *            CompilatorInterface element to be added
     */
    protected abstract function addElement(CompilatorInterface $element);

    /**
     * Method adds 'style' tag to the parent element
     *
     * @return Tag\Style 'style' tag
     */
    public function style(): Tag\Style
    {
        $style = new Tag\Style();

        $this->addElement($style);

        return $style;
    }
}
