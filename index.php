<?php

/**
 * hz - it's cool
 * 
 * @author    Kanat Gailimov <gailimov@gmail.com>
 * @copyright 2011 Kanat Gailimov (http://kanat.gailimov.kz)
 * @license   http://www.gnu.org/licenses/gpl.html GNU General Public License v3
 */

$page = isset($_GET['page']) ? preg_replace('/[^0-9A-Za-z_\\-\\/]/is', '', $_GET['page']) : 'index';

$file = __DIR__ . '/content/' . $page . '.php';

// Get content of requested page
if (file_exists($file)) {
    ob_start();
    require_once $file;
    $content = ob_get_clean();
} else {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    die;
}

require_once __DIR__ . '/classes/Loader.php';

\classes\Loader::factory()
    ->registerPath(__DIR__ . '/')
    ->registerAutoload();

\classes\Registry::set('rootPath', __DIR__);

require_once __DIR__ . '/functions.php';

$config = \classes\Config::factory()->params;
$mainTitle = isset($title) ? hz\prependTitle($title) : $config['title'];
$description = isset($description) ? $description : $config['description'];

require_once __DIR__ . '/template/template.php';
