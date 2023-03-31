<?php
/**
 *	Version: 3.7.0
 */

use BTreeDb\File\FileDB;

require_once 'CleantalkBTreeDB' . DIRECTORY_SEPARATOR .  'init.php';

$file_db = new FileDB('test_db');
$data = array(
    'network'         => sprintf('%u', ip2long('127.0.0.1')),
    'mask'        => sprintf( '%u', bindec( str_pad( str_repeat( '1', 32 ), 32, 0, STR_PAD_RIGHT ) ) ),
    'status'      => 2,
    'is_personal' => 0,
);
$file_db->prepareData(array($data))->insert();
$db_results = $file_db
    ->setWhere( array( 'network' => array('2130706433'), ) )
    ->setLimit( 0, 20 )
    ->select( 'network', 'mask', 'status', 'is_personal' );
if (!$file_db->errors::check()){
    error_log('CTDEBUG: [' . __FUNCTION__ . '] [$db_results]: ' . var_export($db_results,true));
} else {
    error_log('CTDEBUG: [' . __FUNCTION__ . '] []: ' . var_export($file_db->errors::get_all(),true));
}
//$file_db->delete();
