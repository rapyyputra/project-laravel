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
            background-color: #F5F6FA;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .login-container {
            background-color: #ffffff;
            padding: 40px 30px;
            border-radius: 18px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 26px;
            font-weight: 600;
            color: #2C3E50;
        }

        .input-group {
            position: relative;
            margin-bottom: 25px;
        }

        .input-group input,
        .input-group select {
            width: 100%;
            padding: 14px 45px;
            border: 1px solid #dcdde1;
            border-radius: 12px;
            background-color: #f1f2f6;
            font-size: 14px;
            color: #2C3E50;
            transition: 0.3s;
            appearance: none;
        }

        .input-group input:focus,
        .input-group select:focus {
            border-color: #4b6cb7;
            outline: none;
            background-color: #ffffff;
        }

        .input-group i {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #a4b0be;
        }

        .forgot {
            text-align: right;
            font-size: 13px;
            margin-bottom: 30px;
        }

        .forgot a {
            color: #4b6cb7;
            text-decoration: none;
        }

        .forgot a:hover {
            text-decoration: underline;
        }

        .btn-login {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #4b6cb7, #182848);
            border: none;
            border-radius: 12px;
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 0.3s ease;
        }

        .btn-login:hover {
            opacity: 0.95;
        }

        .btn-login i {
            margin-left: 8px;
        }

        .register-link {
            text-align: center;
            margin-top: 25px;
            font-size: 14px;
            color: #636e72;
        }

        .register-link a {
            color: #4b6cb7;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Login SIAKAD</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Email" required autofocus>
            </div>

            <!-- Password -->
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <!-- Role -->
<div class="input-group">
    <i class="fas fa-user-tag"></i>
    <select name="role" required style="
        width: 100%;
        padding: 14px 45px;
        border: 1px solid #dcdde1;
        border-radius: 12px;
        background-color: #f1f2f6;
        font-size: 14px;
        color: #2C3E50;
        appearance: none;
        background-image: url('data:image/svg+xml;utf8,<svg fill=\'%236b7280\' height=\'24\' viewBox=\'0 0 24 24\' width=\'24\' xmlns=\'http://www.w3.org/2000/svg\'><path d=\'M7 10l5 5 5-5z\'/></svg>');
        background-repeat: no-repeat;
        background-position: right 15px center;
        background-size: 16px 16px;
    ">
        <option disabled selected>Pilih Role</option>
        <option value="mahasiswa">Mahasiswa</option>
        <option value="dosen">Dosen</option>
    </select>
</div>


            <!-- Forgot Password -->
            <div class="forgot">
                <a href="{{ route('password.request') }}">Lupa Password?</a>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn-login">
                Login
                <i class="fas fa-arrow-right"></i>
            </button>
        </form>

        <!-- Register Link -->
        <div class="register-link">
            Belum punya akun?
            <a href="{{ route('register') }}">Daftar di sini</a>
        </div>
    </div>

</body>
</html>
