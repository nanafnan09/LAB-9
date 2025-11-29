<?php
// Cek apakah form sudah disubmit
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // --- LOGIKA VALIDASI ---
    
    // OPSI 1: Hardcoded (Untuk pengujian cepat Praktikum)
    // Gunakan username: admin, password: admin
    if ($username == 'admin' && $password == 'admin') {
        
        // Login Sukses
        $_SESSION['is_logged_in'] = true;
        $_SESSION['username'] = $username;
        
        // Redirect ke Dashboard
        header('Location: index.php?page=dashboard');
        exit();
        
    } else {
        // Login Gagal
        $error_message = "Username atau Password salah!";
    }
}
?>

<div class="login-container">
    <h2>Login System</h2>
    
    <?php if(isset($error_message)): ?>
        <div class="alert-error">
            <?= $error_message; ?>
        </div>
    <?php endif; ?>

    <form action="" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required placeholder="Masukkan username (admin)">
        </div>
        
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required placeholder="Masukkan password (admin)">
        </div>
        
        <div class="form-group">
            <input type="submit" name="submit" value="Login" class="btn-login">
        </div>
    </form>
</div>