<?php
namespace Mezon\Report\Html\AddTrait;

use Mezon\Report\CompilatorInterface;
use Mezon\Report\Html\Tag;

/**
 * Trait H1
 *
 * @package Mezon
 * @subpackage HtmlReport
 * @author Dodonov A.A.
 * @version v.1.0 (2021/06/25)
 * @copyright Copyright (c) 2021, aeon.org
 */

/**
 * H1 creator trait
 */
trait H1
{

    /**
     * Method adds nested element to tag
     *
     * @param
     *            CompilatorInterface element to be added
     */
    protected abstract function addElement(CompilatorInterface $element);

    /**
     * Method adds 'h1' tag to the parent element
     *
     * @param string $text
     *            inner text
     * @return Tag\H1 'h1' tag
     */
    public function h1(string $text = ''): Tag\H1
    {
        $h1 = new Tag\H1($text);

        $this->addElement($h1);

        return $h1;
    }
}
