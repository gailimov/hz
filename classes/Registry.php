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
 * Registry
 */
class Registry
{
    /**
     * Singleton instance
     * 
     * @var Registry
     */
    private static $_instance;
    
    /**
     * Registry
     * 
     * @var array
     */
    private $_registry = array();
    
    private function __construct()
    {
    }
    
    private function __clone()
    {
    }
    
    /**
     * Get singleton instance
     * 
     * @return Registry
     */
    private static function getInstance()
    {
        if (!self::$_instance)
            self::$_instance = new self();
        return self::$_instance;
    }
    
    /**
     * Set value by key
     * 
     * @param  string $key Key
     * @param  mixed  $value Value
     * @return void
     */
    public function set($key, $value)
    {
        self::getInstance()->_registry[$key] = $value;
    }
    
    /**
     * Get value by key
     * 
     * @param  string $key Key
     * @return mixed
     */
    public function get($key)
    {
        return self::getInstance()->_registry[$key];
    }
}
