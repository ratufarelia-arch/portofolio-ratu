<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Buat folder storage di /tmp Vercel
$storagePath = '/tmp/storage';
if (!is_dir($storagePath)) {
    mkdir($storagePath . '/framework/views', 0755, true);
    mkdir($storagePath . '/framework/cache/data', 0755, true);
    mkdir($storagePath . '/framework/sessions', 0755, true);
    mkdir($storagePath . '/logs', 0755, true);
}

putenv("APP_STORAGE={$storagePath}");
$_ENV['APP_STORAGE'] = $storagePath;

// Autoload & Booting
require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

// Bind path storage secara benar ke instance Application
$app->useStoragePath($storagePath);

// Handle request
$request = Request::capture();
$response = $app->handle($request);
$response->send();