<?php
require_once __DIR__ . '/vendor/autoload.php';

use Webmozart\PathUtil\Path;
use Symfony\Component\Yaml\Yaml;

$config = null;
try {
    $config = Yaml::parse(file_get_contents(Path::join(__DIR__, 'config.yml')));
} catch (Exception $e) {
    fwrite(STDERR, $e->getMessage() . PHP_EOL);
    exit(1);
}

var_export($config);
