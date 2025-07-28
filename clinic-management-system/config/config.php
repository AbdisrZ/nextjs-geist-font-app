<?php
// Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'clinic_db');

// Application Configuration
define('APP_NAME', 'Sistem Manajemen Klinik');
define('APP_VERSION', '1.0.0');
define('BASE_URL', '/clinic-management-system/public/');

// Session Configuration
define('SESSION_TIMEOUT', 3600); // 1 hour in seconds

// Timezone
date_default_timezone_set('Asia/Jakarta');

// Error Reporting (set to 0 in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Security Settings
define('HASH_ALGO', PASSWORD_DEFAULT);
define('SESSION_NAME', 'clinic_session');

// File Upload Settings
define('MAX_FILE_SIZE', 5 * 1024 * 1024); // 5MB
define('UPLOAD_PATH', __DIR__ . '/../uploads/');

// Pagination
define('RECORDS_PER_PAGE', 20);

// Queue Settings
define('QUEUE_PREFIX', 'Q');
define('AUTO_REFRESH_INTERVAL', 5000); // milliseconds for display screen

// Audit Log Settings
define('ENABLE_AUDIT_LOG', true);
?>
