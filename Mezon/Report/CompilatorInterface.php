<?php
namespace Mezon\Report;

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
 * Interface for tag compilation
 */
interface CompilatorInterface
{

    /**
     * Tag compilation function
     *
     * @return string compiled tag
     */
    public function compile(): string;
}
