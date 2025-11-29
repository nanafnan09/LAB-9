<?php
session_unset();
session_destroy();

// Redirect ke halaman login
header('Location: index.php?page=auth/login');
exit();
?>