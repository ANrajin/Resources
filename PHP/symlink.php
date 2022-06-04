<?php

/**
 * Create symlink in server
 * 
 * Place this file in root directory and execute
 * 
 * $destination = Where the linked folder will be created
 * $target = Which folder to be linked
 */

$destination = $_SERVER['DOCUMENT_ROOT'] . '/storage/app/public';
$target = $_SERVER['DOCUMENT_ROOT'] . '/public/storage';

symlink($destination, $target);
