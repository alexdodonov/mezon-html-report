<?php
namespace Mezon\Report\Html\AddTrait;

use Mezon\Report\CompilatorInterface;
use Mezon\Report\Html\Tag;

/**
 * Trait H4
 *
 * @package Mezon
 * @subpackage HtmlReport
 * @author Dodonov A.A.
 * @version v.1.0 (2021/06/25)
 * @copyright Copyright (c) 2021, aeon.org
 */

/**
 * H4 creator trait
 */
trait H4
{

    /**
     * Method adds nested element to tag
     *
     * @param
     *            CompilatorInterface element to be added
     */
    protected abstract function addElement(CompilatorInterface $element);

    /**
     * Method adds 'h4' tag to the parent element
     *
     * @return Tag\H4 'h4' tag
     */
    public function h4(): Tag\H4
    {
        $h4 = new Tag\H4();

        $this->addElement($h4);

        return $h4;
    }
}
