<?php

// Los datos de conexión se leen de variables de entorno; nunca se guardan en el repositorio.
// En local basta con los valores por defecto de XAMPP o MySQL (root sin contraseña).
return [
    "database" => [
        "host" => getenv('DB_HOST') ?: '127.0.0.1',
        "port" => getenv('DB_PORT') ?: '3306',
        "dbname" => getenv('DB_NAME') ?: 'PROYECTO_Z2',
        "user" => getenv('DB_USER') ?: 'root',
        "password" => getenv('DB_PASSWORD') ?: '',
        // Ruta opcional a un certificado CA para conexiones con SSL (por ejemplo, MySQL en la nube)
        "ssl_ca" => getenv('DB_SSL_CA') ?: null,
    ],
];
