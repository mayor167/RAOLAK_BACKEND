<?php
// Set session cookie parameters (lifetime)
session_set_cookie_params([
    'lifetime' => 1800, // 1800 seconds = 30 minutes
    'path' => '/', // Root path accessible to all directories
    'secure' => false, // Set to true if using HTTPS
    'httponly' => true, // HTTP only cookie, not accessible via JavaScript
    'samesite' => 'Lax' // Mitigates CSRF attacks
]);

// Start or resume the session
session_start();

// Interval for session regeneration (5 minutes)
$interval = 60 * 5;

// Check if session ID needs to be regenerated
if (!isset($_SESSION['last_regeneration'])) {
    $sessionID = session_regenerate_id(true); // Regenerate session ID and delete old session file
    $_SESSION['last_regeneration'] = time();
    echo '<p>Session generated at: ' . date('Y-m-d H:i:s') . '</p>';
    echo '<p>Session ID: ' . $sessionID . '</p>';
} elseif (time() - $_SESSION['last_regeneration'] >= $interval) {
    $sessionID = session_regenerate_id(true); // Regenerate session ID and delete old session file
    $_SESSION['last_regeneration'] = time();
    echo '<p>Last session ID regenerated at: ' . date('Y-m-d H:i:s', $_SESSION['last_regeneration']) . '</p>';
    echo '<p>New Session ID: ' . $sessionID . '</p>';
}
?>
