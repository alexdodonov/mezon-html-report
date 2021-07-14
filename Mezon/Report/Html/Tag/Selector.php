<?php
namespace Mezon\Report\Html\Tag;

use Mezon\Report\CompilatorInterface;
use Mezon\Report\ElementsArray;
use Mezon\Report\Html\AddTrait;

/**
 * Class Selector
 *
 * @package Mezon
 * @subpackage HtmlReport
 * @author Dodonov A.A.
 * @version v.1.0 (2021/07/12)
 * @copyright Copyright (c) 2021, aeon.org
 */

/**
 * Selector element generator
 */
class Selector extends ElementsArray implements CompilatorInterface
{
    
    use AddTrait\CssProperty;

    /**
     * Selector
     *
     * @var string
     */
    private $selectorName = '';

    /**
     * Constructor
     *
     * @param string $selectorName
     *            selector
     */
    public function __construct(string $selectorName)
    {
        $this->selectorName = $selectorName;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Mezon\Report\CompilatorInterface::compile()
     */
    public function compile(): string
    {
        if ($this->selectorName === '') {
            throw (new \Exception('Selector name was not setup', - 1));
        }

        return $this->selectorName . ' {' . parent::compile() . '}';
    }
}
