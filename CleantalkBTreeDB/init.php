<?php
/**
 * Attaches
 * /lib/autoloader.php
 *
 * Sets all main constants
 *
 * Version: 3.7.0
 */

if ( ! defined('DS') ) {
    define( 'DS', DIRECTORY_SEPARATOR );
}

// Directories
define( 'CT_B3DB_ROOT', realpath(__DIR__ ) . DS );
define( 'CT_B3DB_SITE_ROOT', realpath( CT_B3DB_ROOT . '..') . DS );
define( 'CT_B3DB_LIB', CT_B3DB_ROOT . 'lib' . DS );
define( 'CT_B3DB_DATA', CT_B3DB_ROOT . 'data' . DS );

require_once 'lib' . DS . 'autoloader.php';

// Create empty error object
\Cleantalk\USP\Common\Err::getInstance();




