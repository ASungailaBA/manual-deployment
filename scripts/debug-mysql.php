<?php declare(strict_types=1);

require_once dirname(__DIR__) . '/bootstrap.php';

$connection = new PDO(
    $_ENV['DATABASE_DSN'],
    $_ENV['DATABASE_USER'],
    $_ENV['DATABASE_PASSWORD'],
);

$result = $connection->query('SHOW VARIABLES');
$debug = [];

foreach ($result->fetchAll(PDO::FETCH_BOTH) as $row) {
    $debug[$row[0]] = $row[1];
}

echo PHP_EOL . json_encode($debug, JSON_PRETTY_PRINT) . PHP_EOL;
