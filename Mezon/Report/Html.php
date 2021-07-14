<?php
namespace Mezon\Report;

use Mezon\Report\Html\Tag\Body;
use Mezon\Report\Html\Tag\Head;

/**
 * Class Html
 *
 * @package Mezon
 * @subpackage HtmlReport
 * @author Dodonov A.A.
 * @version v.1.0 (2021/06/25)
 * @copyright Copyright (c) 2021, aeon.org
 */

/**
 * HTML report generator
 */
class Html implements ReportInterface
{

    /**
     * Body element
     *
     * @var Body
     */
    private $body = null;

    /**
     * Head element
     *
     * @var Head
     */
    private $head = null;

    /**
     * Method returns body element of the HTML report
     *
     * @return Body tag
     */
    public function body(): Body
    {
        if ($this->body === null) {
            $this->body = new Body();
        }

        return $this->body;
    }

    /**
     * Method return head tag
     *
     * @return Head tag
     */
    public function head(): Head
    {
        if ($this->head === null) {
            $this->head = new Head();
        }

        return $this->head;
    }

    /**
     *
     * {@inheritdoc}
     * @see \Mezon\Report\ReportInterface::compile()
     */
    public function compile(): string
    {
        if ($this->body === null) {
            throw (new \Exception('You are trying to generate empty report', - 1));
        }

        return '<html>' . ($this->head === null ? '' : $this->head()->compile()) . $this->body->compile() . '</html>';
    }
}
