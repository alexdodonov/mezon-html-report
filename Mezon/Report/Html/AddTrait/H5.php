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
     * @param string $text
     *            inner text
     * @return Tag\H5 'h5' tag
     */
    public function h5(string $text = ''): Tag\H5
    {
        $h5 = new Tag\H5($text);

        $this->addElement($h5);

        return $h5;
    }
}
