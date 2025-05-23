<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Akun - SIAKAD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a2e5e6fa4c.js" crossorigin="anonymous"></script>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            position: relative;
            overflow-x: hidden;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 80%, rgba(120, 119, 198, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(120, 119, 198, 0.2) 0%, transparent 50%);
            pointer-events: none;
        }

        .register-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            padding: 45px 35px;
            border-radius: 24px;
            max-width: 450px;
            width: 100%;
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.15),
                0 0 0 1px rgba(255, 255, 255, 0.2);
            position: relative;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .register-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2, #f093fb);
            border-radius: 24px 24px 0 0;
        }

        h2 {
            text-align: center;
            font-size: 28px;
            font-weight: 700;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 35px;
            position: relative;
        }

        h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            border-radius: 2px;
        }

        .input-group {
            position: relative;
            margin-bottom: 24px;
        }

        .input-group input,
        .input-group select {
            width: 100%;
            padding: 16px 50px;
            border: 2px solid rgba(102, 126, 234, 0.1);
            border-radius: 16px;
            background: linear-gradient(145deg, #f8f9ff, #ffffff);
            font-size: 15px;
            color: #2c3e50;
            transition: all 0.3s ease;
            appearance: none;
            font-weight: 500;
        }

        .input-group input:focus,
        .input-group select:focus {
            border-color: #667eea;
            background: #ffffff;
            outline: none;
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
            transform: translateY(-2px);
        }

        .input-group input:hover,
        .input-group select:hover {
            border-color: rgba(102, 126, 234, 0.3);
            transform: translateY(-1px);
        }

        .input-group i {
            position: absolute;
            top: 50%;
            left: 18px;
            transform: translateY(-50%);
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-size: 16px;
            z-index: 1;
        }

        .btn-register {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            border: none;
            border-radius: 16px;
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-register::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
        }

        .btn-register:hover::before {
            left: 100%;
        }

        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 30px rgba(102, 126, 234, 0.4);
        }

        .btn-register:active {
            transform: translateY(0);
        }

        .login-link {
            text-align: center;
            font-size: 14px;
            margin-top: 25px;
            color: #636e72;
            font-weight: 500;
        }

        .login-link a {
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .login-link a:hover {
            text-decoration: underline;
            text-decoration-color: #667eea;
        }

        select {
            background-image: url("data:image/svg+xml,%3Csvg fill='%23667eea' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M7 10l5 5 5-5z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 18px center;
            background-size: 20px 20px;
        }

        .error-text {
            font-size: 13px;
            color: #e74c3c;
            margin-top: 6px;
            padding-left: 12px;
            font-weight: 500;
        }

        /* Floating animation for container */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .register-container {
            animation: float 6s ease-in-out infinite;
        }

        /* Responsive design */
        @media (max-width: 480px) {
            .register-container {
                padding: 35px 25px;
                margin: 20px;
            }
            
            h2 {
                font-size: 24px;
            }
            
            .input-group input,
            .input-group select {
                padding: 14px 45px;
            }
        }

        /* Additional decorative elements */
        .register-container::after {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 100px;
            height: 100px;
            background: radial-gradient(circle, rgba(102, 126, 234, 0.1) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }

        /* Enhanced focus states */
        .input-group {
            position: relative;
        }

        .input-group::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            transition: width 0.3s ease;
            border-radius: 1px;
        }

        .input-group input:focus + i::after,
        .input-group select:focus + i::after {
            width: 100%;
        }
    </style>
</head>
<body>

    <div class="register-container">
        <h2>Daftar Akun 🎓</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Role -->
            <div class="input-group">
                <i class="fas fa-user-tag"></i>
                <select name="role" required>
                    <option disabled selected>Pilih Role</option>
                    <option value="mahasiswa" {{ old('role') == 'mahasiswa' ? 'selected' : '' }}>Mahasiswa</option>
                    <option value="dosen" {{ old('role') == 'dosen' ? 'selected' : '' }}>Dosen</option>
                </select>
            </div>
            @error('role')
                <div class="error-text">{{ $message }}</div>
            @enderror

            <!-- Name -->
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="name" placeholder="Nama Lengkap" value="{{ old('name') }}" required>
            </div>
            @error('name')
                <div class="error-text">{{ $message }}</div>
            @enderror

            <!-- Email -->
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
            </div>
            @error('email')
                <div class="error-text">{{ $message }}</div>
            @enderror

            <!-- Password -->
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            @error('password')
                <div class="error-text">{{ $message }}</div>
            @enderror

            <!-- Confirm Password -->
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>
            </div>

            <!-- Submit -->
            <button type="submit" class="btn-register">Daftar</button>
        </form>

        <div class="login-link">
            Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a>
        </div>
    </div>

</body>
</html>