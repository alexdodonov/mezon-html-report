<?php
namespace Mezon\Report;

/**
 * Class ElementsArray
 *
 * @package HtmlReport
 * @subpackage ElementsArray
 * @author Dodonov A.A.
 * @version v.1.0 (2021/06/25)
 * @copyright Copyright (c) 2021, aeon.org
 */

/**
 * Interface for tag compilation
 */
class ElementsArray
{

    /**
     * Elements of the body
     *
     * @var CompilatorInterface[]
     */
    private $elements = [];

    /**
     * Method adds nested element
     *
     * @param CompilatorInterface $element
     *            element to be added
     */
    protected function addElement(CompilatorInterface $element): void
    {
        $this->elements[] = $element;
    }

    /**
     * Method returns elements
     *
     * @return CompilatorInterface[] elements
     */
    protected function getElements(): array
    {
        return $this->elements;
    }

    /**
     * Method compiles nested elements
     *
     * @return string compiled nested elements
     */
    public function compile(): string
    {
        $content = '';

        foreach ($this->getElements() as $element) {
            $content .= $element->compile();
        }

        return $content;
    }
}
