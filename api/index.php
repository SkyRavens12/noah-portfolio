<?php

// Ensure writable temporary storage and cache directories exist on Vercel's read-only filesystem
$tmpDirs = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
    '/tmp/bootstrap/cache',
];

foreach ($tmpDirs as $dir) {
    if (! is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// Forward Vercel serverless requests to Laravel's front controller
require __DIR__.'/../public/index.php';
