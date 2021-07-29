<?php
namespace Mezon\Report\Html\AddTrait;

use Mezon\Report\CompilatorInterface;
use Mezon\Report\Html\Tag;

/**
 * Trait H2
 *
 * @package Mezon
 * @subpackage HtmlReport
 * @author Dodonov A.A.
 * @version v.1.0 (2021/06/25)
 * @copyright Copyright (c) 2021, aeon.org
 */

/**
 * H2 creator trait
 */
trait H2
{

    /**
     * Method adds nested element to tag
     *
     * @param
     *            CompilatorInterface element to be added
     */
    protected abstract function addElement(CompilatorInterface $element);

    /**
     * Method adds 'h2' tag to the parent element
     *
     * @param string $text
     *            inner text
     * @return Tag\H2 'h2' tag
     */
    public function h2(string $text = ''): Tag\H2
    {
        $h2 = new Tag\H2($text);

        $this->addElement($h2);

        return $h2;
    }
}
