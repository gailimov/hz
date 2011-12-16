<?php

/**
 * hz - it's cool
 * 
 * @author    Kanat Gailimov <gailimov@gmail.com>
 * @copyright 2011 Kanat Gailimov (http://kanat.gailimov.kz)
 * @license   http://www.gnu.org/licenses/gpl.html GNU General Public License v3
 */

namespace classes;

/**
 * Config
 */
class Config
{
    /**
     * Params
     * 
     * @var array
     */
    public $params = array();
    
    private function __construct()
    {
        $this->params = require Registry::get('rootPath') . '/config.php';
    }
    
    /**
     * Returns new instance
     * 
     * @return Config
     */
    public static function factory()
    {
        return new self();
    }
}
