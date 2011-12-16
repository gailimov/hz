<?php

/**
 * hz - it's cool
 * 
 * @author    Kanat Gailimov <gailimov@gmail.com>
 * @copyright 2011 Kanat Gailimov (http://kanat.gailimov.kz)
 * @license   http://www.gnu.org/licenses/gpl.html GNU General Public License v3
 */

namespace hz;

use classes\Config;

/**
 * Prepend title
 * 
 * @param  string $title Title
 * @return string
 */
function prependTitle($title)
{
    return $title . ' ' . Config::factory()->params['titleSeparator'] . ' ' . Config::factory()->params['title'];
}
