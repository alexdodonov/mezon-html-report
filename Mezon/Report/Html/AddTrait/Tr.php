<?php
namespace Mezon\Report\Html\AddTrait;

use Mezon\Report\CompilatorInterface;
use Mezon\Report\Html\Tag;

/**
 * Trait Tr
 *
 * @package Mezon
 * @subpackage HtmlReport
 * @author Dodonov A.A.
 * @version v.1.0 (2021/06/25)
 * @copyright Copyright (c) 2021, aeon.org
 */

/**
 * Tr element generator
 */
trait Tr
{

    /**
     * Method adds nested element to tag
     *
     * @param
     *            CompilatorInterface element to be added
     */
    protected abstract function addElement(CompilatorInterface $element);

    /**
     * Method adds 'tr' tag to the parent element
     *
     * @return Tag\Tr 'tr' tag
     */
    public function tr(): Tag\Tr
    {
        $tr = new Tag\Tr();

        $this->addElement($tr);

        return $tr;
    }
}
