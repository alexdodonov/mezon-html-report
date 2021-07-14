<?php
namespace Mezon\Report\Html\Tag;

use Mezon\Report\CompilatorInterface;
use Mezon\Report\ElementsArray;

/**
 * Class CssProperty
 *
 * @package Mezon
 * @subpackage HtmlReport
 * @author Dodonov A.A.
 * @version v.1.0 (2021/07/12)
 * @copyright Copyright (c) 2021, aeon.org
 */

/**
 * CssProperty element generator
 */
class CssProperty implements CompilatorInterface
{

    /**
     * Property name
     *
     * @var string
     */
    private $propertyName = '';

    /**
     * Property value
     *
     * @var string
     */
    private $propertyValue = '';

    /**
     * Constructor
     *
     * @param string $propertyName
     *            property name
     */
    public function __construct(string $propertyName)
    {
        $this->propertyName = $propertyName;
    }

    /**
     * Method sets property value
     *
     * @param string $propertyValue
     *            value of the property
     */
    public function property(string $propertyValue): void
    {
        $this->propertyValue = $propertyValue;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Mezon\Report\CompilatorInterface::compile()
     */
    public function compile(): string
    {
        if ($this->propertyName === '') {
            throw (new \Exception('Property name was not setup', - 1));
        }

        return $this->propertyName . ':' . $this->propertyValue . ';';
    }
}
