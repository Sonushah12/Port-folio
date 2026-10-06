<?php
// Keep development sessions usable without requiring a system-wide PHP configuration.
if (session_status() !== PHP_SESSION_ACTIVE) {
    $sessionDirectory = sys_get_temp_dir() . '/sonu-portfolio-sessions';
    if (!is_dir($sessionDirectory)) {
        mkdir($sessionDirectory, 0700, true);
    }
    session_save_path($sessionDirectory);
    session_start(['cookie_httponly' => true, 'cookie_samesite' => 'Lax', 'cookie_secure' => !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off']);
}
if (empty($_SESSION['contact_token'])) {
    $_SESSION['contact_token'] = bin2hex(random_bytes(32));
}
