<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "admin") {
        ?>
        <!DOCTYPE html>
        <html lang="id">
        <head>
            <meta charset="UTF-8">
            <title>Proses Login</title>
            <style>
                body { 
                    font-family: 'Times New Roman', Times, serif; 
                    margin: 30px; 
                }
                h1 { 
                    font-size: 28px; 
                    margin-bottom: 15px; 
                }
                h2 { 
                    font-weight: normal; 
                    font-size: 24px; 
                }
                .highlight { 
                    color: #0000cc; 
                    font-weight: bold; }
                a { 
                    color: #330066; 
                    text-decoration: underline; 
                    font-size: 20px; 
                }
            </style>
        </head>
        <body>
            <h1>Login berhasil!</h1>
            <h2>Selamat datang, <span class="highlight">admin</span>.</h2>
            <br>
            <a href="login.php">kembali ke halaman login</a>
        </body>
        </html>
        <?php
    } else {
        ?>
        <!DOCTYPE html>
        <html lang="id">
        <head>
            <meta charset="UTF-8">
            <title>Proses Login</title>
            <style>
                body { 
                    font-family: 
                    'Times New Roman', Times, serif; 
                    margin: 30px; 
                }
                .error-text { 
                    color: #cc0000; 
                    font-size: 24px; 
                    font-weight: bold; 
                }
                .error-text span { 
                    color: black; }
                a { 
                    color: #330066; 
                    text-decoration: underline; 
                    font-size: 20px;
                }
            </style>
        </head>
        <body>
            <p class="error-text">Username : <span><?php echo htmlspecialchars($username); ?></span> Tidak Terdaftar!</p>
            <br>
            <a href="login.php">kembali ke halaman login</a>
        </body>
        </html>
        <?php
    }
} else {
    header("Location: login.php");
    exit();
}
?>