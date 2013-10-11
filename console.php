<?php
/**
 * This trimmed down version of the Magento index.php provides an interactive
 * console for Magento.
 *
 * @author     Franklin P. Strube <franklin.strube@gmail.com>
 * @version    1.0
 * @copyright  Copyright (c) 2013 Franklin P. Strube (http://franklinstrube.com)
 */
if (version_compare(phpversion(), '5.2.0', '<')===true) {
    echo <<<EOD
Whoops, it looks like you have an invalid PHP version.
Magento supports PHP 5.2.0 or newer. Find out how to install Magento using PHP-CGI as a work-around.
http://www.magentocommerce.com/install

EOD;
    exit;
}
/**
 * Error reporting
 */
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);

/**
 * Compilation includes configuration file
 */
define('MAGENTO_ROOT', getcwd());

$compilerConfig = MAGENTO_ROOT . '/includes/config.php';
if (file_exists($compilerConfig)) {
    include $compilerConfig;
}

$mageFilename = MAGENTO_ROOT . '/app/Mage.php';

if (!file_exists($mageFilename)) {
    echo $mageFilename." was not found";
    exit;
}

require_once $mageFilename;

#Varien_Profiler::enable();

if (isset($_SERVER['MAGE_IS_DEVELOPER_MODE'])) {
    Mage::setIsDeveloperMode(true);
}

#ini_set('display_errors', 1);

umask(0);

Mage::app('admin');
