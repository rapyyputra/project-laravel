<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - SIAKAD</title>
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
            background-color: #f5f6fa;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .register-container {
            background-color: #ffffff;
            padding: 40px 30px;
            border-radius: 18px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
        }

        .register-container h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 26px;
            font-weight: 600;
            color: #2c3e50;
        }

        .input-group {
            position: relative;
            margin-bottom: 25px;
        }

        .input-group input {
            width: 100%;
            padding: 14px 45px;
            border: 1px solid #dcdde1;
            border-radius: 12px;
            background-color: #f1f2f6;
            font-size: 14px;
            color: #2C3E50;
            transition: 0.3s;
        }

        .input-group input:focus {
            border-color: #4b6cb7;
            background-color: #ffffff;
            outline: none;
        }

        .input-group i {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #a4b0be;
        }

        .btn-register {
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

        .btn-register:hover {
            opacity: 0.95;
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #636e72;
        }

        .login-link a {
            color: #4b6cb7;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .register-container {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>

    <div class="register-container">
        <h2>Create Account 📝</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}" required autofocus>
                @error('name')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="you@example.com" value="{{ old('email') }}" required>
                @error('email')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Create Password" required>
                @error('password')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            </div>

            <!-- Register Button -->
            <button type="submit" class="btn-register">
                REGISTER
            </button>
        </form>

        <!-- Login Link -->
        <div class="login-link">
            Already have an account?
            <a href="{{ route('login') }}">Login</a>
        </div>
    </div>

</body>
</html>
