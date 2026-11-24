<?php

namespace Core\Middleware;

class Authenticated
{
    public function handle()
    {
        // Iniciar la sesión si no está iniciada
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Verificar si el usuario ha iniciado sesión
        if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
            // Redirigir a la pantalla de inicio de sesión
            header('Location: /Z');
            exit();
        }
    }
}