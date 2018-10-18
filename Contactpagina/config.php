<?php
/**
 Config.php file for the PDO connection
 */

return [
    'database' => [
        'name' => 'gezinshuis',
        'username' => 'root',
        'password' => 'ruigejoostie1',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    ]
];