<?php
namespace Mezon\Report\Html\Tag;

use Mezon\Report\Html\AddTrait;
use Mezon\Report\Html\Tag;

/**
 * Class Div
 *
 * @package Mezon
 * @subpackage HtmlReport
 * @author Dodonov A.A.
 * @version v.1.0 (2021/09/12)
 * @copyright Copyright (c) 2021, aeon.org
 */

/**
 * Div element generator
 */
class Div extends Tag
{
    use AddTrait\InnerHtml, AddTrait\Div, AddTrait\P, AddTrait\Strong;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct('div');
    }
}