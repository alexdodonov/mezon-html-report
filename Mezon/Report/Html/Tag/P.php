<?php
namespace Mezon\Report\Html\Tag;

use Mezon\Report\Html\AddTrait;
use Mezon\Report\Html\Tag;

/**
 * Class P
 *
 * @package Mezon
 * @subpackage HtmlReport
 * @author Dodonov A.A.
 * @version v.1.0 (2021/09/12)
 * @copyright Copyright (c) 2021, aeon.org
 */

/**
 * P element generator
 */
class P extends Tag
{
    use AddTrait\InnerHtml, AddTrait\Div, AddTrait\Div, AddTrait\Strong;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct('p');
    }
}
