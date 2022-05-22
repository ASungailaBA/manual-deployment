<?php declare(strict_types=1);

use Symfony\Component\Dotenv\Dotenv;

require __DIR__ . '/vendor/autoload.php';

(new Dotenv(false))->loadEnv(__DIR__ . '/.env');
