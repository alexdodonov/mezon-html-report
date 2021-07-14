<?php
namespace Mezon\Report\Html\Tag;

use Mezon\Report\Html\AddTrait;
use Mezon\Report\Html\Tag;

/**
 * Class Style
 *
 * @package Mezon
 * @subpackage HtmlReport
 * @author Dodonov A.A.
 * @version v.1.0 (2021/07/09)
 * @copyright Copyright (c) 2021, aeon.org
 */

/**
 * Style element generator
 */
class Style extends Tag
{
    use AddTrait\Selector, AddTrait\InnerHtml;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct('style');
    }
}
