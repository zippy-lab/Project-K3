<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Ensure tmp directories exist for Vercel serverless read-only filesystem
$tmpDirs = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
    '/tmp/database',
];

foreach ($tmpDirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// Copy sqlite database if it exists, or create a fresh one in /tmp
if (!file_exists('/tmp/database/database.sqlite')) {
    if (file_exists(__DIR__.'/../database/database.sqlite')) {
        copy(__DIR__.'/../database/database.sqlite', '/tmp/database/database.sqlite');
    } else {
        touch('/tmp/database/database.sqlite');
    }
}

// Maintenance mode check
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register composer autoloader
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel application
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
