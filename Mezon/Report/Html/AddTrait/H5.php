<?php
namespace Mezon\Report\Html\AddTrait;

use Mezon\Report\CompilatorInterface;
use Mezon\Report\Html\Tag;

/**
 * Trait H5
 *
 * @package Mezon
 * @subpackage HtmlReport
 * @author Dodonov A.A.
 * @version v.1.0 (2021/06/25)
 * @copyright Copyright (c) 2021, aeon.org
 */

/**
 * H5 creator trait
 */
trait H5
{

    /**
     * Method adds nested element to tag
     *
     * @param
     *            CompilatorInterface element to be added
     */
    protected abstract function addElement(CompilatorInterface $element);

    /**
     * Method adds 'h5' tag to the parent element
     *
     * @return Tag\H5 'h5' tag
     */
    public function h5(): Tag\H5
    {
        $h5 = new Tag\H5();

        $this->addElement($h5);

        return $h5;
    }
}
