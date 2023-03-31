<?php
global $uniforce_tasks;
	$uniforce_tasks = array (
  'sfw_update' => 
  array (
    'handler' => 'uniforce_fw_update',
    'next_call' => 1680244393,
    'executed' => 0,
    'last_executed' => 1680157985,
    'period' => 86400,
    'params' => 
    array (
    ),
  ),
  'security_send_logs' => 
  array (
    'handler' => 'uniforce_security_send_logs',
    'next_call' => 1680243060,
    'executed' => 1,
    'last_executed' => 1680239459,
    'period' => 3600,
    'params' => 
    array (
    ),
  ),
  'fw_send_logs' => 
  array (
    'handler' => 'uniforce_fw_send_logs',
    'next_call' => 1680243060,
    'executed' => 1,
    'last_executed' => 1680239459,
    'period' => 3600,
    'params' => 
    array (
    ),
  ),
  'clean_black_lists' => 
  array (
    'handler' => 'uniforce_clean_black_lists',
    'next_call' => 1680244362,
    'executed' => 0,
    'last_executed' => 0,
    'period' => 86400,
    'params' => 
    array (
    ),
  ),
  'update_signatures' => 
  array (
    'handler' => 'usp_scanner__get_signatures',
    'next_call' => 1680244393,
    'executed' => 0,
    'last_executed' => 1680157985,
    'period' => 86400,
    'params' => 
    array (
    ),
  ),
  'check_for_updates' => 
  array (
    'handler' => 'usp_get_latest_version',
    'next_call' => 1680244393,
    'executed' => 0,
    'last_executed' => 1680157985,
    'period' => 86400,
    'params' => 
    array (
    ),
  ),
);