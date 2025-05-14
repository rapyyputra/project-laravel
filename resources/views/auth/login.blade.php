<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SIAKAD</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a2e5e6fa4c.js" crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            height: 100vh;
            background-color: #f2f2f2;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-box {
            background-color: #ffffff;
            padding: 50px 40px;
            border-radius: 16px;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
        }

        .login-box h2 {
            text-align: center;
            margin-bottom: 35px;
            font-size: 28px;
            color: #333333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .input-group {
            position: relative;
            margin-bottom: 25px;
        }

        .input-group input {
            width: 100%;
            padding: 14px 45px 14px 45px;
            border: none;
            border-radius: 10px;
            background-color: #f0f0f0;
            font-size: 14px;
            color: #333;
        }

        .input-group i {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 15px;
            color: #999;
        }

        .forgot {
            text-align: right;
            font-size: 13px;
            margin-bottom: 30px;
        }

        .forgot a {
            color: #666;
            text-decoration: none;
        }

        .forgot a:hover {
            text-decoration: underline;
        }

        .btn-login {
            padding: 14px;
            background: linear-gradient(45deg, #4b6cb7, #182848);
            border: none;
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            border-radius: 12px;
            cursor: pointer;
            transition: 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-login i {
            margin-left: 8px;
        }

        .btn-login:hover {
            opacity: 0.9;
        }

        @media (max-width: 500px) {
            .login-box {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>

    <div class="login-box">
        <h2>Sign in</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="abc@email.com" required autofocus>
            </div>

            <!-- Password -->
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Your password" required>
            </div>

            <!-- Forgot password -->
            <div class="forgot">
                <a href="{{ route('password.request') }}">Forgot Password?</a>
            </div>

            <!-- Login Button -->
            <button type="submit" class="btn-login">
                SIGN IN
                <i class="fas fa-arrow-right"></i>
            </button>
        </form>
    </div>

</body>
</html>
