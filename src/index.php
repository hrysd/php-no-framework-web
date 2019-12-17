<?php

require('../vendor/autoload.php');

$sentryDsn = getenv('SENTRY_DSN');

if ($sentryDsn) {
    \Sentry\init(['dsn' => $sentryDsn]);
}


count(null);

$path = $_GET['path'];

switch ($path) {
    case 'hoge':
        echo 'hoge';
        break;
    case 'e_warning':
        echo WARNING;
        break;
    default:
        echo 'Hey!';
        break;
}
