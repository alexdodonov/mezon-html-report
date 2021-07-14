<?php
namespace Mezon\Report\Html\Tag;

use Mezon\Report\Html\AddTrait;
use Mezon\Report\Html\Tag;

/**
 * Class Head
 *
 * @package Mezon
 * @subpackage HtmlReport
 * @author Dodonov A.A.
 * @version v.1.0 (2021/06/25)
 * @copyright Copyright (c) 2021, aeon.org
 */

/**
 * Head element generator
 */
class Head extends Tag
{

    use AddTrait\Style;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct('head');
    }
}
