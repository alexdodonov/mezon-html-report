<?php
namespace Mezon\Report\Html\AddTrait;

use Mezon\Report\CompilatorInterface;
use Mezon\Report\Html\Tag;

/**
 * Trait Strong
 *
 * @package Mezon
 * @subpackage HtmlReport
 * @author Dodonov A.A.
 * @version v.1.0 (2021/07/12)
 * @copyright Copyright (c) 2021, aeon.org
 */

/**
 * Strong creator trait
 */
trait Strong
{

    /**
     * Method adds nested element to tag
     *
     * @param
     *            CompilatorInterface element to be added
     */
    protected abstract function addElement(CompilatorInterface $element);

    /**
     * Method adds 'strong' tag to the parent element
     *
     * @return Tag\Strong 'strong' tag
     */
    public function strong(): Tag\Strong
    {
        $strong = new Tag\Strong();

        $this->addElement($strong);

        return $strong;
    }
}
