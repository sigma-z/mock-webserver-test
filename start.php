<?php

use donatj\MockWebServer\MockWebServer;

require __DIR__ . '/vendor/autoload.php';

DG\BypassFinals::enable();

echo 'try to start mock webserver' . "\n";
$server = new MockWebServer();
$server->start();
echo 'successfully started the mock webserver' . "\n";
