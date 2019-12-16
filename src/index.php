<?php

require('../vendor/autoload.php');

$sentryDsn = getenv('SENTRY_DSN');

if ($sentryDsn) {
    \Sentry\init(['dsn' => $sentryDsn]);
}


$path = $_GET['path'];

switch ($path) {
    case 'hoge':
        echo 'hoge';
    case 'e_warning':
        echo WARNING;
    default:
        echo 'Hey!';
}
