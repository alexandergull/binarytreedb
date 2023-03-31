<?php

spl_autoload_register( 'ct_usp_autoloader' );

/**
 * Autoloader for \Cleantalk\* classes
 *
 * @param string $class
 *
 * @return void
 */
function ct_usp_autoloader( $class ){
	
	// Register class auto loader
	// Custom modules
    error_log('CTDEBUG: [' . __FUNCTION__ . '] [$class]: ' . var_export($class,true));
	if( strpos( $class, 'BTreeDb' ) !== false ){
	    error_log('CTDEBUG: [' . __FUNCTION__ . '] [CLASS FOUND ]: ' . var_export($class,true));
		$class = str_replace( '\\', DIRECTORY_SEPARATOR, $class );
        error_log('CTDEBUG: [' . __FUNCTION__ . '] [REPLACED CLASS ]: ' . var_export($class,true));
        $class_file = __DIR__ . DIRECTORY_SEPARATOR . $class . '.php';
        error_log('CTDEBUG: [' . __FUNCTION__ . '] [CLASS FILE ]: ' . var_export($class,true));
        if( file_exists( $class_file ) ){
            error_log('CTDEBUG: [' . __FUNCTION__ . '] [FILE EXISTS ]: ' . var_export($class_file,true));
            require_once( $class_file );
			error_log('CTDEBUG: [' . __FUNCTION__ . '] [REQUIRE $class_file]: ' . var_export($class_file,true));
		} else {
            error_log('CTDEBUG: [' . __FUNCTION__ . '] [FILE DOES NOT EXISTS]: ' . var_export($class_file,true));
        }
	}
}