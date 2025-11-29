<?php
include_once 'config/database.php';
$page = $_GET['page'] ?? 'dashboard';
if ($page === 'dashboard') {
    $content_file = 'dashboard.php';
} else {
    $content_file = 'modules/' . $page . '.php';
}
if (file_exists($content_file)) {

    // 4.1 Muat Header
    include_once 'views/header.php';

    // 4.2 Muat Konten yang diminta
    include_once $content_file;

    // 4.3 Muat Footer
    include_once 'views/footer.php';

} else {
    http_response_code(404);
    include_once 'views/header.php';
    echo "<h2>404 Error</h2><p>Halaman <code>" . htmlspecialchars($page) . "</code> tidak ditemukan.</p>";
    include_once 'views/footer.php';
}
?>