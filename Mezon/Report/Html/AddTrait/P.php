<?php
namespace Mezon\Report\Html\AddTrait;

use Mezon\Report\CompilatorInterface;
use Mezon\Report\Html\Tag;

/**
 * Trait P
 *
 * @package Mezon
 * @subpackage HtmlReport
 * @author Dodonov A.A.
 * @version v.1.0 (2021/07/12)
 * @copyright Copyright (c) 2021, aeon.org
 */

/**
 * P creator trait
 */
trait P
{

    /**
     * Method adds nested element to tag
     *
     * @param
     *            CompilatorInterface element to be added
     */
    protected abstract function addElement(CompilatorInterface $element);

    /**
     * Method adds 'p' tag to the parent element
     *
     * @param string $text inner text
     * @return Tag\P 'p' tag
     */
    public function p(string $text = ''): Tag\P
    {
        $p = new Tag\P($text);

        $this->addElement($p);

        return $p;
    }
}
