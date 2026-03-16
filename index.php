<?php
$driver = getenv('SESSION_DRIVER') ?: 'files';

if ($driver === 'redis') {
    ini_set('session.save_handler', 'redis');
    $redisUrl = getenv('REDIS_URL') ?: 'redis://redis:6379';
    ini_set('session.save_path', $redisUrl);
} else {
    ini_set('session.save_handler', 'files');
    ini_set('session.save_path', '/tmp');
}

session_start();

if (!isset($_SESSION['visits'])) {
    $_SESSION['visits'] = 1;
} else {
    $_SESSION['visits']++;
}

$app_name = getenv('APP_NAME') ?: 'NONE';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $app_name ?></title>
</head>
<body>
    <h1>Aplicación <?= $app_name ?></h1>

    <p>Accediste a esta página <strong><?= $_SESSION['visits'] ?></strong> veces en esta sesión.</p>

    <p>Método de sesión: <strong><?= $driver ?></strong></p>
</body>
</html>