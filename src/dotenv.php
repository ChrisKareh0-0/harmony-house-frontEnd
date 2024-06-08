<?php
if (file_exists(__DIR__ . '/../.env')) {
    $lines = file(__DIR__ . '/../.env');
    foreach ($lines as $line) {
        if (trim($line) && strpos($line, '=') !== false) {
            list($name, $value) = explode('=', trim($line), 2);
            putenv(sprintf('%s=%s', $name, $value));
        }
    }
}
?>
