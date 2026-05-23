<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 20px;
        }
        .login-container {
            width: 450px;
            border: 1px solid #ccc;
            padding-bottom: 15px;
        }
        .header-blue {
            background-color: #000099;
            color: white;
            text-align: center;
            font-size: 45px;
            padding: 10px 0;
            margin-bottom: 15px;
        }
        .form-group {
            margin: 10px 15px;
        }
        .form-group label {
            display: inline-block;
            width: 100px;
            font-size: 16px;
        }
        .form-group input {
            width: 280px;
            padding: 4px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .btn-container {
            margin-left: 120px;
            margin-top: 10px;
            margin-bottom: 20px;
        }
        .btn-container button {
            padding: 3px 12px;
            cursor: pointer;
        }
        .footer {
            border-top: 1px solid #ccc;
            padding: 10px 15px 0 15px;
            font-size: 15px;
            line-height: 1.4;
        }
    </style>
</head>
<body>

<div class="login-container">
    <div class="header-blue">Login</div>
    
    <form action="prosesLogin.php" method="POST" autocomplete="off">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" autocomplete="new-password" required>
        </div>
        <div class="btn-container">
            <button type="submit" name="submit">login</button>
        </div>
    </form>
    
    <div class="footer">
        @UKM2014<br>
        Imelda-2473006<sup>©</sup>
    </div>
</div>

</body>
</html>