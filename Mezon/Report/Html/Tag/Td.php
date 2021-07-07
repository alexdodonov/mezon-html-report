<?php
namespace Mezon\Report\Html\Tag;

use Mezon\Report\Html\AddTrait;
use Mezon\Report\Html\Tag;

/**
 * Class Tr
 *
 * @package Mezon
 * @subpackage HtmlReport
 * @author Dodonov A.A.
 * @version v.1.0 (2021/06/25)
 * @copyright Copyright (c) 2021, aeon.org
 */

/**
 * Td element generator
 */
class Td extends Tag
{

    use AddTrait\InnerHtml;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct('td');
    }
}
