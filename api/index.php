<?php

// Direct storage ke folder /tmp Vercel (karena Vercel read-only)
$_ENV['APP_STORAGE'] = '/tmp/storage';

if (!is_dir('/tmp/storage')) {
    mkdir('/tmp/storage/framework/views', 0755, true);
    mkdir('/tmp/storage/framework/cache', 0755, true);
    mkdir('/tmp/storage/framework/sessions', 0755, true);
    mkdir('/tmp/storage/logs', 0755, true);
}

// Forward Request ke Public Laravel
require __DIR__ . '/../public/index.php';