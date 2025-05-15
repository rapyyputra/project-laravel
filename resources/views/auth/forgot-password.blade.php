<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password - SIAKAD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        .forgot-container {
            background-color: #ffffff;
            padding: 40px 30px;
            border-radius: 18px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
        }

        .forgot-container h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 24px;
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

        .btn-send {
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

        .btn-send:hover {
            opacity: 0.95;
        }

        .back-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #636e72;
        }

        .back-link a {
            color: #4b6cb7;
            text-decoration: none;
        }

        .back-link a:hover {
            text-decoration: underline;
        }

        .alert {
            padding: 12px;
            background-color: #dff0d8;
            color: #3c763d;
            border-radius: 8px;
            font-size: 14px;
            margin-bottom: 20px;
        }

        @media (max-width: 480px) {
            .forgot-container {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>

    <div class="forgot-container">
        <h2>Forgot Your Password?</h2>

        @if (session('status'))
            <div class="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email -->
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input id="email" type="email" name="email" placeholder="you@example.com" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit -->
            <button type="submit" class="btn-send">
                Send Reset Link
            </button>
        </form>

        <!-- Back to login -->
        <div class="back-link">
            Back to <a href="{{ route('login') }}">Login</a>
        </div>
    </div>

</body>
</html>
