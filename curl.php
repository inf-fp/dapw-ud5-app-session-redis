<?php
$driver = getenv('SESSION_DRIVER') ?: 'files';
$staticPrefix = getenv('STATIC_DOMAIN') ?: '/static/';

if ($driver === 'redis') {
    ini_set('session.save_handler', 'redis');
    $redisUrl = getenv('REDIS_URL') ?: 'tcp://redis:6379';
    ini_set('session.save_path', $redisUrl);
} else {
    ini_set('session.save_handler', 'files');
    ini_set('session.save_path', '/tmp');
}

session_start();
$_SESSION['visits'] = ($_SESSION['visits'] ?? 0) + 1;
$visits = $_SESSION['visits'];
$appName = getenv('APP_NAME') ?: 'unknown';
?>