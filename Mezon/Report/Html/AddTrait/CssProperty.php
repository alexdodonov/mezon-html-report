<?php
namespace Mezon\Report\Html\AddTrait;

use Mezon\Report\CompilatorInterface;
use Mezon\Report\Html\Tag;
use PhpParser\Node\Name;

/**
 * Trait CssProperty
 *
 * @package Mezon
 * @subpackage HtmlReport
 * @author Dodonov A.A.
 * @version v.1.0 (2021/07/12)
 * @copyright Copyright (c) 2021, aeon.org
 */

/**
 * Css Property creator trait
 */
trait CssProperty
{

    /**
     * Method adds nested element to tag
     *
     * @param
     *            CompilatorInterface element to be added
     */
    protected abstract function addElement(CompilatorInterface $element);

    /**
     * Method adds css property to the parent element
     *
     * @param string $propertyName
     *            property Name
     * @param string $propertyValue
     *            property value
     * @return Tag\CssProperty css property
     */
    public function css(string $propertyName, string $propertyValue = ''): Tag\CssProperty
    {
        $property = new Tag\CssProperty($propertyName);
        $property->property($propertyValue);

        $this->addElement($property);

        return $property;
    }
}
